<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_data extends CI_Model
{
    public function Laporan_SuratMasuk()
    {
        return $this->db->get('surat_masuk')->result_array();
    }

    public function suratMasuk_id($id)
    {
        $this->db->where('no_urut', $id);
        $data =  $this->db->get('surat_masuk')->result_array();
        return $data;
    }
    public function suratKeluar_id($id)
    {

        $this->db->where('no_urut', $id);
        $data =  $this->db->get('surat_keluar')->result_array();
        return $data;
    }

    public function cariSm($query)
    {
        $this->db->like('perihal', $query);
        $this->db->or_like('dari', $query);
        $this->db->or_like('kepada', $query);
        $this->db->or_like('kota', $query);
        $this->db->or_like('no_surat', $query);
        $this->db->or_like('Guide', $query);
        $this->db->or_like('laci', $query);
        $this->db->or_like('Map', $query);
        $this->db->or_like('tersier', $query);
        return $this->db->get('surat_masuk');
    }
    public function cariSk($query)
    {
        $this->db->like('perihal', $query);
        $this->db->or_like('dari', $query);
        $this->db->or_like('kepada', $query);
        $this->db->or_like('kota', $query);
        $this->db->or_like('no_surat', $query);
        $this->db->or_like('Guide', $query);
        $this->db->or_like('laci', $query);
        $this->db->or_like('Map', $query);
        $this->db->or_like('tersier', $query);
        return $this->db->get('surat_keluar');
    }

    public function cariRet($query)
    {
        $this->db->or_like('surat', $query);
        $this->db->or_like('tanggal_mulai', $query);
        $this->db->or_like('tanggal_berakhir', $query);
        return $this->db->get('retensi');
    }

    public function cariPinjam($query)
    {
        $this->db->or_like('nip', $query);
        $this->db->or_like('nama_peminjam', $query);
        $this->db->or_like('unit_kerja', $query);
        $this->db->or_like('tanggal_pinjam', $query);
        $this->db->or_like('tanggal_kembali', $query);
        $this->db->or_like('nomor_peminjam ', $query);
        return $this->db->get('pinjam');
    }

    public function Laporan_SuratKeluar()
    {
        return $this->db->get('surat_keluar')->result_array();
    }

    public function Laporan_dataretensi()
    {
        $this->db->select('*');
        $this->db->from('retensi');
        $this->db->join('user', 'retensi.id_user = user.id');
        return $this->db->get()->result_array();
    }

    public function Laporan_penyusutan()
    {
        $this->db->select('*');
        $this->db->from('penyusutan');
        $this->db->join('user', 'penyusutan.id_user = user.id');
        return $this->db->get()->result_array();
    }

    public function proses_tambahpenyusutan()
    {
        $data = [
            "surat" => $this->input->post('surat'),
            "id_user" => 0,
        ];

        $this->db->insert('penyusutan', $data);
    }

    public function proses_tambahdataretensi()
    {
        $data = [
            "surat" => $this->input->post('surat'),
            "tanggal_mulai" => $this->input->post('tanggal_mulai'),
            "tanggal_berakhir" => $this->input->post('tanggal_berakhir'),
            'id_user' => '0'
        ];

        $this->db->insert('retensi', $data);
    }

    public function proses_tambahdatamasuk($foto)
    {
        $data = [
            "dari" => $this->input->post('dari'),
            "kepada" => "",
            "alamat" => $this->input->post('alamat'),
            "kota" => $this->input->post('kota'),
            "indeks" => $this->input->post('indeks'),
            "no_surat" => $this->input->post('no_surat'),
            "tanggal_surat" => $this->input->post('tanggal_surat'),
            "lampiran" => $this->input->post('lampiran'),
            "berkas" => $foto,
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
            'id_user' => '0'
        ];

        $this->db->insert('surat_masuk', $data);

        $id = $this->db->insert_id();
        return $id;
    }


    public function proses_tambahdatakeluar($foto)
    {
        $data = [
            "dari" => "",
            "kepada" => $this->input->post('kepada'),
            "alamat" => $this->input->post('alamat'),
            "kota" => $this->input->post('kota'),
            "indeks" => $this->input->post('indeks'),
            "no_surat" => $this->input->post('no_surat'),
            "tanggal_surat" => $this->input->post('tanggal_surat'),
            "lampiran" => $this->input->post('lampiran'),
            "berkas" => $foto,
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
            'id_user' => '0'

        ];

        $this->db->insert('surat_keluar', $data);

        $id = $this->db->insert_id();
        return $id;
    }

    public function temp_data($data)
    {
        $this->db->insert('surat_masuk', $data);
        $id = $this->db->insert_id();
        return $id;
    }

    public function upd_datamasuk($id, $data)
    {
        $this->db->where('no_urut', $id);
        $this->db->update('surat_masuk', $data);
    }

    public function upd_datakeluar($id, $data)
    {
        $this->db->where('no_urut', $id);
        $this->db->update('surat_keluar', $data);
    }

    public function proses_tambahpinjamdata()
    {
        $data = [
            "nomor_peminjam" => $this->input->post('nomor_peminjam'),
            "tanggal_pinjam" => $this->input->post('tanggal_pinjam'),
            "nip" => $this->input->post('nip'),
            "nama_peminjam" => $this->input->post('nama_peminjam'),
            "unit_kerja" => $this->input->post('unit_kerja'),
            "tanggal_kembali" => $this->input->post('tanggal_kembali'),
            "dokumen_dipinjam" => $this->input->post('id_kategori'),
            'id_user' => '0',
            'status' => 'Belum Dikembalikan'
        ];

        $this->db->insert('pinjam', $data);

        $data2 = [

            "tanggal_pinjam" => $this->input->post('tanggal_pinjam'),
            "nomor_peminjam" => $this->input->post('nomor_peminjam'),
            "nama_peminjam" => $this->input->post('nama_peminjam'),
            "unit_kerja" => $this->input->post('unit_kerja_2'),
            "tanggal_kembali" => $this->input->post('tanggal_kembali'),
            "dokumen_dipinjam" => $this->input->post('id_kategori'),
            "owner" => $this->input->post('owner'),
            "tanggal_awal" => $this->input->post('tanggal_awal'),
            "alamat" => $this->input->post('alamat'),

        ];
        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Bukti Peminjaman.pdf";
        //	$this->pdf->stream('laporan-data-siswa.pdf', array('Attachment' => 0));
        $this->pdf->load_view('home/export_pinjam', $data2);
    }

    public function getretensi()
    {
        $query = $this->db->query("SELECT * FROM surat_masuk ORDER BY perihal ASC");
        return $query->result();
    }

    public function getpenyusutan()
    {
        $query = $this->db->query("SELECT * FROM surat_masuk ORDER BY perihal ASC");
        return $query->result();
    }

    public function getpinjam()
    {
        $query = $this->db->query("SELECT * FROM surat_masuk ORDER BY perihal ASC");
        return $query->result();
    }

    public function getpinjam_k()
    {
        $query = $this->db->query("SELECT * FROM surat_keluar ORDER BY perihal ASC");
        return $query->result();
    }

    public function suratdipinjam()
    {
        return $this->db->get('pinjam')->result_array();
    }

    public function ambillogin($username, $password)
    {
        $this->db->where("username", $username);
        $this->db->where("password", $password);
        $query = $this->db->get('user');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rw) {
                if ($rw->level == 'admin') {
                    $sess = array(
                        'username' => $rw->username,
                        'password' => $rw->password,
                        'level' => $rw->level,
                        'id' => $rw->id
                    );
                    $this->session->set_userdata($sess);
                    redirect('home/index');
                } elseif ($rw->level == 'user') {
                    $sess = array(
                        'username' => $rw->username,
                        'password' => $rw->password,
                        'level' => $rw->level,
                        'id' => $rw->id
                    );
                    $this->session->set_userdata($sess);
                    redirect('user');
                }
            }
        } else {
            $this->session->set_flashdata('login-failed', 'Maaf username atau password anda salah');
            redirect('auth/login');
        }
    }

    public function proses_daftar()
    {
        $pass = md5($this->input->post('password'));
        $data = [
            "username" => $this->input->post('username'),
            "nama" => $this->input->post('nama'),
            "password" => $pass,
            "kelas" => $this->input->post('kelas'),
            "level" => 'user',
        ];

        $this->db->insert('user', $data);
    }

    public function hapus_penyusutan($no_urut)
    {
        $this->db->where('no_urut', $no_urut);
        $this->db->delete('penyusutan');
    }

    public function hapus_dataretensi($no_urut)
    {
        $this->db->where('no_urut', $no_urut);
        $this->db->delete('retensi');
    }

    public function hapus_datamasuk($no_urut)
    {
        $this->db->where('no_urut', $no_urut);
        $this->db->delete('surat_masuk');
    }

    public function hapus_datakeluar($no_urut)
    {
        $this->db->where('no_urut', $no_urut);
        $this->db->delete('surat_keluar');
    }

    public function update_penyusutan($no_urut)
    {
        return $this->db->get_where('penyusutan', ['no_urut' => $no_urut])->row_array();
    }

    public function proses_updatepenyusutan()
    {
        $data = [
            "surat" => $this->input->post('surat'),
        ];

        $this->db->where('no_urut', $this->input->post('no_urut'));
        $this->db->update('penyusutan', $data);
    }

    public function update_dataretensi($no_urut)
    {
        return $this->db->get_where('retensi', ['no_urut' => $no_urut])->row_array();
    }

    public function proses_updatedataretensi()
    {
        $data = [
            "surat" => $this->input->post('surat'),
            "tanggal_mulai" => $this->input->post('tanggal_mulai'),
            "tanggal_berakhir" => $this->input->post('tanggal_berakhir'),
        ];

        $this->db->where('no_urut', $this->input->post('no_urut'));
        $this->db->update('retensi', $data);
    }

    public function update_datamasuk($no_urut)
    {
        return $this->db->get_where('surat_masuk', ['no_urut' => $no_urut])->row_array();
    }

    public function proses_updatedatamasuk()
    {
        $data = [
            "dari" => $this->input->post('dari'),
            "alamat" => $this->input->post('alamat'),
            "no_surat" => $this->input->post('no_surat'),
            "lampiran" => $this->input->post('lampiran'),
            "tanggal_surat" => $this->input->post('tanggal_surat'),
            "perihal" => $this->input->post('perihal'),
            "tanggal_simpan" => $this->input->post('tanggal_simpan'),
            "kategori" => $this->input->post('kategori'),
            "surat_rapat" => $this->input->post('rapat'),
            "isi_ringkasan" => $this->input->post('isi_ringkasan'),
            'tgl_rapat' => $this->input->post('tgl_rapat'),
            'waktu_rapat' => $this->input->post('waktu_rapat'),
            'tempat_rapat' => $this->input->post('tempat_rapat'),
        ];

        $this->db->where('no_urut', $this->input->post('no_urut'));
        $this->db->update('surat_masuk', $data);
    }

    public function update_datakeluar($no_urut)
    {
        return $this->db->get_where('surat_keluar', ['no_urut' => $no_urut])->row_array();
    }

    public function proses_updatedatakeluar($no_urut)
    {
        $data = [
            "kepada" => $this->input->post('kepada'),
            "alamat" => $this->input->post('alamat'),
            "no_surat" => $this->input->post('no_surat'),
            "lampiran" => $this->input->post('lampiran'),
            "tanggal_surat" => $this->input->post('tanggal_surat'),
            "perihal" => $this->input->post('perihal'),
            "tanggal_simpan" => $this->input->post('tanggal_simpan'),
            "kategori" => $this->input->post('kategori'),
            "isi_ringkasan" => $this->input->post('isi_ringkasan'),
            'surat_rapat' => $this->input->post('surat_rapat'),
            'tgl_rapat' => $this->input->post('tgl_rapat'),
            'waktu_rapat' => $this->input->post('waktu_rapat'),
            'tempat_rapat' => $this->input->post('tempat_rapat'),
        ];

        $this->db->where('no_urut', $this->input->post('no_urut'));
        $this->db->update('surat_keluar', $data);
    }

    // Get Data Intansi
    public function get_instansi()
    {
        $result = $this->db->get('instansi')->row_array();
        return $result;
    }

    public function update_lokasi_sm($id)
    {
        $data = [
            "laci" => $this->input->post('h1'),
            "Map" => $this->input->post('h2'),
            "Guide" => $this->input->post('h3'),
            'tersier' => $this->input->post('h5'),
            "nomor_berkas" => $this->input->post('h4'),
        ];

        $this->db->where('no_urut', $id);
        $this->db->update('surat_masuk', $data);

        # code...
    }

    public function update_lokasi_sk($id)
    {
        $data = [
            "laci" => $this->input->post('h1'),
            "Map" => $this->input->post('h2'),
            "Guide" => $this->input->post('h3'),
            'tersier' => $this->input->post('h5'),
            "nomor_berkas" => $this->input->post('h4'),
        ];

        $this->db->where('no_urut', $id);
        $this->db->update('surat_keluar', $data);
        # code...
    }

    public function getSuratMasuk()
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        // $this->db->where('surat_rapat', 0);
        $this->db->join('user', 'surat_masuk.id_user = user.id');
        return $this->db->get()->result_array();
    }
    public function getRapat()
    {
        $query = $this->db->query("select * FROM surat_masuk as m JOIN user as u WHERE m.id_user=u.id AND m.surat_rapat=1 UNION SELECT * FROM surat_keluar as k JOIN user as u WHERE k.id_user=u.id AND k.surat_rapat=1 ORDER BY tgl_rapat DESC");
        return $query->result();
    }
    public function getRapatBy($time)
    {
        if ($time == "Harian") {
            $query = $this->db->query("select * FROM surat_masuk as m JOIN user as u WHERE m.id_user=u.id AND m.surat_rapat=1 AND m.tgl_rapat=CURRENT_DATE UNION SELECT * FROM surat_keluar as k JOIN user as u WHERE k.id_user=u.id AND k.surat_rapat=1 AND k.tgl_rapat=CURRENT_DATE ORDER BY waktu_rapat ASC");
        } elseif ($time == "Mingguan") {
            $query = $this->db->query("select * FROM surat_masuk as m JOIN user as u WHERE m.id_user=u.id AND m.surat_rapat=1 AND yearweek(m.tgl_rapat, 1)=yearweek(CURRENT_DATE(), 1) UNION SELECT * FROM surat_keluar as k JOIN user as u WHERE k.id_user=u.id AND k.surat_rapat=1 AND yearweek(k.tgl_rapat, 1)=yearweek(CURRENT_DATE(), 1) ORDER BY tgl_rapat ASC");
        } else {
            $query = $this->db->query("select * FROM surat_masuk as m JOIN user as u WHERE m.id_user=u.id AND m.surat_rapat=1 AND (m.tgl_rapat between  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) UNION SELECT * FROM surat_keluar as k JOIN user as u WHERE k.id_user=u.id AND k.surat_rapat=1 AND(k.tgl_rapat between  DATE_FORMAT(NOW() ,'%Y-%m-01') AND NOW() ) ORDER BY tgl_rapat ASC");
        }
        return $query->result();
    }

    public function getCustomRapat()
    {

        $date_a = $this->input->post('date_a');
        $date_1 = date('Y-m-d', strtotime($date_a));
        $date_b = $this->input->post('date_b');
        $date_2 = date('Y-m-d', strtotime($date_b));

        $query = $this->db->query("select * FROM surat_masuk as m JOIN user as u WHERE m.id_user=u.id AND m.surat_rapat=1 AND m.tgl_rapat BETWEEN '$date_1' AND '$date_2'  UNION SELECT * FROM surat_keluar as k JOIN user as u WHERE k.id_user=u.id AND k.surat_rapat=1 AND k.tgl_rapat BETWEEN '$date_1' AND '$date_2'");

        return $query->result();
    }

    public function getUnit()
    {
        $data  = $this->db->get('unit_kerja')->result_array();
        return $data;
        # code...
    }
    public function getMasalah()
    {
        $data  = $this->db->get('pokok_masalah')->result_array();
        return $data;
        # code...
    }

    public function addUnit($data)

    {
        $this->db->insert('unit_kerja', $data);
        return  $this->db->affected_rows();
        # code...
    }

    public function addMasalah($data)

    {
        $this->db->insert('pokok_masalah', $data);
        return  $this->db->affected_rows();
        # code...
    }

    public function editUnit($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('unit_kerja', $data);
        return  $this->db->affected_rows();
    }

    public function editMasalah($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->update('pokok_masalah', $data);
        return  $this->db->affected_rows();
    }


    public function deleteUnit($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('unit_kerja');
        return  $this->db->affected_rows();
    }

    public function deleteMasalah($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pokok_masalah');
        return  $this->db->affected_rows();
    }




    public function getSuratKeluar()
    {
        $where = "surat_rapat=0 OR surat_rapat= 'NULL'";
        $this->db->select('*');
        $this->db->from('surat_keluar');
        $this->db->where($where);
        // $this->db->where('surat_rapat',);
        $this->db->join('user', 'surat_keluar.id_user = user.id');
        return $this->db->get()->result_array();
    }
    public function isTugas() //cek sudah buat tugas atau belum
    {
        $this->db->select('count(*) as jml');
        $row = $this->db->get('tugas')->row();
        if ($row->jml > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function addTugas($data)
    {
        $this->db->insert('tugas', $data);
    }
    public function getTugas()
    {
        $this->db->select('*');
        $query = $this->db->get('tugas');
        return $query->result();
    }
    public function getTugasById($id)
    {
        $this->db->select('*');
        $this->db->where('id_tugas', $id);
        $query = $this->db->get('tugas');
        return $query->result();
    }
    public function UpdateTugas($data, $id)
    {
        $this->db->where('id_tugas', $id);
        $this->db->update('tugas', $data);
    }
    public function getMhs()
    {
        $query = $this->db->query("SELECT * FROM user as u LEFT OUTER JOIN nilai as n ON u.id=n.id_user WHERE u.level='user'");
        return $query->result();
    }
    public function getSuratMasukById($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('surat_masuk')->result();
    }
    public function getSuratKeluarById($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('surat_keluar')->result();
    }
    public function getSuratPinjamById($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('pinjam')->result();
    }
    public function getAgendaById($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('pinjam')->result();
    }
    public function getRapatById($id)
    {
        $query = $this->db->query("select * FROM surat_masuk as m JOIN user as u WHERE m.id_user=u.id AND m.surat_rapat=1 AND m.id_user=" . $id . " UNION SELECT * FROM surat_keluar as k JOIN user as u WHERE k.id_user=u.id AND k.surat_rapat=1 AND  k.id_user=" . $id . "  ORDER BY tgl_rapat DESC");
        return $query->result();
    }
    public function getMhsById($id)
    {
        $query = $this->db->query("SELECT * FROM user as u LEFT OUTER JOIN nilai as n ON u.id=n.id_user WHERE u.id=" . $id);
        return $query->result();
    }
    public function updateNilai($data, $id)
    {
        $this->db->where('id_user', $id);
        $this->db->update('nilai', $data);
    }
    public function addNilai($data)
    {
        $this->db->insert('nilai', $data);
    }
    public function file_tugas()
    {
        $this->db->select('*');
        $query = $this->db->get('tugas');
        $row = $query->row();
        return $row->lampiran;
    }
    public function getRetensiById($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('retensi')->result();
    }
    public function getPenyusutanById($id)
    {
        $this->db->where('id_user', $id);

        return $this->db->get('penyusutan')->result();
    }
}
