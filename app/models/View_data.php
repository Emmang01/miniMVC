<?php
	class View_data{
		private $nama;
		private $kelas;
		private $nis;
		private $absen;
		
		public function __construct(){
			$this->nama = "Mohammad Firman Ramadhan";
			$this->kelas = "XI MIPA 3";
			$this->nis = 16792;
			$this->absen = 33;
		}
		
		public function getData(){
			$data = [$this->nama, $this->kelas, $this->nis, $this->absen];
			return $data;
		}
	}
?>