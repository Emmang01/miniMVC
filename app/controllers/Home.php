<?php

class Home extends Controller{
	public function index(string $nama = "user" , $kelas =11){
		$data ["nama"] = $nama;
		$data["kelas"] = $kelas;
		$this->view('home/index',$data);
	}
	
	public function absen(){
		$judul = "Absen Siswa";
		$this->view('head',$judul);
		$data = $this->model('Valuedb')->getFromdb();
		$_SESSION ['banyakdata']= count($data);
		$this->view('home/absen', $data);
		$this->view('foot');
	}
	
	public function absenExecute(){
		if( count($_POST) < $_SESSION ['banyakdata'] ){
			$empty = $_SESSION ['banyakdata'] - count($_POST);
			$_SESSION['msg'] = $empty;
			header('Location: ../home/absen');
		}
		
		if($this->model('Absenmodel')->absen($_POST) > 0){
			echo "berhasil";
		}
		
		$this->develop($_POST);
			//var_dump($_SESSION ['banyakdata']);
	}
	
	
	//hanya untuk mode pengembangan
	public function develop($absen){
		$this->view('head','Cuma ngedevelop');
		$this->view('home/develop_absensi',$absen);
		$this->view('foot');
	}
}
?>