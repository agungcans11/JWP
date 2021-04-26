<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	 public function __construct()
	{
	parent::__construct();
	$this->load->library('upload');
	if ($this->session->userdata('status') != TRUE) {
            redirect('auth/index');
        }
	}

	public function index()
	{
		$this->load->view('layouts/admin_header');
		$this->load->view('admin/index');
		$this->load->view('layouts/admin_footer');
	}

	////////////////////////////////PEMAIN////////////////////////////////////////////
	public function pemain_read()
	{
		$data['pemain'] = $this->db->query("SELECT * FROM tb_pemain")->result_array();
		$this->load->view('layouts/admin_header');
		$this->load->view('admin/pemain/read', $data);
		$this->load->view('layouts/admin_footer');
	}

	public function pemain_add()
	{
		$this->form_validation->set_rules('nama', 'nama', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/pemain/add');
			$this->load->view('layouts/admin_footer');
		}
		else
		{
			$nama = $this->input->post('nama');
			$panggilan = $this->input->post('panggilan');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
			$ssb = $this->input->post('ssb');
			$nama_ayah = $this->input->post('nama_ayah');
			$nama_ibu = $this->input->post('nama_ibu');
			$administrasi_pemain = $this->input->post('administrasi_pemain');
			$golongan_darah = $this->input->post('golongan_darah');
			$bb = $this->input->post('bb');
			$tb = $this->input->post('tb');
			$config['upload_path']          = './assets/foto/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['encrypt_name'] = TRUE;

			$this->upload->initialize($config);

			if(!empty($_FILES['foto']['name'])){

				if ($this->upload->do_upload('foto')){
					$gbr = $this->upload->data();

					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/foto/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '50%';
					$config['width']= 600;
					$config['height']= 400;
					$config['new_image']= './assets/foto/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					$gambar=$gbr['file_name'];
				}
		}

			
			
			$this->load->library('ciqrcode');
			$config['cacheable']    = true; //boolean, the default is true
			$config['cachedir']     = './assets/'; //string, the default is application/cache/
			$config['errorlog']     = './assets/'; //string, the default is application/logs/
			$config['imagedir']     = './assets/qr/'; //direktori penyimpanan qr code
			$config['quality']      = true; //boolean, the default is true
			$config['size']         = '1024'; //interger, the default is 1024
			$config['black']        = array(224,255,255); // array, default is array(255,255,255)
			$config['white']        = array(70,130,180); // array, default is array(0,0,0)
			$this->ciqrcode->initialize($config);

			 $image_name=$no_hp.'.png'; //buat name dari qr code sesuai dengan nim
	
			$params['data'] = $no_hp; //data yang akan di jadikan QR CODE
			$params['level'] = 'H'; //H=High
			$params['size'] = 10;
			$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
			$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE
	
			
			$data = [
				'nama' => $nama,
				'panggilan' => $panggilan,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'no_hp' => $no_hp,
				'alamat' => $alamat,
				'ssb' => $ssb,
				'nama_ayah' => $nama_ayah,
				'nama_ibu' => $nama_ibu,
				'administrasi_pemain' => $administrasi_pemain,
				'golongan_darah' => $golongan_darah,
				'bb' => $bb,
				'tb' => $tb,
				'foto' => $gambar,
				'qr_code' => $image_name
			];

			$this->db->insert('tb_pemain', $data);
			$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan!');
			redirect('admin/pemain_read');
		}
	}

	public function pemain_edit($id){

		$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['pemain'] = $this->db->query("SELECT * FROM tb_pemain WHERE id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/pemain/edit', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{
			$nama = $this->input->post('nama');
			$panggilan = $this->input->post('panggilan');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$tempat_lahir = $this->input->post('tempat_lahir');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$no_hp = $this->input->post('no_hp');
			$alamat = $this->input->post('alamat');
			$ssb = $this->input->post('ssb');
			$nama_ayah = $this->input->post('nama_ayah');
			$nama_ibu = $this->input->post('nama_ibu');
			$administrasi_pemain = $this->input->post('administrasi_pemain');
			$golongan_darah = $this->input->post('golongan_darah');
			$bb = $this->input->post('bb');
			$tb = $this->input->post('tb');
			$old_foto = $this->input->post('old_foto');

			$this->load->library('ciqrcode');
			$config['cacheable']    = true; //boolean, the default is true
			$config['cachedir']     = './assets/'; //string, the default is application/cache/
			$config['errorlog']     = './assets/'; //string, the default is application/logs/
			$config['imagedir']     = './assets/qr/'; //direktori penyimpanan qr code
			$config['quality']      = true; //boolean, the default is true
			$config['size']         = '1024'; //interger, the default is 1024
			$config['black']        = array(224,255,255); // array, default is array(255,255,255)
			$config['white']        = array(70,130,180); // array, default is array(0,0,0)
			$this->ciqrcode->initialize($config);

			 $image_name=$no_hp.'.png'; //buat name dari qr code sesuai dengan nim
	
			$params['data'] = $no_hp; //data yang akan di jadikan QR CODE
			$params['level'] = 'H'; //H=High
			$params['size'] = 10;
			$params['savename'] = FCPATH.$config['imagedir'].$image_name; //simpan image QR CODE ke folder assets/images/
			$this->ciqrcode->generate($params); // fungsi untuk generate QR CODE

			$config['upload_path']          = './assets/foto/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['encrypt_name'] = TRUE;
			$this->upload->initialize($config);
			
			if(!empty($_FILES['foto']['name'])){

				if ($this->upload->do_upload('foto')){
					$gbr = $this->upload->data();

					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/foto/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '50%';
					$config['width']= 600;
					$config['height']= 400;
					$config['new_image']= './assets/foto/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					$gambar=$gbr['file_name'];
					unlink(FCPATH . '/assets/foto/' . $old_foto);
				}
			} else{
				$gambar = $old_foto;
			}
			
			$data = array(
				'nama' => $nama,
				'panggilan' => $panggilan,
				'jenis_kelamin' => $jenis_kelamin,
				'tempat_lahir' => $tempat_lahir,
				'tanggal_lahir' => $tanggal_lahir,
				'no_hp' => $no_hp,
				'alamat' => $alamat,
				'ssb' => $ssb,
				'nama_ayah' => $nama_ayah,
				'nama_ibu' => $nama_ibu,
				'administrasi_pemain' => $administrasi_pemain,
				'golongan_darah' => $golongan_darah,
				'bb' => $bb,
				'tb' => $tb,
				'foto' => $gambar,
				'qr_code' => $image_name
			);

			$this->db->where('id', $id);
			$this->db->update('tb_pemain', $data);
			$this->session->set_flashdata('success', 'Data Berhasil Diedit!');
			redirect('admin/pemain_read');
		}
	}

	public function pemain_detail($id){
		$data['pemain'] = $this->db->query("SELECT * FROM tb_pemain WHERE id= $id")->row_array();
		$data['pendidikan'] = $this->db->query("SELECT * FROM tb_pendidikan WHERE pemain_id= $id")->result_array();
		$data['pendidikan_sepakbola'] = $this->db->query("SELECT * FROM tb_pendidikan_sepakbola WHERE pemain_id= $id")->result_array();
		$data['prestasi'] = $this->db->query("SELECT * FROM tb_prestasi WHERE pemain_id= $id")->result_array();
		$this->load->view('layouts/admin_header');
		$this->load->view('admin/pemain/detail', $data);
		$this->load->view('layouts/admin_footer');
	}
	
	public function pemain_delete($id){
		$foto = $this->db->query("SELECT * FROM tb_pemain")->row_array();
		unlink(FCPATH . '/assets/foto/' . $foto['foto']);
		$this->db->query("DELETE FROM tb_pemain WHERE id = $id");
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		redirect('admin/pemain_read');
	}

	////////////////////////////////PEMAIN////////////////////////////////////////////


	////////////////////////////////PENDIDIKAN FORMAL////////////////////////////////////////////

	public function pendidikan_add($id){
		
		$this->form_validation->set_rules('sd', 'sd', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['pemain'] = $this->db->query("SELECT * FROM tb_pemain WHERE id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/pemain/pendidikan/add', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{
			$pemain_id = $this->input->post('pemain_id');	
			$sd = $this->input->post('sd');	
			$smp = $this->input->post('smp');
			
			$data = [
				'sd' => $sd,
				'smp' => $smp,
				'pemain_id' => $pemain_id,
			];
			
			$this->db->insert('tb_pendidikan', $data);
			$this->session->set_flashdata('success', 'Riwayat Pendidikan Berhasil ditambahkan!');
			redirect('admin/pemain_detail/' .$id);

		}	
	}

	public function pendidikan_edit($id){
		$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['pendidikan'] = $this->db->query("SELECT * FROM tb_pendidikan WHERE id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/pemain/pendidikan/edit', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{
			$id = $this->input->post('id');	
			$sd = $this->input->post('sd');	
			$smp = $this->input->post('smp');
			$pemain_id = $this->input->post('pemain_id');
			
			$data = array(
				'sd' => $sd,
				'smp' => $smp,
				'pemain_id' => $pemain_id,
			);
			$this->db->where('id', $id);
			$this->db->update('tb_pendidikan', $data);
			$this->session->set_flashdata('success', 'Data Berhasil Diedit!');
			redirect('admin/pemain_detail/' .$pemain_id);
		}	
	}

	public function pendidikan_delete($id){
		$pemain = $this->db->query("SELECT * FROM tb_pendidikan WHERE id = $id")->row_array();
		$pemain_id = intval($pemain['pemain_id']);
		$this->db->query("DELETE FROM tb_pendidikan WHERE id = $id");
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		redirect('admin/pemain_detail/' .$pemain_id);
	}
	////////////////////////////////PENDIDIKAN FORMAL////////////////////////////////////////////


	////////////////////////////////PENDIDIKAN SEPAK BOLA////////////////////////////////////////////

	public function pendidikan_sepakbola_add($id){
		
		$this->form_validation->set_rules('ssb', 'ssb', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['pemain'] = $this->db->query("SELECT * FROM tb_pemain WHERE id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/pemain/pendidikan_sepakbola/add', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{
			$pemain_id = $this->input->post('pemain_id');	
			$ssb = $this->input->post('ssb');	
			$kabupaten = $this->input->post('kabupaten');
			$provinsi = $this->input->post('provinsi');
			$tahun = $this->input->post('tahun');
			$posisi = $this->input->post('posisi');
			
			$data = [
				'pemain_id' => $pemain_id,
				'ssb' => $ssb,
				'kabupaten' => $kabupaten,
				'provinsi' => $provinsi,
				'tahun' => $tahun,
				'posisi' => $posisi,
			];
			
			$this->db->insert('tb_pendidikan_sepakbola', $data);
			$this->session->set_flashdata('success', 'Riwayat Pendidikan Sepak Bola Berhasil ditambahkan!');
			redirect('admin/pemain_detail/' .$id);

		}	
	}

	public function pendidikan_sepakbola_edit($id){
		$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['pemain'] = $this->db->query("SELECT * FROM tb_pendidikan_sepakbola WHERE id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/pemain/pendidikan_sepakbola/edit', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{
			$pemain_id = $this->input->post('pemain_id');	
			$ssb = $this->input->post('ssb');	
			$kabupaten = $this->input->post('kabupaten');
			$provinsi = $this->input->post('provinsi');
			$tahun = $this->input->post('tahun');
			$posisi = $this->input->post('posisi');
			
			$data = [
				'pemain_id' => $pemain_id,
				'ssb' => $ssb,
				'kabupaten' => $kabupaten,
				'provinsi' => $provinsi,
				'tahun' => $tahun,
				'posisi' => $posisi,
			];
			
			$this->db->where('id', $id);
			$this->db->update('tb_pendidikan_sepakbola', $data);
			$this->session->set_flashdata('success', 'Data Berhasil Diedit!');
			redirect('admin/pemain_detail/' .$pemain_id);

		}	
	}

	public function pendidikan_sepakbola_delete($id){
		$pemain = $this->db->query("SELECT * FROM tb_pendidikan_sepakbola WHERE id = $id")->row_array();
		$pemain_id = intval($pemain['pemain_id']);
		$this->db->query("DELETE FROM tb_pendidikan_sepakbola WHERE id = $id");
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		redirect('admin/pemain_detail/' .$pemain_id);
	}

	////////////////////////////////PENDIDIKAN SEPAK BOLA////////////////////////////////////////////


	////////////////////////////////PRESTASI SEPAK BOLA////////////////////////////////////////////

	public function prestasi_sepakbola_add($id){
		
		$this->form_validation->set_rules('prestasi', 'prestasi', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['pemain'] = $this->db->query("SELECT * FROM tb_pemain WHERE id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/pemain/prestasi/add', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{
			$pemain_id = $this->input->post('pemain_id');	
			$ssb = $this->input->post('ssb');	
			$kompetisi = $this->input->post('kompetisi');
			$prestasi = $this->input->post('prestasi');
			$tahun = $this->input->post('tahun');
			$posisi = $this->input->post('posisi');
			
			$data = [
				'ssb' => $ssb,
				'kompetisi' => $kompetisi,
				'prestasi' => $prestasi,
				'tahun' => $tahun,
				'posisi' => $posisi,
				'pemain_id' => $pemain_id,
			];
			
			$this->db->insert('tb_prestasi', $data);
			$this->session->set_flashdata('success', 'Prestasi Sepak Bola Berhasil ditambahkan!');
			redirect('admin/pemain_detail/' .$id);

		}	
	}

	public function prestasi_sepakbola_edit($id){

		$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['pemain'] = $this->db->query("SELECT * FROM tb_prestasi WHERE id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/pemain/prestasi/edit', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{

			$id = $this->input->post('id');	
			$pemain_id = $this->input->post('pemain_id');	
			$ssb = $this->input->post('ssb');	
			$kompetisi = $this->input->post('kompetisi');
			$prestasi = $this->input->post('prestasi');
			$tahun = $this->input->post('tahun');
			$posisi = $this->input->post('posisi');
			
			$data = [
				'ssb' => $ssb,
				'kompetisi' => $kompetisi,
				'prestasi' => $prestasi,
				'tahun' => $tahun,
				'posisi' => $posisi,
				'pemain_id' => $pemain_id,
			];
			
			$this->db->where('id', $id);
			$this->db->update('tb_prestasi', $data);
			$this->session->set_flashdata('success', 'Data Berhasil Diedit!');
			redirect('admin/pemain_detail/' .$pemain_id);

		}
	}

	public function prestasi_sepakbola_delete($id){
		$pemain = $this->db->query("SELECT * FROM tb_prestasi WHERE id = $id")->row_array();
		$pemain_id = intval($pemain['pemain_id']);
		$this->db->query("DELETE FROM tb_prestasi WHERE id = $id");
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		redirect('admin/pemain_detail/' .$pemain_id);
	}
	////////////////////////////////PRESTASI SEPAK BOLA////////////////////////////////////////////
	
	
	////////////////////////////////formulir////////////////////////////////////////////
	public function formulir($id){
		$this->load->library('Fungsi');
		$data['pemain'] = $this->db->query("SELECT * FROM tb_pemain WHERE id= $id")->row_array();
		$data['pendidikan'] = $this->db->query("SELECT * FROM tb_pendidikan WHERE pemain_id= $id")->result_array();
		$data['pendidikan_sepakbola'] = $this->db->query("SELECT * FROM tb_pendidikan_sepakbola WHERE pemain_id= $id")->result_array();
		$data['prestasi'] = $this->db->query("SELECT * FROM tb_prestasi WHERE pemain_id= $id")->result_array();
		$html = $this->load->view('admin/pemain/formulir', $data, true);
		$this->fungsi->PdfGenerator($html, 'formulir-' . $id, 'A4', 'portrait');
	}
	////////////////////////////////formulir///////////////////////////////////////////////

	///////////////////////////////lokasi/////////////////////////////////////////////////
	public function lokasi_read(){
		$data['lokasi'] = $this->db->query("SELECT * FROM tb_lokasi")->result_array();
		$this->load->view('layouts/admin_header');
		$this->load->view('admin/lokasi/read', $data);
		$this->load->view('layouts/admin_footer');
	}
	public function lokasi_add(){

		$this->form_validation->set_rules('latitude', 'latitude', 'required');
		$this->form_validation->set_rules('longitude', 'longitude', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/lokasi/add');
			$this->load->view('layouts/admin_footer');
		}
		else
		{
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$latitude = $this->input->post('latitude');
				$longitude = $this->input->post('longitude');

				$data = [
					'nama' => $nama,
					'alamat' => $alamat,
					'latitude' => $latitude,
					'longitude' => $longitude
				];

				$this->db->insert('tb_lokasi', $data);
				$this->session->set_flashdata('success', 'Lokasi Berhasil ditambahkan!');
				redirect('admin/lokasi_read');

		}

	}

	public function lokasi_edit($id)
	{
		$this->form_validation->set_rules('id', 'id', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$data['lokasi'] = $this->db->query("SELECT * FROM tb_lokasi WHERE id= $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/lokasi/edit', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{
				$id = $this->input->post('id');
				$nama = $this->input->post('nama');
				$alamat = $this->input->post('alamat');
				$latitude = $this->input->post('latitude');
				$longitude = $this->input->post('longitude');

				$data = [
					'nama' => $nama,
					'alamat' => $alamat,
					'latitude' => $latitude,
					'longitude' => $longitude
				];


				$this->db->where('id', $id);
				$this->db->update('tb_lokasi', $data);				
				$this->session->set_flashdata('success', 'Lokasi Berhasil diubah!');
				redirect('admin/lokasi_read');
		}
	}

	public function lokasi_delete($id){
		if($id == 1){
			$this->session->set_flashdata('error', 'Lokasi Kantor Sekretariat Tidak boleh dihapus!');
			redirect('admin/lokasi_read');
		} else{
			$this->db->query("DELETE FROM tb_lokasi WHERE id = $id");
			$this->session->set_flashdata('success', 'Lokasi Berhasil dihapus!');
			redirect('admin/lokasi_read');
		}
	}
	///////////////////////////////lokasi/////////////////////////////////////////////////

	////////////////////////////////cetak kartu////////////////////////////////////////////
	public function kartu($id){
		$this->load->library('Fungsi');
		$data['pemain'] = $this->db->query("SELECT * FROM tb_pemain WHERE id = $id")->row_array();
		$html = $this->load->view('admin/pemain/kartu', $data, true);
		$this->fungsi->PdfGenerator($html, 'kartu-' . $id, 'A4', 'portrait');
	}
	
	////////////////////////////////cetak kartu////////////////////////////////////////////

	///////////////////////////////////Jadwal/////////////////////////////////////////////
	public function jadwal()
	{
		$data['jadwal'] = $this->db->query("SELECT a.id AS id_jadwal, a.home, a.away, a.mulai, b.id AS id_lokasi, a.tanggal, b.nama FROM tb_jadwal AS a JOIN tb_lokasi AS b on a.lokasi_id = b.id")->result_array();
		$this->load->view('layouts/admin_header');
		$this->load->view('admin/jadwal/read', $data);
		$this->load->view('layouts/admin_footer');
	}

	public function jadwal_add()
	{
		$this->form_validation->set_rules('home', 'home', 'required');
		$this->form_validation->set_rules('away', 'away', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['lokasi'] = $this->db->query("SELECT * FROM tb_lokasi WHERE id != 1")->result_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/jadwal/add', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{
				$home = $this->input->post('home');
				$away = $this->input->post('away');
				$mulai = $this->input->post('mulai');
				$tanggal = $this->input->post('tanggal');
				$lokasi = $this->input->post('lokasi');

				$data = [
					'home' => $home,
					'away' => $away,
					'mulai' => $mulai,
					'tanggal' => $tanggal,
					'lokasi_id' => $lokasi
				];

				$this->db->insert('tb_jadwal', $data);
				$this->session->set_flashdata('success', 'Jadwal Berhasil ditambahkan!');
				redirect('admin/jadwal');
		}
	}

	public function jadwal_edit($id){

		$this->form_validation->set_rules('id', 'id', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['lokasi'] = $this->db->query("SELECT * FROM tb_lokasi")->result_array();
			$data['jadwal'] = $this->db->query("SELECT * FROM tb_jadwal WHERE id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/jadwal/edit', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{
				$home = $this->input->post('home');
				$away = $this->input->post('away');
				$mulai = $this->input->post('mulai');
				$tanggal = $this->input->post('tanggal');
				$lokasi = $this->input->post('lokasi');

				$data = [
					'home' => $home,
					'away' => $away,
					'mulai' => $mulai,
					'tanggal' => $tanggal,
					'lokasi_id' => $lokasi
				];

				$this->db->where('id', $id);
				$this->db->update('tb_jadwal', $data);				
				$this->session->set_flashdata('success', 'Jadwal Berhasil diubah!');
				redirect('admin/jadwal');
		}
	}

	public function jadwal_delete($id){
		$this->db->query("DELETE FROM tb_jadwal WHERE id = $id");
		$this->session->set_flashdata('success', 'Jadwal Berhasil dihapus!');
		redirect('admin/jadwal');		
	}
	///////////////////////////////////Jadwal/////////////////////////////////////////////
	
	
	///////////////////////////////////Hasil/////////////////////////////////////////////
	
	public function hasil_read()
	{
		$data['hasil'] = $this->db->query("SELECT *, b.nama AS lokasi, a.id AS id_hasil FROM tb_hasil AS a JOIN tb_lokasi AS b ON a.lokasi_id = b.id")->result_array();
		$this->load->view('layouts/admin_header');
		$this->load->view('admin/hasil/read', $data);
		$this->load->view('layouts/admin_footer');
	}


	public function hasil_add($id){
		
		$this->form_validation->set_rules('skor_home', 'skor_home', 'required');
		$this->form_validation->set_rules('skor_away', 'skor_away', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['hasil'] = $this->db->query("SELECT * FROM tb_jadwal WHERE id = $id")->row_array();
			$data['lokasi'] = $this->db->query("SELECT * FROM tb_jadwal AS a JOIN tb_lokasi AS b ON a.lokasi_id = b.id WHERE a.id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/hasil/add', $data);
			$this->load->view('layouts/admin_footer');		
		}else{
			$skor_home = $this->input->post('skor_home');
			$skor_away = $this->input->post('skor_away');
			$home = $this->input->post('home');
			$away = $this->input->post('away');
			$mulai = $this->input->post('mulai');
			$tanggal = $this->input->post('tanggal');
			$lokasi_id = $this->input->post('lokasi_id');

			$data = [
				'skor_home' => $skor_home,
				'skor_away' => $skor_away,
				'home' => $home,
				'away' => $away,
				'mulai' => $mulai,
				'tanggal' => $tanggal,
				'lokasi_id' => $lokasi_id,
			];

			$this->db->insert('tb_hasil', $data);
			$this->db->query("DELETE FROM tb_jadwal WHERE id = $id");
			$this->session->set_flashdata('success', 'Hasil Pertandingan Berhasil ditambahkan!');
			redirect('admin/jadwal');
		}
	}

	public function hasil_edit($id){
		
		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
			$data['hasil'] = $this->db->query("SELECT a.id AS id_hasil, a.tanggal, a.lokasi_id, a.home, a.away, a.skor_home, a.skor_away, a.mulai, b.nama AS lokasi FROM tb_hasil AS a JOIN tb_lokasi AS b ON a.lokasi_id = b.id WHERE a.id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/hasil/edit', $data);
			$this->load->view('layouts/admin_footer');		
		}else{
			$skor_home = $this->input->post('skor_home');
			$skor_away = $this->input->post('skor_away');

			$data = [
				'skor_home' => $skor_home,
				'skor_away' => $skor_away,
			];

				$this->db->where('id', $id);
				$this->db->update('tb_hasil', $data);				
				$this->session->set_flashdata('success', 'Hasil Berhasil diubah!');			
				redirect('admin/hasil_read');
		}
	}

	public function hasil_delete($id){
		$this->db->query("DELETE FROM tb_hasil WHERE id = $id");
		$this->session->set_flashdata('success', 'Hasil Berhasil dihapus!');
		redirect('admin/hasil_read');	
	}

	///////////////////////////////////Hasil/////////////////////////////////////////////



	///////////////////////////////////Berita/////////////////////////////////////////////
	
	public function berita_read(){
		$data['berita'] = $this->db->query("SELECT * FROM tb_berita")->result_array();
		$this->load->view('layouts/admin_header');
		$this->load->view('admin/berita/read', $data);
		$this->load->view('layouts/admin_footer');
	}

	public function berita_add(){

		$this->form_validation->set_rules('tanggal', 'tanggal', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/berita/add');
			$this->load->view('layouts/admin_footer');
		}
		else
		{
			$tanggal = $this->input->post('tanggal');
			$isi = $this->input->post('isi');
			$config['upload_path'] = './assets/berita/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
			$this->upload->initialize($config);

			if(!empty($_FILES['gambar']['name'])){
				if ($this->upload->do_upload('gambar')){
					$gbr = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/berita/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '50%';
					$config['width']= 600;
					$config['height']= 400;
					$config['new_image']= './assets/berita/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();	
					$gambar=$gbr['file_name'];
				}          
        	}

			$data = [
						'tanggal' => $tanggal,
						'gambar' => $gambar,
						'isi' => $isi,
					];   
					
			$this->db->insert('tb_berita', $data);
			$this->session->set_flashdata('success', 'Berita Berhasil ditambahkan!');
			redirect('admin/berita_read');
		}
	}

	public function berita_edit($id){

		$this->form_validation->set_rules('id', 'id', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$data['berita'] = $this->db->query("SELECT * FROM tb_berita WHERE id = $id")->row_array();
			$this->load->view('layouts/admin_header');
			$this->load->view('admin/berita/edit', $data);
			$this->load->view('layouts/admin_footer');
		}
		else
		{
			$tanggal = $this->input->post('tanggal');
			$isi = $this->input->post('isi');
			$old_gambar = $this->input->post('old_gambar');
			$config['upload_path'] = './assets/berita/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['encrypt_name'] = TRUE; //Enkripsi nama yang terupload
			$this->upload->initialize($config);

			if(!empty($_FILES['gambar']['name'])){

				if ($this->upload->do_upload('gambar')){
					$gbr = $this->upload->data();

					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/berita/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '50%';
					$config['width']= 600;
					$config['height']= 400;
					$config['new_image']= './assets/berita/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
					$gambar=$gbr['file_name'];
					unlink(FCPATH . '/assets/berita/' . $old_gambar);
				}
			} else{
				$gambar = $old_gambar;
			}

			$data = [
				'tanggal' => $tanggal,
				'gambar' => $gambar,
				'isi' => $isi,

			];
			$this->db->where('id', $id);
			$this->db->update('tb_berita', $data);
			$this->session->set_flashdata('success', 'Data Berhasil Diedit!');
			redirect('admin/berita_read');
		}
	}

	public function berita_delete($id){
		$berita = $this->db->query("SELECT * FROM tb_berita WHERE id = $id")->row_array();
		unlink(FCPATH . '/assets/berita/' . $berita['gambar']);
		$this->db->query("DELETE FROM tb_berita WHERE id = $id");
		$this->session->set_flashdata('success', 'Data Berhasil Dihapus!');
		redirect('admin/berita_read');

	}
	///////////////////////////////////Berita/////////////////////////////////////////////


}
