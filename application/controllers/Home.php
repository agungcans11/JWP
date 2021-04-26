<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {


	 public function __construct()
	{
	parent::__construct();
	}
	
	public function index()
	{
		$data['hasil'] = $this->db->query("SELECT * FROM tb_hasil")->result_array();
		$data['berita'] = $this->db->query("SELECT * FROM tb_berita")->result_array();
		$this->load->view('layouts/header');
		$this->load->view('home/index', $data);
		$this->load->view('layouts/footer');
	}

	public function jadwal()
	{
		$data['jadwal'] = $this->db->query("SELECT * FROM tb_jadwal AS a JOIN tb_lokasi AS b ON a.lokasi_id = b.id")->result_array();
		$this->load->view('layouts/header');
		$this->load->view('home/jadwal', $data);
		$this->load->view('layouts/footer');
	}

	public function jadwal_map($id)
	{
		$data['map'] = $this->db->query("SELECT * FROM tb_lokasi WHERE id = $id")->row_array();
		$this->load->view('layouts/header');
		$this->load->view('home/jadwal_map', $data);
		$this->load->view('layouts/footer');
	}

	function cari_aksi()
	{
			$keyword = $this->input->post('keyword');
			$data['keyword'] = $keyword;
			$data['cek'] = $this->db->query("SELECT * FROM tb_pemain WHERE nama LIKE '%$keyword%'")->num_rows();
			$data['hasil'] = $this->db->query("SELECT * FROM tb_pemain WHERE nama LIKE '%$keyword%'")->result_array();
			$this->load->view('layouts/header');
			$this->load->view('home/hasil', $data);
			$this->load->view('layouts/footer');
	}

	public function gallery()
	{
		$this->load->view('layouts/header');
		$this->load->view('home/gallery');
		$this->load->view('layouts/footer');
	}

	public function contact(){
		$data['contact'] = $this->db->query("SELECT * FROM tb_lokasi WHERE id = 1")->row_array();
		$this->load->view('layouts/header');
		$this->load->view('home/contact', $data);
		$this->load->view('layouts/footer');
	}

	public function kartu($id){
		$this->load->library('Fungsi');
		$data['pemain'] = $this->db->query("SELECT * FROM tb_pemain WHERE id = $id")->row_array();
		$html = $this->load->view('admin/pemain/kartu', $data, true);
		$this->fungsi->PdfGenerator($html, 'kartu-' . $id, 'A4', 'portrait');
	}

		public function formulir($id){
		$this->load->library('Fungsi');
		$data['pemain'] = $this->db->query("SELECT * FROM tb_pemain WHERE id= $id")->row_array();
		$data['pendidikan'] = $this->db->query("SELECT * FROM tb_pendidikan WHERE pemain_id= $id")->result_array();
		$data['pendidikan_sepakbola'] = $this->db->query("SELECT * FROM tb_pendidikan_sepakbola WHERE pemain_id= $id")->result_array();
		$data['prestasi'] = $this->db->query("SELECT * FROM tb_prestasi WHERE pemain_id= $id")->result_array();
		$html = $this->load->view('admin/pemain/formulir', $data, true);
		$this->fungsi->PdfGenerator($html, 'formulir-' . $id, 'A4', 'portrait');
	}

	public function hasil_detail($id){
		$data['detail'] = $this->db->query("SELECT a.id AS id_hasil, a.skor_home, a.skor_away, a.home, a.away, a.tanggal, a.mulai, b.id AS id_lokasi, b.nama, b.alamat, b.latitude, b.longitude FROM tb_hasil AS a JOIN tb_lokasi AS b ON a.lokasi_id = b.id WHERE a.id = $id")->row_array();
		$this->load->view('layouts/header');
		$this->load->view('home/hasil_detail', $data);
		$this->load->view('layouts/footer');
	}
}
