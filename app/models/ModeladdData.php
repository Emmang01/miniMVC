<?php
	class ModeladdData{
		private $dbh;
		
		public function __construct(){
			$this->dbh = new Database;
		}
		
		public function addtodb($data){
			$this->dbh->query("INSERT INTO data1 VALUES (NULL,:nama, :nis, :kelas, :tahun_masuk, 'notfound.png')");
			$this->dbh->bind('nama',$data ['nama']);
			$this->dbh->bind('nis',$data ['nis']);
			$this->dbh->bind('kelas',$data ['kelas']);
			$this->dbh->bind('tahun_masuk',$data ['tahun_masuk']);
			$this->dbh->execute();
			return 1;
		}
		
	}
?>