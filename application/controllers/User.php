<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public $username;
    public $id;

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('level')) {
            redirect('auth/login');
        } elseif ($this->session->userdata('level') == 'user') {
            $this->load->model('m_user');
            $this->username = $this->session->userdata('username');
            $this->id = $this->session->userdata('id');
        } else {
            redirect('auth/login');
        }
    }
    public function index()
    {
        $data["title"]="Dashboard";
        $a = $this->db->get_where('surat_masuk', array('id_user' => $this->id));
        $b = $this->db->get_where('surat_keluar', array('id_user' => $this->id));
        $c = $this->db->get_where('retensi', array('id_user' => $this->id));
        $d = $this->db->get_where('pinjam', array('id_user' => $this->id));

        $data['sm'] = $a->num_rows();
        $data['sk'] = $b->num_rows();
        $data['ret'] = $c->num_rows();
        $data['pin'] = $d->num_rows();
        $data['mhs'] = $this->M_user->getMhsById($this->id);
        $data['isTugas'] = $this->M_user->isTugas();
        $data['getTugas'] = $this->M_user->getTugas();

        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
        
        $this->load->view('user/index', $data);
        $this->load->view('templates_user/footer');
    }

    public function laporan_suratmasuk()
    {
        $data["title"]="Surat Masuk";
        $data['surat_masuk'] = $this->m_user->getSuratMasuk($this->id);
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/laporan_suratmasuk', $data);
        $this->load->view('templates_user/footer');
    }
    public function rapat_pimpinan()
    {
        $data["title"]="Buku Agenda Rapat";
        $data['surat_masuk'] = $this->M_user->getRapat();
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
        
        $this->load->view('user/laporan_rapat', $data);
        $this->load->view('templates/footer');
    }
    public function rapat_exp($time)
    {
        $data['surat_masuk'] = $this->M_user->getRapatBy($time);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Jadwal Rapat ".$time.".pdf";
        //	$this->pdf->stream('laporan-data-siswa.pdf', array('Attachment' => 0));
        $this->pdf->load_view('user/export_rapat', $data);
        // $this->load->view("home/export_disposisi/temp_export");
        # code...
    }

    public function laporan_suratkeluar()
    {
        $data["title"]="Surat Keluar";
        $data['surat_keluar'] = $this->m_user->getSuratKeluar($this->id);
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/laporan_suratkeluar', $data);
        $this->load->view('templates_user/footer');
    }

    public function form_suratmasuk()
    {
        $data["title"]="Tambah Surat Masuk";
        $data['surat_masuk'] = $this->m_user->Laporan_SuratMasuk($this->id);
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/form_suratmasuk', $data);
        $this->load->view('templates_user/footer');
    }

    public function form_suratkeluar()
    {
        $data["title"]="Tambah Surat Keluar";
        $data['surat_masuk'] = $this->m_user->Laporan_SuratKeluar($this->id);
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/form_suratkeluar', $data);
        $this->load->view('templates_user/footer');
    }

    public function proses_tambahdatamasuk()
    {
        $temp = explode(".", $_FILES["file_dokumen"]["name"]);
        $newfilename = round(microtime(true)) . rand() . '.' . $temp[1];
        $config['file_name']            = $newfilename;
        $config['upload_path']          = "lampiran/";
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;


        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file_dokumen')) {
            $this->session->set_flashdata('error_msg', $this->upload->display_errors());

            redirect('user/form_suratmasuk');
        } else {
            $id = $this->m_user->proses_tambahdatamasuk($newfilename, $this->id);
            $this->session->set_flashdata('success', 'Berhasil Tambah Data');
            $inp = $this->input->post('btn_1');
            if ($inp == "SIMPAN") {
                if ($this->input->post('rapat') == 0) {
                    redirect('user/laporan_suratmasuk');
                } else {
                    redirect('user/rapat_pimpinan');
                }
            } else {
                redirect('user/disposisi/' . $id);
            }
        }
    }

    public function proses_updatedatamasuk($no_urut)
    {
        $code = $this->input->post('save');

        if ($code == 'upload') {
            $temp = explode(".", $_FILES["file_dokumen"]["name"]);
            $newfilename = round(microtime(true)) . '.' . $temp[1];

            $config['file_name']            = $newfilename;
            $config['upload_path']          = "lampiran/";
            $config['allowed_types']        = '*';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file_dokumen')) {
                $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                redirect('user/update_datamasuk/' . $no_urut);
            } else {
                $data = [
                    "berkas" => $newfilename,
                ];
                $this->m_user->upd_datamasuk($no_urut, $data);
                $this->session->set_flashdata('success', 'Berhasil Upload Dokumen Baru');
                redirect('user/update_datamasuk/' . $no_urut);
            }
            redirect('user/laporan_suratmasuk');
        } elseif ($code == 'save') {
            $data = [
                "dari" => $this->input->post('dari'),
                "kepada" => "",
                "alamat" => $this->input->post('alamat'),
                "kota" => $this->input->post('kota'),
                "indeks" => $this->input->post('indeks'),
                "no_surat" => $this->input->post('no_surat'),
                "tanggal_surat" => $this->input->post('tanggal_surat'),
                "lampiran" => $this->input->post('lampiran'),
                "perihal" => $this->input->post('perihal'),
                "tanggal_simpan" => $this->input->post('tanggal_simpan'),
                "kategori" => $this->input->post('kategori'),
                "surat_rapat" => $this->input->post('rapat'),
                "kode_simpan" => $this->input->post('kode_simpan'),
                "pokok_soal" => $this->input->post('pokok_soal'),
                "isi_ringkasan" => $this->input->post('editordata'),
                'kode_1' => $this->input->post('input_1'),
                'kode_2' => $this->input->post('input_2'),
                'kode_3' => $this->input->post('input_3'),
                'kode_4' => $this->input->post('input_4'),
                'kode_5' => $this->input->post('input_5'),
                'tgl_rapat' => $this->input->post('tgl_rapat'),
                'waktu_rapat' => $this->input->post('waktu_rapat'),
                'tempat_rapat' => $this->input->post('tempat_rapat'),
                'laci' => "",
                'guide' => "",
                'map' => '',
                'nomor_berkas' => '',
                'id_user' => $this->id

            ];
            $this->m_user->upd_datamasuk($no_urut, $data);
            $this->session->set_flashdata('success', 'Berhasil Update Data');
            if ($this->input->post('rapat') == 0) {
                redirect('user/laporan_suratmasuk');
            } else {
                redirect('user/rapat_pimpinan');
            }
        }
    }


    public function proses_updatedatakeluar($no_urut)
    {
        $code = $this->input->post('save');

        if ($code == 'upload') {
            $temp = explode(".", $_FILES["file_dokumen"]["name"]);
            $newfilename = round(microtime(true)) . '.' . $temp[1];

            $config['file_name']            = $newfilename;
            $config['upload_path']          = "lampiran/";
            $config['allowed_types']        = '*';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file_dokumen')) {
                $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                redirect('user/update_datakeluar/' . $no_urut);
            } else {
                $data = [
                    // "dari" => $this->input->post('dari'),
                    "berkas" => $newfilename,
                ];
                $this->m_user->upd_datakeluar($no_urut, $data);
                $this->session->set_flashdata('success', 'Berhasil Upload Dokumen Baru');
                redirect('user/update_datakeluar/' . $no_urut);
            }
            redirect('user/update_datakeluar/' . $no_urut);
        } elseif ($code == 'save') {
            $data = [
                // "dari" => $this->input->post('dari'),
                "kepada" => $this->input->post('dari'),
                "alamat" => $this->input->post('alamat'),
                "kota" => $this->input->post('kota'),
                "indeks" => $this->input->post('indeks'),
                "no_surat" => $this->input->post('no_surat'),
                "tanggal_surat" => $this->input->post('tanggal_surat'),
                "lampiran" => $this->input->post('lampiran'),
                "perihal" => $this->input->post('perihal'),
                "tanggal_simpan" => $this->input->post('tanggal_simpan'),
                "kategori" => $this->input->post('kategori'),
                "kode_simpan" => $this->input->post('kode_simpan'),
                "pokok_soal" => $this->input->post('pokok_soal'),
                "isi_ringkasan" => $this->input->post('editordata'),
                'kode_1' => $this->input->post('input_1'),
                'kode_2' => $this->input->post('input_2'),
                'kode_3' => $this->input->post('input_3'),
                'kode_4' => $this->input->post('input_4'),
                'kode_5' => $this->input->post('input_5'),
                'surat_rapat' => $this->input->post('surat_rapat'),
                'tgl_rapat' => $this->input->post('tgl_rapat'),
                'waktu_rapat' => $this->input->post('waktu_rapat'),
                'tempat_rapat' => $this->input->post('tempat_rapat'),
                'laci' => "",
                'guide' => "",
                'map' => '',
                'nomor_berkas' => '',
                'id_user' => $this->id

            ];
            $this->m_user->upd_datakeluar($no_urut, $data);
            $this->session->set_flashdata('success', 'Berhasil Update Data');
            if ($this->input->post('surat_rapat') == 0) {
                redirect('user/laporan_suratkeluar');
            } else {
                redirect('user/rapat_pimpinan');
            }
        }
    }

    public function update_datakeluar($no_urut)
    {
        $data["title"]="Edit Surat Keluar";
        $data['surat_masuk'] = $this->m_user->update_datakeluar($no_urut);
        $data['text'] = $this->m_user->update_datakeluar($no_urut);
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/update_suratkeluar', $data);
        $this->load->view('templates_user/footer', $data);
    }

    public function update_datamasuk($no_urut)
    {
        $data["title"]="Edit Surat Masuk";
        $data['surat_masuk'] = $this->m_user->update_datamasuk($no_urut);
        $data['text'] = $this->m_user->update_datamasuk($no_urut);
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/update_suratmasuk', $data);
        $this->load->view('templates_user/footer', $data);
    }

    public function disposisi($id)
    {
        $data["title"]="Disposisi";
        $data['id'] = $id;
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/disposisi', $data);
        $this->load->view('templates_user/footer');
    }

    public function export_disposisi()
    {
        $data = [
            "indeks" => $this->input->post('nomor_peminjam'),
            "kategori" => $this->input->post('kategori'),
            "rahasia" => $this->input->post('rahasia'),
            "biasa" => $this->input->post('biasa'),
            "penting" => $this->input->post('penting'),
            "kode_surat" => $this->input->post('kode_surat'),
            'tanggal_penyelesaian' => $this->input->post('tanggal_penyelesaian'),
            'no_tgl' => $this->input->post('no-tgl'),
            'asal' => $this->input->post('nama_peminjam'),
            'ringkasan' => $this->input->post('ringkasan'),
            'instruksi' => $this->input->post('instruksi'),
            'diteruskan' => $this->input->post('diteruskan'),
            'kepada' => $this->input->post('kepada'),
            'tgl_kembali' => $this->input->post('tgl_kembali'),
            'tgl_surat' => $this->input->post('tgl-surat'),
            'nomor' => $this->input->post('nomor'),
            'tgl-terima' => $this->input->post('instruksi'),
            'code' => $this->input->post('code'),
            'no_disposisi' => $this->input->post('no_disposisi'),
            'dari' => $this->input->post('dari'),
        ];
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "surat disposisi.pdf";
        //	$this->pdf->stream('laporan-data-siswa.pdf', array('Attachment' => 0));
        $this->pdf->load_view('user/export_disposisi/temp_export', $data);
        // $this->load->view("home/export_disposisi/temp_export");

        # code...
    }

    public function pinjam()
    {
        $data["title"]="Rekap Surat Dipinjam";
        $data['pinjam'] = $this->m_user->suratdipinjam();
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('templates_user/pinjam', $data);
        $this->load->view('templates_user/footer');
    }

    public function proses_tambahdatakeluar()
    {
        $temp = explode(".", $_FILES["file_dokumen"]["name"]);
        $newfilename = round(microtime(true)) . '.' . $temp[1];

        $config['file_name']            = $newfilename;
        $config['upload_path']          = "lampiran/";
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file_dokumen')) {
            $this->session->set_flashdata('error_msg', $this->upload->display_errors());
            redirect('user/form_suratkeluar');
        } else {
            $this->m_user->proses_tambahdatakeluar($newfilename, $this->id);
            $this->session->set_flashdata('success', 'Berhasil Tambah Data');
            if ($this->input->post('surat_rapat') == 0) {
                redirect('user/laporan_suratkeluar');
            } else {
                redirect('user/rapat_pimpinan');
            }
        }
    }

    public function jadwal_retensi()
    {
        $data["title"]="Jadwal Retensi Arsip";
        $data['retensi'] = $this->m_user->Laporan_dataretensi($this->id);
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/jadwal_retensi', $data);
        $this->load->view('templates_user/footer');
    }

    public function penyusutan()
    {
        $data["title"]="Penyusutan";
        $data['penyusutan'] = $this->m_user->Laporan_penyusutan($this->id);
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/penyusutan', $data);
        $this->load->view('templates_user/footer');
    }

    public function form_penyusutan()
    {
        $data["title"]="Tambah Penyusutan";
        $data['penyusutan'] = $this->m_user->getpenyusutan();
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/form_penyusutan', $data);
        $this->load->view('templates_user/footer');
    }

    public function form_jadwalretensi()
    {
        $data["title"]="Tambah Retensi";
        $data['penyusutan'] = $this->m_user->getpenyusutan();
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/form_jadwalretensi', $data);
        $this->load->view('templates_user/footer');
    }

    public function proses_tambahpenyusutan()
    {
        $this->m_user->proses_tambahpenyusutan($this->id);
        redirect('user/penyusutan');
    }

    public function proses_tambahdataretensi()
    {
        $this->m_user->proses_tambahdataretensi($this->id);
        redirect('user/jadwal_retensi');
    }

    public function form_pinjamarsip()
    {
        $data["title"]="Tambah Arsip Dipinjam";
        $data['datakategoripinjam'] = $this->m_user->getpinjam();
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/form_pinjamarsip', $data);
        $this->load->view('templates_user/footer');
    }

    public function proses_tambahpinjamdata()
    {
        $this->m_user->proses_tambahpinjamdata();
        redirect('user/pinjam');
    }

    public function buku_agenda()
    {
        $data["title"]="Buku Agenda";  
        $data['surat_masuk'] = $this->m_user->getSuratMasuk($this->id);
        $data['surat_keluar'] = $this->m_user->getSuratKeluar($this->id);
        $data['instansi'] = $this->m_user->get_instansi();
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/buku_agenda', $data);
        $this->load->view('templates_user/footer');
    }

    // edit lokasi map
    public function edit_lokasi($id)
    {
        $data["title"]="Edit Lokasi";
        $data['val'] = $this->m_user->update_datamasuk($id);
        $data['value'] = $id;
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/edit_map', $data);
        $this->load->view('templates_user/footer');
        # code...
    }
    public function edit_lokasi_sk($id)
    {
        $data["title"]="Edit LOkasi Surat Keluar";
        $data['value'] = $id;
        $data['val'] = $this->m_user->update_datakeluar($id);
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/edit_map_sk', $data);
        $this->load->view('templates_user/footer');
        # code...
    }

    public function ubah_lokasi($id)
    {
        $this->m_user->update_lokasi_sm($id);
        redirect("user/buku_agenda");
        # code...
    }

    public function ubah_lokasi_sk($id)
    {
        $this->m_user->update_lokasi_sk($id);
        redirect("user/buku_agenda");
        # code...
    }


    public function update_instansi()
    {
        $temp = explode(".", $_FILES["logo"]["name"]);
        $newfilename = round(microtime(true)) . '.' . $temp[1];

        $config['file_name']            = $newfilename;
        $config['upload_path']          = "files/img/";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('logo')) {
            $this->session->set_flashdata('error_msg', $this->upload->display_errors());
            redirect('user/pengaturan_instansi');
        } else {
            $data = [
                "header_1" => $this->input->post("h1"),
                "header_2" => $this->input->post("h2"),
                "header_3" => $this->input->post("h3"),
                "header_4" => $this->input->post("h4"),
                "header_5" => $this->input->post("h5"),
                "logo" => $newfilename,
            ];
            $this->db->update('instansi', $data);
            $this->session->set_flashdata('success', 'Berhasil Tambah Data');
            redirect('user/pengaturan_instansi');
        }
    }
    public function hapus_datamasuk($no_urut)
    {
        $this->m_user->hapus_datamasuk($no_urut);
        redirect('user/laporan_suratmasuk');
    }

    public function hapus_datakeluar($no_urut)
    {
        $this->m_user->hapus_datakeluar($no_urut);
        redirect('user/laporan_suratkeluar');
    }

    public function hapus_penyusutan($no_urut)
    {
        $this->m_user->hapus_penyusutan($no_urut);
        redirect('user/penyusutan');
    }

    public function hapus_dataretensi($no_urut)
    {
        $this->m_user->hapus_dataretensi($no_urut);
        redirect('user/jadwal_retensi');
    }


    public function edit_profil()
    {
        $this->form_validation->set_rules('name', 'Username', 'required|trim');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim');
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[3]|matches[password3]', [
            'matches' => 'Password doesnt match',
            'min_length' => 'Password too short'
        ]);
        $this->form_validation->set_rules('password3', 'Password', 'required|trim|matches[password2]');
        //    $this->form_validation->set_rules('file', 'File', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data["title"]="Edit Profil";
            $this->load->view('templates/header',$data);
            $this->load->view('user/sidebar');
            $this->load->view('user/sunting');
            $this->load->view('templates_user/footer');
        } else {
            $username    =     $this->input->post('name');
            $password    =     $this->input->post('password1');
            $password2    =     $this->input->post('password2');
            $result = $this->db->get_where('user', ['username' => $username])->row_array();

            if ($result) {
                $this->db->where("username", $username);
                $this->db->where("password", $password);
                $query = $this->db->get('user');
                if ($query->num_rows() > 0) {
                    $this->db->set('password', $password2);
                    $this->db->where('username', $username);
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Sukses Ubah Password
					</div>');
                    redirect('user/edit_profil');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Gagal Ubah Password
					</div>');
                    redirect('user/edit_profil');
                }
            }
        }
    }

    public function update_pinjam($no_urut)
    {
        $this->db->where('no_urut', $no_urut);
        $this->db->update('pinjam', array('status' => 'Sudah Dikembalikan'));
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
					Sukses Update Data
					</div>');
        redirect('user/pinjam');
        # code...
    }

    public function fetch()
    {
        $output = '';
        $query = $this->input->post('query');

        $data = $this->m_user->cariSm($query, $this->id);
        $total = $data->num_rows();

        if ($data->num_rows() > 0  && !empty($query)) {
            $output .= '
				<div class="col-lg-12 mb-2 p-0">
				<div class="card bg-info text-white shadow">
				<div class="card-body">
				<div class="row">
				<div class="col-8">
				  Pencarian di Surat Masuk
				  <div class="text-white-50 medium">Telah Ditemukan ' . $total . ' Data Terkait</div>
				  </div>
				  <div class="col-4">
				  <a href="' . base_url('user/laporan_suratmasuk') . '" class="btn float-right btn-sm btn-dark ">
				  <span class="icon text-white-50">
					<i class="mdi mdi-arrow-right"></i>
				  </span>	
				</a>
				  </div>
				  </div>
				</div>
			  </div>
			  </div>
    ';
        } else {
            $output .= '<div class="col-lg-12 mb-2 p-0">
			<div class="card bg-info text-white shadow">
			  <div class="card-body">
			  <div class="row">
			  <div class="col-6">
				Pencarian di Surat Masuk
				<div class="text-white-50 medium">Telah Ditemukan 0 Data</div>
				</div>
				
				</div>
			  </div>
			</div>
		  </div>
      ';
        }

        echo $output;
        $this->session->set_flashdata('cari', $query);


        # code...
    }
    public function fetch_1()
    {
        $output = '';
        $query = $this->input->post('query');

        $data = $this->m_user->cariSk($query, $this->id);
        $total = $data->num_rows();

        if ($data->num_rows() > 0  && !empty($query)) {
            $output .= '
			<div class="col-lg-12 mb-2 p-0">
			<div class="card bg-info text-white shadow">
			<div class="card-body">
			<div class="row">
			<div class="col-8">
			  Pencarian di Surat Keluar
			  <div class="text-white-50 medium">Telah Ditemukan ' . $total . ' Data Terkait</div>
			  </div>
			  <div class="col-4">
			  <a href="' . base_url('user/laporan_suratkeluar') . '" class="btn float-right btn-sm btn-dark ">
			  <span class="icon text-white-50">
				<i class="mdi mdi-arrow-right"></i>
			  </span>	
			</a>
			  </div>
			  </div>
			</div>
		  </div>
		  </div>
    ';
        } else {
            $output .= '<div class="col-lg-12 mb-2 p-0">
			<div class="card bg-info text-white shadow">
			  <div class="card-body">
				Pencarian di Surat Keluar
				<div class="text-white-50 medium">Telah Ditemukan 0 Data</div>
			  </div>
			</div>
		  </div>
      ';
        }

        echo $output;

        $this->session->set_flashdata('cari', $query);

        # code...
    }
    public function fetch_3()
    {
        $output = '';
        $query = $this->input->post('query');

        $data = $this->m_user->cariRet($query);
        $total = $data->num_rows();

        if ($data->num_rows() > 0  && !empty($query)) {
            $output .= '
			<div class="col-lg-12 mb-2 p-0">
			<div class="card bg-info text-white shadow">
			<div class="card-body">
			<div class="row">
			<div class="col-8">
			  Pencarian di Jadwal Retensi
			  <div class="text-white-50 medium">Telah Ditemukan ' . $total . ' Data Terkait</div>
			  </div>
			  <div class="col-4">
			  <a href="' . base_url('user/jadwal_retensi') . '" class="btn float-right btn-sm btn-dark ">
			  <span class="icon text-white-50">
				<i class="mdi mdi-arrow-right"></i>
			  </span>	
			</a>
			  </div>
			  </div>
			</div>
		  </div>
		  </div>
    ';
        } else {
            $output .= '<div class="col-lg-12 mb-2 p-0">
			<div class="card bg-info text-white shadow">
			  <div class="card-body">
				Pencarian di Jadwal Retensi
				<div class="text-white-50 medium">Telah Ditemukan 0 Data</div>
			  </div>
			</div>
		  </div>
      ';
        }

        echo $output;
        $this->session->set_flashdata('cari', $query);
        # code...
    }
    public function fetch_4()
    {
        $output = '';
        $query = $this->input->post('query');

        $data = $this->m_user->cariPinjam($query);
        $total = $data->num_rows();

        if ($data->num_rows() > 0  && !empty($query)) {
            $output .= '
			<div class="col-lg-12 mb-2 p-0">
			<div class="card bg-info text-white shadow">
			<div class="card-body">
			<div class="row">
			<div class="col-8">
			  Pencarian di Surat Dipinjam
			  <div class="text-white-50 medium">Telah Ditemukan ' . $total . ' Data Terkait</div>
			  </div>
			  <div class="col-4">
			  <a href="' . base_url('user/pinjam') . '" class="btn float-right btn-sm btn-dark ">
			  <span class="icon text-white-50">
				<i class="mdi mdi-arrow-right"></i>
			  </span>	
			</a>
			  </div>
			  </div>
			</div>
		  </div>
		  </div>
    ';
        } else {
            $output .= '<div class="col-lg-12 mb-2 p-0">
			<div class="card bg-info text-white shadow">
			  <div class="card-body">
				Pencarian di Surat Dipinjam
				<div class="text-white-50 medium">Telah Ditemukan 0 Data</div>
			  </div>
			</div>
		  </div>
      ';
        }

        $this->session->set_flashdata('cari', $query);
        echo $output;
        # code...
    }

    public function edit_klasisfikasi_sm($id)
    {
        $data["title"]="Edit Klasifikasi Surat Masuk";
        $data['value'] = $id;
        $data['val'] = $this->m_user->update_datamasuk($id);
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/klasifikasi_sm', $data);
        $this->load->view('templates_user/footer');
        # code...
    }
    public function edit_klasisfikasi_sk($id)
    {
        $data['value'] = $id;
        $data['val'] = $this->m_user->update_datakeluar($id);
        $data["title"]="Edit Klasifikassi Surat Keluar";
        $this->load->view('templates/header',$data);
        $this->load->view('user/sidebar');
       
        $this->load->view('user/klasifikasi_sk', $data);
        $this->load->view('templates_user/footer');
        # code...
    }

    public function upd_klasifikasi_sm($id)
    {
        $data = [
            'kode_1' => $this->input->post('h1'),
            'kode_2' => $this->input->post('h2'),
            'kode_3' => $this->input->post('h3'),
            'kode_4' => $this->input->post('h4'),
            'kode_5' => $this->input->post('h5'),
        ];
        $this->db->where('no_urut', $id);
        $this->db->update('surat_masuk', $data);
        redirect("user/buku_agenda");
        # code...
    }
    public function upd_klasifikasi_sk($id)
    {
        $data = [
            'kode_1' => $this->input->post('h1'),
            'kode_2' => $this->input->post('h2'),
            'kode_3' => $this->input->post('h3'),
            'kode_4' => $this->input->post('h4'),
            'kode_5' => $this->input->post('h5'),

        ];
        $this->db->where('no_urut', $id);
        $this->db->update('surat_keluar', $data);
        redirect("user/buku_agenda");
        # code...
    }
        public function submit_tugas()
    {
        date_default_timezone_set('Asia/Jakarta');
        $data = [
            'id_user' => $this->id,
            'status' => "Selesai",
            'tgl_selesai'=>date('Y-m-d H:i:s')
        ];
        $this->M_user->submit_tugas($data);
        redirect('user');
    }
    public function download_tugas()
    {
        $this->load->helper('download');
        $filename = $this->M_user->file_tugas();
        $path = file_get_contents(base_url()."files/".$filename); // get file name
        force_download($filename, $path); // start download`
    }
}
