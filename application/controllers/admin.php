<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct(){
     parent::__construct();
     //$this->load->library();
     $this->load->model('data_customer');
     $this->load->model('data_tiket');
     $this->load->model('data_movie');
     $this->load->model('data_petugas');
     $this->load->model('data_teater');
     $this->load->model('data_jadwal');
     $this->load->model('tambah_movie');
     $this->load->model('delete_movie');
     $this->load->model('pilih');
     $this->load->model('tambah_customer');
     $this->load->library('session');
     $this->load->model('delete_cust');
     $this->load->model('pilih_customer');
     $this->load->model('masuk_petugas');
     $this->load->model('data_chart');
  	}

  	public function data_chart()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Data Chart';
//		$data['data_chart'] = $this->data_chart->selectAll();
		$data['data_chart_jan'] = $this->data_chart->selectMonth('01');		
		$data['data_chart_feb'] = $this->data_chart->selectMonth('02');		
		$data['data_chart_mar'] = $this->data_chart->selectMonth('03');		
		$data['data_chart_apr'] = $this->data_chart->selectMonth('04');		
		$data['data_chart_mei'] = $this->data_chart->selectMonth('05');
		$data['data_chart_jun'] = $this->data_chart->selectMonth('06');
		$data['data_chart_jul'] = $this->data_chart->selectMonth('07');
		$data['data_chart_agu'] = $this->data_chart->selectMonth('08');
		$data['data_chart_sep'] = $this->data_chart->selectMonth('09');
		$data['data_chart_okt'] = $this->data_chart->selectMonth('10');
		$data['data_chart_nop'] = $this->data_chart->selectMonth('11');
		$data['data_chart_des'] = $this->data_chart->selectMonth('12');
		$this->load->view('data_chart',$data);
		} else {
        redirect('login');
    	}
	}


  	function pilih_customer()
  	{
  		if ($this->session->userdata('logged_in')) {
        $data['title'] = 'FPSBD A20 | Pilih Customer';

		$data['pilih_customer'] = $this->pilih_customer->selectNama();
		$this->load->view('delete_cust',$data);
    	} else {
        redirect('login');
    	}
  	}

  	public function tambah_customer()
  	{
  		if ($this->session->userdata('logged_in')) {
        $data['title'] = 'FPSBD A20 | Tambah Customer';

		//$data['data_customer'] = $this->data_customer->selectAll();
		$this->load->view('tambah_customer',$data);
    	} else {
        redirect('login');
    	}
  		
  	}

  	public function tambah_petugas()
  	{
  		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Tambah Petugas';
		//$data['data_jadwal'] = $this->data_jadwal->selectAll();
		$this->load->view('tambah_petugas',$data);
		} else {
        redirect('login');
    	}
  	}

  	public function masuk_petugas()
  	{
  		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Tambah Petugas';
		//$data['data_jadwal'] = $this->data_jadwal->selectAll();
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
		$data['masuk_petugas'] = $this->masuk_petugas->insertAll($id,$nama,$telepon,$email,$pass);
		$this->load->view('tambah_petugas',$data);
		} else {
        redirect('login');
    	}
  	}

  	function delete_petugas()
  	{
  		if ($this->session->userdata('logged_in')) {
        $data['title'] = 'FPSBD A20 | Delete Petugas';

		$data['data_petugas'] = $this->data_petugas->selectAll();
		$this->load->view('delete_petugas',$data);
    	} else {
        redirect('login');
    	}
  	}

  	function hapus()
  	{
  		if ($this->session->userdata('logged_in')) {
  		$data['title'] = 'FPSBD A20 | pilih';
  		$ktp = $this->input->post('customer');
  		$data['pilih_customer'] = $this->pilih_customer->hapusRow($ktp);
  		$this->load->view('delete_cust',$data);
  		} else {
        redirect('login');
    	}
  	}

  	function hapus_petugas()
  	{
  		if ($this->session->userdata('logged_in')) {
  		$data['title'] = 'FPSBD A20 | Hapus Petugas';
  		$petugas = $this->input->post('petugas');
  		$data['data_petugas'] = $this->data_petugas->hapusRow($petugas);
  		$this->load->view('delete_petugas',$data);
  		} else {
        redirect('login');
    	}
  	}

  	function pilih()
  	{
  		if ($this->session->userdata('logged_in')) {
  		$data['title'] = 'FPSBD A20 | pilih';
  		$data['pilih'] = $this->pilih->selectJudul();
  		$this->load->view('delete_form',$data);
  		} else {
        redirect('login');
    	}
  	}

  	public function penjualan_tiket()
  	{
  		if ($this->session->userdata('logged_in')) {
  		$data['title'] = 'FPSBD A20 | Laporan';
		//$data['data_customer'] = $this->data_customer->selectAll();
		$this->load->view('penjualan_tiket',$data);
		} else {
        redirect('login');
    	}
  	}

  	public function terlaris()
  	{
  		if ($this->session->userdata('logged_in')) {
  		$data['title'] = 'FPSBD A20 | Film Top';
		//$data['data_customer'] = $this->data_customer->selectAll();
		$this->load->view('terlaris',$data);
		} else {
        redirect('login');
    	}
  	}

	public function index()
	{
		if ($this->session->userdata('logged_in')) {
		//var_dump($this->session->all_userdata());
		$data['title'] = 'FPSBD A20';
		//$id = $this->input->post('id');
		$data['data_petugas'] = $this->data_petugas->selectAll();
		$this->load->view('admin',$data);
		} else {
        redirect('login');
    	}
	}

	public function data_tiket()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Data Tiket';
		$data['data_tiket'] = $this->data_tiket->selectAll();
		$this->load->view('data_tiket',$data);
		} else {
        redirect('login');
    	}
	}

	public function info()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Info';
		//$data['data_tiket'] = $this->data_tiket->selectAll();
		$this->load->view('info',$data);
		} else {
        redirect('login');
    	}
	}

	public function data_movie()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Data Movie';
		$data['data_movie'] = $this->data_movie->selectAll();
		$dat['delete_movie'] = $this->delete_movie->selectJudul();
		$this->load->view('data_movie',$data);
		$this->load->view('delete_form',$dat);
		//$this->load->view('form_insert');
		} else {
        redirect('login');
    	}
	}

	public function insert_movie()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Insert Movie';
		//$data['insert_movie'] = $this->insert_movie->selectAll();
		$this->load->view('form_insert',$data);
		} else {
        redirect('login');
    	}
	}

	public function update_t()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | id tiket';
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$tempatduduk = $this->input->post('tmduduk');
		$data['data_tiket'] = $this->data_tiket->pilihUpdate($status,$tempatduduk,$id);
		$this->load->view('update_tiket',$data);
		} else {
        redirect('login');
    	}
	}



	public function update_petugas()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Update Petugas';
		$id = $this->input->post('id');
		$data['data_petugas'] = $this->data_petugas->selectAll();
		$this->load->view('update_petugas',$data);
		} else {
        redirect('login');
    	}
	}

	public function update_p()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Update Petugas';
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$pass = $this->input->post('password');
		//$data['data_customer'] = $this->data_customer->selectAll();
		$data['data_petugas'] = $this->data_petugas->updatePet($id,$nama,$telepon,$email,$pass);
		$this->load->view('update_petugas',$data);
		} else {
        redirect('login');
    	}
	}

	public function update_film()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Update Movie';
		//$id = $this->input->post('id');
		$data['data_movie'] = $this->data_movie->selectAll();
		$this->load->view('update_film',$data);
		} else {
        redirect('login');
    	}
	}

	public function update_f()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Updated Movie';
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$sutradara = $this->input->post('sutradara');
		$durasi = $this->input->post('durasi');
		$status = $this->input->post('status');
		$deskripsi = $this->input->post('deskripsi');
		$data['data_movie'] = $this->data_movie->updateMovie($id,$sutradara,$judul,$durasi,$status,$deskripsi);
		$this->load->view('update_film',$data);
		} else {
        redirect('login');
    	}
	}

	public function delete_t()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Delete Tiket';
		$id = $this->input->post('id');
		$data['data_tiket'] = $this->data_tiket->deleteTiket($id);
		$this->load->view('delete_tiket',$data);
		} else {
        redirect('login');
    	}
	}

	public function delete_tiket()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Delete Tiket';
		
		$data['data_tiket'] = $this->data_tiket->selectAll();
		$this->load->view('delete_tiket',$data);
		} else {
        redirect('login');
    	}
	}

	public function id_tiket()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | id tiket';
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$tempatduduk = $this->input->post('tmduduk');
		$data['data_tiket'] = $this->data_tiket->selectAll();
		$this->load->view('update_tiket',$data);
		} else {
        redirect('login');
    	}
	}

	public function insert_tiket()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Create Tiket';
		$data['data_customer'] = $this->data_customer->selectAll();
		$data['data_tiket'] = $this->data_tiket->selectAll();
		$this->load->view('insert_tiket',$data);
		} else {
        redirect('login');
    	}
	}

	public function update_tiket()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Update Tiket';
		//$tempatduduk = $this->input->post('tempatduduk');
		//$status = $this->input->post('status');
		$data['data_tiket'] = $this->data_tiket->pilihTiket();
		$this->load->view('update_tiket',$data);
		} else {
        redirect('login');
    	}
	}

	function tambah_t()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Tambah Tiket';
		$pet = $this->input->post('petugas');
		$cust = $this->input->post('customer');
		$temp = $this->input->post('tempatduduk');
		$stat = $this->input->post('status');
		$jadwal = $this->input->post('jadwal');
		$data['data_tiket'] = $this->data_tiket->insertTiket($pet,$cust,$temp,$jadwal);
		$this->load->view('insert_tiket',$data);
		} else {
        redirect('login');
    	}
	}

	public function data_customer()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Data Customer';
		$data['data_customer'] = $this->data_customer->selectAll();
		$this->load->view('data_customer',$data);
		} else {
        redirect('login');
    	}
	}

	public function data_petugas()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Data Petugas';
		$data['data_petugas'] = $this->data_petugas->selectAll();
		$this->load->view('data_petugas',$data);
		} else {
        redirect('login');
    	}
	}

	public function data_teater()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Data Teathre';
		$data['data_teater'] = $this->data_teater->selectAll();
		$this->load->view('data_teater',$data);
		} else {
        redirect('login');
    	}
	}

	public function data_jadwal()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Data Schedule';
		$data['data_jadwal'] = $this->data_jadwal->selectAll();
		$this->load->view('data_jadwal',$data);
		} else {
        redirect('login');
    	}
	}

	

	function insert_customer()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Tambah Customer';
		//$data['data_jadwal'] = $this->data_jadwal->selectAll();
		$ktp = $this->input->post('ktp');
		$nama = $this->input->post('nama');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$data['tambah_customer'] = $this->tambah_customer->insertA($ktp,$nama,$telepon,$email,$tgl_lahir);
		$this->load->view('tambah_customer',$data);
		} else {
        redirect('login');
    	}
	}

	function delete_customer()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Delete Customer';
		//$row = $this->input->post('ktp');
		$data['pilih_customer'] = $this->pilih_customer->selectNama();
		$this->load->view('delete_cust',$data);
		} else {
        redirect('login');
    	}
	}
	

	function tambah_teater()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Tambah Teater';
		//$data['data_jadwal'] = $this->data_jadwal->selectAll();
		$this->load->view('tambah_teater',$data);
		} else {
        redirect('login');
    	}
	}

	function tambah_tea()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Tambah Teater';
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$data['data_teater'] = $this->data_teater->tambahT($id,$nama);
		$this->load->view('tambah_teater',$data);
		} else {
        redirect('login');
    	}
	}

	function tambah_tiket()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Tambah Tiket';

		$data['data_tiket'] = $this->data_tiket->selectAll();
		$this->load->view('pesan_tiket',$data);
		} else {
        redirect('login');
    	}
	}

	function tambah_jadwal()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Tambah Jadwal';
		//$data['data_jadwal'] = $this->data_jadwal->selectAll();
		$data['data_movie'] = $this->data_movie->selectAll();
		$data['data_teater'] = $this->data_teater->selectAll();
		$data['data_jadwal'] = $this->data_jadwal->selectAll();
		$this->load->view('tambah_jadwal',$data);
		} else {
        redirect('login');
    	}
	}

	function tambah_j()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Tambah Jadwal';
		//$data['data_jadwal'] = $this->data_jadwal->selectAll();
		//$data['data_movie'] = $this->data_movie->selectAll();
		//$data['data_teater'] = $this->data_teater->selectAll();
		//$data['data_jadwal'] = $this->data_jadwal->selectAll();
		$id = $this->input->post('id');
		$movie = $this->input->post('movie');
		$teater = $this->input->post('teater');
		$hari = $this->input->post('hari');
		$hour = $this->input->post('hour');
		$menit = $this->input->post('menit');
		$detik = $this->input->post('detik');
		$harga = $this->input->post('harga');
		$data['data_jadwal'] = $this->data_jadwal->tambahJ($id,$movie,$teater,$hari,$hour,$menit,$detik,$harga);
		$this->load->view('tambah_jadwal',$data);
		} else {
        redirect('login');
    	}
	}

	function delete_j()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Delete Jadwal';
		$row = $this->input->post('jadwal');
		$data['data_jadwal'] = $this->data_jadwal->hapusJadwal($row);
		$this->load->view('delete_jadwal',$data);
		} else {
        redirect('login');
    	}
	}

	function insert()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Penambahan';
		$id = $this->input->post('id');
		$judul = $this->input->post('judul');
		$sutradara = $this->input->post('sutradara');
		$rilis = $this->input->post('rilis');
		$status = $this->input->post('status');
		$poster = $this->input->post('poster');
		$resensi = $this->input->post('deskripsi');
		$hour = $this->input->post('hour');
		$minutes = $this->input->post('minutes');
		$second = $this->input->post('second');
		$data['tambah_movie'] = $this->tambah_movie->insertAll($id,$judul,$sutradara,$hour,$minutes,$second,$rilis,$status,$poster,$resensi);
		$this->load->view('form_insert',$data);
		} else {
        redirect('login');
    	}
	}



	function delete()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Delete';
		$row = $this->input->post('movie');
		$data['pilih'] = $this->pilih->deleteRow($row);
		$this->load->view('delete_form',$data);
		} else {
        redirect('login');
    	}
	}

	function update_customer()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Update Customer';
		//$tempatduduk = $this->input->post('tempatduduk');
		//$status = $this->input->post('status');
		$data['data_customer'] = $this->data_customer->selectAll();
		$this->load->view('update_customer',$data);
		} else {
        redirect('login');
    	}
	}

	function update_c()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Update Customer';
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$telepon = $this->input->post('telepon');
		$email = $this->input->post('email');
		$tgl = $this->input->post('tgl_lahir');
		//$data['data_customer'] = $this->data_customer->selectAll();
		$data['data_customer'] = $this->data_customer->updateC($id,$nama,$telepon,$email,$tgl);
		//$data['data_customer'] = $this->data_customer->selectAll();
		$this->load->view('update_customer',$data);
		} else {
        redirect('login');
    	}
	}

	function update_teater()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Update Data Theatre';
		//$tempatduduk = $this->input->post('tempatduduk');
		//$status = $this->input->post('status');

		$data['data_teater'] = $this->data_teater->selectAll();
		$this->load->view('update_teater',$data);
		} else {
        redirect('login');
    	}
	}

	function update_tea()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Update Customer';
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		
		//$tgl = $this->input->post('tgl_lahir');
		//$data['data_customer'] = $this->data_customer->selectAll();
		$data['data_teater'] = $this->data_teater->updateTea($id,$nama);
		//$data['data_customer'] = $this->data_customer->selectAll();
		$this->load->view('update_teater',$data);
		} else {
        redirect('login');
    	}
	}

	function update_jadwal()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Update Data Jadwal';
		//$tempatduduk = $this->input->post('tempatduduk');
		//$status = $this->input->post('status');
		$data['data_teater'] = $this->data_teater->selectAll();
		$data['data_movie'] = $this->data_movie->selectAll();
		$data['data_jadwal'] = $this->data_jadwal->selectAll();
		$this->load->view('update_jadwal',$data);
		} else {
        redirect('login');
    	}
	}

	function update_j()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Update Data Jadwal';
		$id = $this->input->post('id');
		$movie = $this->input->post('movie');
		$teater = $this->input->post('teater');
		$hari = $this->input->post('hari');
		$hour = $this->input->post('hour');
		$menit = $this->input->post('menit');
		$detik = $this->input->post('detik');
		$harga = $this->input->post('harga');
		$data['data_jadwal'] = $this->data_jadwal->updateJ($id,$movie,$teater,$hari,$hour,$menit,$detik,$harga);
		$this->load->view('update_jadwal',$data);
		} else {
        redirect('login');
    	}
	}

	function delete_teater()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Delete Theatre';
		//$tempatduduk = $this->input->post('tempatduduk');
		//$status = $this->input->post('status');
		$data['data_teater'] = $this->data_teater->selectAll();
		$this->load->view('delete_teater',$data);
		} else {
        redirect('login');
    	}
	}

	function delete_te()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Delete Theatre';
		//$tempatduduk = $this->input->post('tempatduduk');
		$row = $this->input->post('teater');
		$data['data_teater'] = $this->data_teater->hapus($row);
		$this->load->view('delete_teater',$data);
		} else {
        redirect('login');
    	}
	}

	function delete_jadwal()
	{
		if ($this->session->userdata('logged_in')) {
		$data['title'] = 'SIBIO | Delete Jadwal';
		//$tempatduduk = $this->input->post('tempatduduk');
		//$status = $this->input->post('status');
		$data['data_jadwal'] = $this->data_jadwal->selectAll();
		$this->load->view('delete_jadwal',$data);
		} else {
        redirect('login');
    	}
	}


}

/* End of file admin.php */
/* Location: ./application/controllers/welcome.php */