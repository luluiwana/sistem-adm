<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{
    public function Laporan_SuratMasuk($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('surat_masuk')->result_array();
    }
    public function Laporan_SuratKeluar($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get('surat_keluar')->result_array();
    }

    public function cariSm($query, $id)
    {
        $this->db->select('*');
        $this->db->where('id_user', $id);
        $this->db->group_start();
        $this->db->like('perihal', $query);
        $this->db->or_like('dari', $query);
        $this->db->or_like('kepada', $query);
        $this->db->or_like('kota', $query);
        $this->db->or_like('no_surat', $query);
        $this->db->or_like('Guide', $query);
        $this->db->or_like('laci', $query);
        $this->db->or_like('Map', $query);
        $this->db->or_like('tersier', $query);
        $this->db->group_end();
        return $this->db->get('surat_masuk');
    }
    public function cariSk($query, $id)
    {
        $this->db->select('*');
        $this->db->where('id_user', $id);
        $this->db->group_start();
        $this->db->like('perihal', $query);
        $this->db->or_like('dari', $query);
        $this->db->or_like('kepada', $query);
        $this->db->or_like('kota', $query);
        $this->db->or_like('no_surat', $query);
        $this->db->or_like('Guide', $query);
        $this->db->or_like('laci', $query);
        $this->db->or_like('Map', $query);
        $this->db->or_like('tersier', $query);
        $this->db->group_end();
        return $this->db->get('surat_keluar');
    }

    public function cariRet($query)
    {
        $this->db->select('*');
        $this->db->where('id_user', $this->id);
        $this->db->group_start();
        $this->db->or_like('surat', $query);
        $this->db->or_like('tanggal_mulai', $query);
        $this->db->or_like('tanggal_berakhir', $query);
        $this->db->group_end();
        return $this->db->get('retensi');
    }

    public function cariPinjam($query)
    {
        $this->db->select('*');
        $this->db->where('id_user', $this->id);
        $this->db->group_start();
        $this->db->or_like('nip', $query);
        $this->db->or_like('nama_peminjam', $query);
        $this->db->or_like('unit_kerja', $query);
        $this->db->or_like('tanggal_pinjam', $query);
        $this->db->or_like('tanggal_kembali', $query);
        $this->db->or_like('nomor_peminjam ', $query);
        $this->db->group_end();
        return $this->db->get('pinjam');
    }

    public function proses_tambahdatamasuk($foto, $id_user)
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
            'id_user' => $id_user

        ];

        $this->db->insert('surat_masuk', $data);
        $id = $this->db->insert_id();
        return $id;
    }

    public function proses_tambahdatakeluar($foto, $id_user)
    {
        $data = [
            "kepada" => $this->input->post('kepada'),
            "dari" => "-",
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
            'id_user' => $id_user

        ];

        $this->db->insert('surat_keluar', $data);
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

    public function Laporan_dataretensi($id)
    {
        $this->db->select('*');
        $this->db->from('retensi');
        $this->db->join('user', 'retensi.id_user = user.id');
        $this->db->where('retensi.id_user', $id);
        return $this->db->get()->result_array();
    }

    public function Laporan_penyusutan($id)
    {
        $this->db->select('*');
        $this->db->from('penyusutan');
        $this->db->join('user', 'penyusutan.id_user = user.id');
        $this->db->where('penyusutan.id_user', $id);
        return $this->db->get()->result_array();
    }

    public function getpenyusutan()
    {
        $query = $this->db->query("SELECT * FROM surat_masuk where id_user = $this->id ORDER BY perihal ASC  ");
        return $query->result();
    }
    public function getpinjam($id)
    {
        $query = $this->db->query("SELECT * FROM surat_masuk where id_user = $id ORDER BY perihal ASC");
        return $query->result();
    }

    public function getpinjam_k($id)
    {
        $query = $this->db->query("SELECT * FROM surat_keluar where id_user = $id ORDER BY perihal ASC");
        return $query->result();
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
            'id_user' => $this->id,
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

    public function get_instansi()
    {
        $result = $this->db->get('instansi')->row_array();
        return $result;
    }

    public function suratdipinjam()
    {
        $this->db->select('*');
        $this->db->from('pinjam');
        $this->db->join('user', 'pinjam.id_user = user.id');
        $this->db->where('pinjam.id_user', $this->id);
        return $this->db->get()->result_array();
    }

    public function proses_tambahpenyusutan($id)
    {
        $data = [
            "surat" => $this->input->post('surat'),
            'id_user' => $id
        ];

        $this->db->insert('penyusutan', $data);
    }

    public function proses_tambahdataretensi($id)
    {
        $data = [
            "surat" => $this->input->post('surat'),
            "tanggal_mulai" => $this->input->post('tanggal_mulai'),
            "tanggal_berakhir" => $this->input->post('tanggal_berakhir'),
            'id_user' => $id
        ];

        $this->db->insert('retensi', $data);
    }

    public function update_lokasi_sm($id)
    {
        $data = [
            "laci" => $this->input->post('h1'),
            "Map" => $this->input->post('h2'),
            "Guide" => $this->input->post('h3'),
            "tersier" => $this->input->post('h5'),
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
            "tersier" => $this->input->post('h5'),
            "nomor_berkas" => $this->input->post('h4'),
        ];

        $this->db->where('no_urut', $id);
        $this->db->update('surat_keluar', $data);

        # code...
    }

    public function update_datamasuk($no_urut)
    {
        return $this->db->get_where('surat_masuk', ['no_urut' => $no_urut])->row_array();
    }

    public function update_datakeluar($no_urut)
    {
        return $this->db->get_where('surat_keluar', ['no_urut' => $no_urut])->row_array();
    }

    public function upd_datakeluar($id, $data)
    {
        $this->db->where('no_urut', $id);
        $this->db->update('surat_keluar', $data);
    }

    public function upd_datamasuk($id, $data)
    {
        $this->db->where('no_urut', $id);
        $this->db->update('surat_masuk', $data);
    }


    public function hapus_dataretensi($no_urut)
    {
        $this->db->where('no_urut', $no_urut);
        $this->db->delete('retensi');
    }

    public function hapus_penyusutan($no_urut)
    {
        $this->db->where('no_urut', $no_urut);
        $this->db->delete('penyusutan');
    }

    public function getSuratMasuk($id)
    {
        $this->db->select('*');
        $this->db->from('surat_masuk');
        $this->db->where('surat_rapat', 0);
        $this->db->where('id_user', $id);
        $this->db->join('user', 'surat_masuk.id_user = user.id ');
        return $this->db->get()->result_array();
    }
    public function getRapat()
    {
        $id = $this->session->userdata('id');
        $query = $this->db->query("select * FROM surat_masuk as m JOIN user as u WHERE m.id_user=u.id AND m.surat_rapat=1 AND m.id_user=$id  UNION SELECT * FROM surat_keluar as k JOIN user as u WHERE k.id_user=u.id AND k.surat_rapat=1 and k.id_user=$id ORDER BY tgl_rapat  DESC ");


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

    public function getSuratKeluar($id)
    {
        $this->db->select('*');
        $this->db->from('surat_keluar');
        $this->db->where('surat_rapat', 0);
        $this->db->where('id_user', $id);
        $this->db->join('user', 'surat_keluar.id_user = user.id ');
        return $this->db->get()->result_array();
    }
    public function getMhsById($id)
    {
        $query = $this->db->query("SELECT * FROM user as u LEFT OUTER JOIN nilai as n ON u.id=n.id_user WHERE u.id=" . $id);
        return $query->result();
    }
    public function getTugas()
    {   $id = $this->session->userdata('id');
        $query = $this->db->query("SELECT *, tugas.id_tugas as id_tgs FROM tugas INNER JOIN user ON tugas.id_kelas=user.kelas LEFT OUTER JOIN nilai ON nilai.id_tugas=tugas.id_tugas AND nilai.id_user=user.id WHERE user.id=$id order by tugas.id_tugas desc");
        return $query->result();
    }
    public function submit_tugas($data){
        $this->db->insert('nilai',$data);
    
    }
    public function file_tugas($id_tugas)
    {
        $this->db->where("id_tugas",$id_tugas);
        $row=$this->db->get("tugas")->row();
        return $row->lampiran;
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
}
