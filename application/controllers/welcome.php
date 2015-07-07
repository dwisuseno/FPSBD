<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
     parent::__construct();
     //$this->load->model('data_tiket');
     $this->load->model('pesan_tiket');
     $this->load->model('booking');
     $this->load->model('movie_mingguini');
  	 $this->load->model('movie_minggudepan');
  	 $this->load->model('movie_segera');
  	 $this->load->model('jadwal_mingguini');
  	 $this->load->model('jadwal_minggudepan');
  	 $this->load->model('jadwal_teater_a');
	 $this->load->model('jadwal_teater_b');
  }

  	function booking()
	{
		$data['title'] = 'SIBIO | Booking';
		$ktp = $this->input->post('ktp');
		$apa = $this->input->post('film');
		$petugas = 'P0001';
		//$this->load->library('Pdf');// set default header data
		//$this->pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, 'Header', "Header Detail");// set header and footer fonts
		//$this->pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
		//$this->pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));// set default monospaced font
		//$this->pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);//set margins
		//$this->pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
		//$this->pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
		//$this->pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
		//set image scale factor
		//$this->pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
		// ———————————————————
		// set font
		//$this->pdf->SetFont('dejavusans', '', 10);
		// add a page
		//$this->pdf->AddPage('L','A4',false,false);
		//$html = 'Hello World';
		//$this->pdf->writeHTML($html, true, false, true, false, '');
		//$this->pdf->Output('examples.pdf', 'I');
		$data['booking'] = $this->booking->pesanTiket($petugas,$ktp,$apa);
		$this->load->view('tiket',$data);
	}

	public function index()
	{
		$data['title'] = 'FPSBD A20';
		//$data['data_tiket'] = $this->data_tiket->selectAll();
		$this->load->view('welcome',$data);
	}

	public function home()
	{
		$data['title'] = 'FPSBD A20 | Home';
		//$data['data_film'] = $this->data_film->selectAll();
		$this->load->view('home',$data);
	}
	
	public function movie()
	{
		$data['title'] = 'FPSBD A20 | Movie';
		
		$this->load->view('movie',$data);
	}

	public function pesan_tiket()
	{
		$data['title'] = 'FPSBD A20 | Pesan Tiket';
		$data['pesan_tiket'] = $this->pesan_tiket->selectJudul();
 		$this->load->view('pesan_tiket',$data);
	}

	public function insert()
	{
		$data['pesan_tiket'] = $this->pesan_tiket->insertData();
		$this->load->view('pesan_tiket',$data);
	}

	function baca()
	{
		$q = "select nama, email from customer";
		$hasil = $this->db->query($q);
		print_r($hasil);
		var_dump($hasil);
	}

	function libtabel()
	{
		$this->load->library("table");
		$q = "select nama, email from customer";
		$hasil = $this->db->query($q);
		$datatabel=$this->table->generate($hasil);
		echo $datatabel;
	}

	public function movie_mingguini()
	{
		$data['title'] = 'SIBIO | Movie Minggu Ini';
		$data['movie_mingguini'] = $this->movie_mingguini->selectAll();
		$this->load->view('movie_mingguini',$data);
	}


	public function movie_minggudepan()
	{
		$data['title'] = 'SIBIO | Movie Minggu Depan';
		$data['movie_minggudepan'] = $this->movie_minggudepan->selectAll();
		$this->load->view('movie_minggudepan',$data);
	}


	public function movie_segera()
	{
		$data['title'] = 'SIBIO | Movie Segera Tayang';
		$data['movie_segera'] = $this->movie_segera->selectAll();
		$this->load->view('movie_segera',$data);
	}

	public function jadwal_mingguini()
	{
		$data['title'] = 'SIBIO | Jadwal Minggu Ini';
		$data['jadwal_mingguini'] = $this->jadwal_mingguini->selectAll();
		$this->load->view('jadwal_mingguini',$data);
	}

	public function jadwal_minggudepan()
	{
		$data['title'] = 'SIBIO | Jadwal Minggu Depan';
		$data['jadwal_minggudepan'] = $this->jadwal_minggudepan->selectAll();
		$this->load->view('jadwal_minggudepan',$data);
	}

	public function jadwal_teater_a()
	{
		$data['title'] = 'SIBIO | Jadwal Teater A';
		$data['jadwal_teater_a'] = $this->jadwal_teater_a->selectAll();
		$this->load->view('jadwal_teater_a',$data);
	}

	public function jadwal_teater_b()
	{
		$data['title'] = 'SIBIO | Jadwal Teater B';
		$data['jadwal_teater_b'] = $this->jadwal_teater_b->selectAll();
		$this->load->view('jadwal_teater_b',$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */