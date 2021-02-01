<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        // parent::__construct();
        parent::__construct();
        if (!$this->session->userdata('level')) {
            redirect('auth/login');
        } elseif ($this->session->userdata('level') == 'admin') {
            $this->load->model('M_data');
            $username = $this->session->userdata('username');
        } else {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['sm']  = $this->db->count_all('surat_masuk');
        $data['sk'] = $this->db->count_all('surat_keluar');
        $data['ret'] = $this->db->count_all('retensi');
        $data['ar'] = $this->db->count_all('pinjam');
        $data['data'] = 'bg';
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }

    public function dashboard()
    {
        $data['data'] = 'bg';
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }

    public function laporan_suratmasuk()
    {
        $data['surat_masuk'] = $this->M_data->getSuratMasuk();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/laporan_suratmasuk', $data);
        $this->load->view('templates/footer');
    }
    public function rapat_pimpinan()
    {
        $data['surat_masuk'] = $this->M_data->getRapat();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/laporan_rapat', $data);
        $this->load->view('templates/footer');
    }
    public function rapat_exp($time)
    {
        $data['surat_masuk'] = $this->M_data->getRapatBy($time);
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Jadwal Rapat ".$time.".pdf";
        //	$this->pdf->stream('laporan-data-siswa.pdf', array('Attachment' => 0));
        $this->pdf->load_view('home/export_rapat', $data);
        // $this->load->view("home/export_disposisi/temp_export");
        # code...
    }

    public function laporan_suratkeluar()
    {
        $data['surat_keluar'] = $this->M_data->getSuratKeluar();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/laporan_suratkeluar', $data);
        $this->load->view('templates/footer');
    }

    public function form_penyusutan()
    {
        $data['penyusutan'] = $this->M_data->getpenyusutan();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/form_penyusutan', $data);
        $this->load->view('templates/footer');
    }

    public function form_jadwalretensi()
    {
        $data['penyusutan'] = $this->M_data->getpenyusutan();
        $data['retensi'] = $this->M_data->getretensi();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/form_jadwalretensi', $data);
        $this->load->view('templates/footer');
    }

    public function form_suratmasuk()
    {
        $data['surat_masuk'] = $this->M_data->Laporan_SuratMasuk();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/form_suratmasuk', $data);
        $this->load->view('templates/footer');
    }

    public function form_suratkeluar()
    {
        $data['surat_masuk'] = $this->M_data->Laporan_SuratKeluar();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/form_suratkeluar', $data);
        $this->load->view('templates/footer');
    }

    public function jadwal_retensi()
    {
        $data['retensi'] = $this->M_data->Laporan_dataretensi();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/jadwal_retensi', $data);
        $this->load->view('templates/footer');
    }

    public function penyusutan()
    {
        $data['penyusutan'] = $this->M_data->Laporan_penyusutan();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/penyusutan', $data);
        $this->load->view('templates/footer');
    }

    public function disposisi($id)
    {
        $data['id'] = $id;

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/disposisi', $data);
        $this->load->view('templates/footer');
    }

    public function pinjam()
    {
        $data['pinjam'] = $this->M_data->suratdipinjam();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('templates/pinjam', $data);
        $this->load->view('templates/footer');
    }

    public function proses_tambahpenyusutan()
    {
        $this->M_data->proses_tambahpenyusutan();
        redirect('home/penyusutan');
    }

    public function proses_tambahdataretensi()
    {
        $this->M_data->proses_tambahdataretensi();
        redirect('home/jadwal_retensi');
    }

    public function proses_tambahdatamasuk()
    {
        $temp = explode(".", $_FILES["file_dokumen"]["name"]);
        $newfilename = round(microtime(true)) . '.' . $temp[1];

        $config['file_name']			= $newfilename;
        $config['upload_path']          = "lampiran/";
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file_dokumen')) {
            $this->session->set_flashdata('error_msg', $this->upload->display_errors());
            redirect('home/form_suratmasuk');
        } else {
            $id = $this->M_data->proses_tambahdatamasuk($newfilename);
            $this->session->set_flashdata('success', 'Berhasil Tambah Data');
            $inp = $this->input->post('btn_1');
            if ($inp == "SIMPAN") {
                if ($this->input->post('rapat') == 0) {
                    redirect('home/laporan_suratmasuk');
                } else {
                    redirect('home/rapat_pimpinan');
                }
            } else {
                redirect('home/disposisi/' . $id);
            }
        }
    }



    public function proses_tambahdatakeluar()
    {
        $temp = explode(".", $_FILES["file_dokumen"]["name"]);
        $newfilename = round(microtime(true)) . '.' . $temp[1];

        $config['file_name']			= $newfilename;
        $config['upload_path']          = "lampiran/";
        $config['allowed_types']        = '*';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file_dokumen')) {
            $this->session->set_flashdata('error_msg', $this->upload->display_errors());
            redirect('home/form_suratkeluar');
        } else {
            $this->M_data->proses_tambahdatakeluar($newfilename);
            $this->session->set_flashdata('success', 'Berhasil Tambah Data');
            redirect('home/laporan_suratkeluar');
        }
    }

    public function form_pinjamarsip()
    {
        $data['datakategoripinjam'] = $this->M_data->getpinjam();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/form_pinjamarsip', $data);
        $this->load->view('templates/footer');
    }

    public function proses_tambahpinjamdata()
    {
        $this->M_data->proses_tambahpinjamdata();
        redirect('home/pinjam');
    }

    public function hapus_penyusutan($no_urut)
    {
        $this->M_data->hapus_penyusutan($no_urut);
        redirect('home/penyusutan');
    }

    public function hapus_dataretensi($no_urut)
    {
        $this->M_data->hapus_dataretensi($no_urut);
        redirect('home/jadwal_retensi');
    }

    public function hapus_datamasuk($no_urut)
    {
        $this->M_data->hapus_datamasuk($no_urut);
        redirect('home/laporan_suratmasuk');
    }

    public function hapus_datakeluar($no_urut)
    {
        $this->M_data->hapus_datakeluar($no_urut);
        redirect('home/laporan_suratkeluar');
    }

    public function update_penyusutan($no_urut)
    {
        $data['penyusutan'] = $this->M_data->Laporan_penyusutan($no_urut);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/penyusutan', $data);
        $this->load->view('templates/footer');
    }

    public function proses_penyusutan($no_urut)
    {
        $this->M_data->proses_updatepenyusutan($no_urut);
        redirect('home/penyusutan');
    }

    public function update_dataretensi($no_urut)
    {
        $data['retensi'] = $this->M_data->Laporan_dataretensi($no_urut);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/jadwal_retensi', $data);
        $this->load->view('templates/footer');
    }

    public function proses_updatedataretensi($no_urut)
    {
        $this->M_data->proses_updatedataretensi($no_urut);
        redirect('home/jadwal_retensi');
    }

    public function update_datamasuk($no_urut)
    {
        $data['surat_masuk'] = $this->M_data->update_datamasuk($no_urut);
        $data['text'] = $this->M_data->update_datamasuk($no_urut);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/update_suratmasuk', $data);
        $this->load->view('templates/footer', $data);
    }

    public function proses_updatedatamasuk($no_urut)
    {
        $code = $this->input->post('save');

        if ($code == 'upload') {
            $temp = explode(".", $_FILES["file_dokumen"]["name"]);
            $newfilename = round(microtime(true)) . '.' . $temp[1];

            $config['file_name']			= $newfilename;
            $config['upload_path']          = "lampiran/";
            $config['allowed_types']        = '*';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file_dokumen')) {
                $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                redirect('home/update_datamasuk/' . $no_urut);
            } else {
                $data = [
                    "berkas" => $newfilename,
                ];
                $this->M_data->upd_datamasuk($no_urut, $data);
                $this->session->set_flashdata('success', 'Berhasil Upload Dokumen Baru');
                redirect('home/update_datamasuk/' . $no_urut);
            }
            redirect('home/laporan_suratmasuk');
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
                'nomor_berkas' => ''

            ];
            $this->M_data->upd_datamasuk($no_urut, $data);
            $this->session->set_flashdata('success', 'Berhasil Update Data');

            if ($this->input->post('rapat') == 0) {
                redirect('home/laporan_suratmasuk');
            } else {
                redirect('home/rapat_pimpinan');
            }
        }
    }

    public function update_datakeluar($no_urut)
    {
        $data['surat_masuk'] = $this->M_data->update_datakeluar($no_urut);
        $data['text'] = $this->M_data->update_datakeluar($no_urut);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/update_suratkeluar', $data);
        $this->load->view('templates/footer', $data);
    }

    public function proses_updatedatakeluar($no_urut)
    {
        $code = $this->input->post('save');

        if ($code == 'upload') {
            $temp = explode(".", $_FILES["file_dokumen"]["name"]);
            $newfilename = round(microtime(true)) . '.' . $temp[1];

            $config['file_name']			= $newfilename;
            $config['upload_path']          = "lampiran/";
            $config['allowed_types']        = '*';
            $config['max_size']             = 10000;
            $config['max_width']            = 10000;
            $config['max_height']           = 10000;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('file_dokumen')) {
                $this->session->set_flashdata('error_msg', $this->upload->display_errors());
                redirect('home/update_datakeluar/' . $no_urut);
            } else {
                $data = [
                    // "dari" => $this->input->post('dari'),
                    "berkas" => $newfilename,
                ];
                $this->M_data->upd_datakeluar($no_urut, $data);
                $this->session->set_flashdata('success', 'Berhasil Upload Dokumen Baru');
                redirect('home/update_datakeluar/' . $no_urut);
            }
            redirect('home/update_datakeluar/' . $no_urut);
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
                'nomor_berkas' => ''

            ];
            $this->M_data->upd_datakeluar($no_urut, $data);
            $this->session->set_flashdata('success', 'Berhasil Update Data');
            if ($this->input->post('surat_rapat') == 0) {
                redirect('home/laporan_suratkeluar');
            } else {
                redirect('home/rapat_pimpinan');
            }
        }
    }

    //format export file

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
        $this->pdf->load_view('home/export_disposisi/temp_export', $data);
        // $this->load->view("home/export_disposisi/temp_export");
        # code...
    }

    //pengaturan instansi
    public function pengaturan_instansi()
    {
        $data = $this->M_data->get_instansi();

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/set_instansi', $data);
        $this->load->view('templates/footer');
    }

    //update instansi
    public function update_instansi()
    {
        $temp = explode(".", $_FILES["logo"]["name"]);
        $newfilename = round(microtime(true)) . '.' . $temp[1];

        $config['file_name']			= $newfilename;
        $config['upload_path']          = "files/img/";
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        if (!$this->upload->do_upload('logo')) {
            $this->session->set_flashdata('error_msg', $this->upload->display_errors());
            redirect('home/pengaturan_instansi');
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
            redirect('home/pengaturan_instansi');
        }
    }

    //buku agenda

    public function buku_agenda()
    {
        $data['surat_masuk'] = $this->M_data->getSuratMasuk();
        $data['surat_keluar'] = $this->M_data->getSuratKeluar();
        $data['instansi'] = $this->M_data->get_instansi();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/buku_agenda', $data);
        $this->load->view('templates/footer');
    }

    // edit lokasi map

    public function edit_lokasi($id)
    {
        $data['val'] = $this->M_data->update_datamasuk($id);
        $data['value'] = $id;
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_map', $data);
        $this->load->view('templates/footer');
        # code...
    }
    public function edit_lokasi_sk($id)
    {
        $data['value'] = $id;
        $data['val'] = $this->M_data->update_datakeluar($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/edit_map_sk', $data);
        $this->load->view('templates/footer');
        # code...
    }

    public function ubah_lokasi($id)
    {
        $this->M_data->update_lokasi_sm($id);
        redirect("home/buku_agenda");
        # code...
    }
    public function ubah_lokasi_sk($id)
    {
        $this->M_data->update_lokasi_sk($id);
        redirect("home/buku_agenda");
        # code...
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
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('home/sunting');
            $this->load->view('templates/footer');
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
                    redirect('home/edit_profil');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
					Gagal Ubah Password
					</div>');
                    redirect('home/edit_profil');
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
        redirect('home/pinjam');

        # code...
    }

    public function fetch()
    {
        $output = '';
        $query = $this->input->post('query');

        $data = $this->M_data->cariSm($query);
        $total = $data->num_rows();

        if ($data->num_rows() > 0  && !empty($query)) {
            $output .= '
				<div class="col-lg-12 mb-2 p-0">
				<div class="card bg-primary text-white shadow">
				<div class="card-body">
				<div class="row">
				<div class="col-8">
				  Pencarian di Surat Masuk
				  <div class="text-white-50 medium">Telah Ditemukan ' . $total . ' Data Terkait</div>
				  </div>
				  <div class="col-4">
				  <a href="' . base_url('home/laporan_suratmasuk') . '" class="btn float-right btn-lg btn-warning ">
				  <span class="icon text-white-50">
					<i class="fas fa-arrow-right"></i>
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
			<div class="card bg-primary text-white shadow">
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

        $data = $this->M_data->cariSk($query);
        $total = $data->num_rows();

        if ($data->num_rows() > 0  && !empty($query)) {
            $output .= '
			<div class="col-lg-12 mb-2 p-0">
			<div class="card bg-success text-white shadow">
			<div class="card-body">
			<div class="row">
			<div class="col-8">
			  Pencarian di Surat Keluar
			  <div class="text-white-50 medium">Telah Ditemukan ' . $total . ' Data Terkait</div>
			  </div>
			  <div class="col-4">
			  <a href="' . base_url('home/laporan_suratkeluar') . '" class="btn float-right btn-lg btn-warning ">
			  <span class="icon text-white-50">
				<i class="fas fa-arrow-right"></i>
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
			<div class="card bg-success text-white shadow">
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

        $data = $this->M_data->cariRet($query);
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
			  <a href="' . base_url('home/jadwal_retensi') . '" class="btn float-right btn-lg btn-warning ">
			  <span class="icon text-white-50">
				<i class="fas fa-arrow-right"></i>
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

        $data = $this->M_data->cariPinjam($query);
        $total = $data->num_rows();

        if ($data->num_rows() > 0  && !empty($query)) {
            $output .= '
			<div class="col-lg-12 mb-2 p-0">
			<div class="card bg-secondary text-white shadow">
			<div class="card-body">
			<div class="row">
			<div class="col-8">
			  Pencarian di Surat Dipinjam
			  <div class="text-white-50 medium">Telah Ditemukan ' . $total . ' Data Terkait</div>
			  </div>
			  <div class="col-4">
			  <a href="' . base_url('home/pinjam') . '" class="btn float-right btn-lg btn-warning ">
			  <span class="icon text-white-50">
				<i class="fas fa-arrow-right"></i>
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
			<div class="card bg-secondary text-white shadow">
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
        $data['value'] = $id;
        $data['val'] = $this->M_data->update_datamasuk($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/klasifikasi_sm', $data);
        $this->load->view('templates/footer');
        # code...
    }
    public function edit_klasisfikasi_sk($id)
    {
        $data['value'] = $id;
        $data['val'] = $this->M_data->update_datakeluar($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/klasifikasi_sk', $data);
        $this->load->view('templates/footer');
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
        redirect("home/buku_agenda");
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
        redirect("home/buku_agenda");
        # code...
    }
    public function tugas()
    {   // if ada tugas:tampilkan tugas, else: buat tugas baru
        $data['data'] = 'bg';
        $data['isTugas'] = $this->M_data->isTugas();
        $data['getTugas'] = $this->M_data->getTugas();
        $data['getMhs'] = $this->M_data->getMhs();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/tugas');
        $this->load->view('templates/footer');
    }
    public function tambahTugas()
    {
        $config['upload_path'] = './files/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['file_name'] = 'tugas';
        $config['overwrite'] = TRUE;
        $config['max_size'] = 20000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('lampiran')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('home/tugas', $error);
        } else {
            $data = array('image_metadata' => $this->upload->data());
            $lampiran =[
                'judul_tugas' => $this->input->post('judul_tugas'),
                'deskripsi_tugas' => $this->input->post('deskripsi_tugas')
            ];
            $this->M_data->addTugas($lampiran);
            redirect('home/tugas'); 
        }
    }
    public function editTugas($id)
    {
        $data['data'] = 'bg';
        $data['getTugas'] = $this->M_data->getTugasById($id);
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar', $data);
        $this->load->view('home/edittugas');
        $this->load->view('templates/footer');
    }
    public function lihatlampiran()
    {
        $this->load->view('home/lampiran');
    }
     public function edit_Tugas($id)
    {
        $config['upload_path'] = './files/';
        $config['allowed_types'] = 'gif|jpg|png|pdf';
        $config['file_name'] = 'tugas';
        $config['overwrite'] = TRUE;
        $config['max_size'] = 20000;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('lampiran')) {
             $lampiran =[
                'judul_tugas' => $this->input->post('judul_tugas'),
                'deskripsi_tugas' => $this->input->post('deskripsi_tugas')
            ];
            $this->M_data->UpdateTugas($lampiran, $id);
            redirect('home/tugas');

        } else {
            $data = array('image_metadata' => $this->upload->data());
            $lampiran =[
                'judul_tugas' => $this->input->post('judul_tugas'),
                'deskripsi_tugas' => $this->input->post('deskripsi_tugas')
            ];
            $this->M_data->UpdateTugas($lampiran, $id);
            redirect('home/tugas'); 
        }
    }
    public function hasil_tugas($username)
    {
        
    }
}
