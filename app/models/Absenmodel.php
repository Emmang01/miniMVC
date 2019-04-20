<?php
class Absenmodel{
	private $dbh;
	
	public function __construct(){
		$this->dbh = new Database;
	}
	
	public function absen($_datas){
		foreach($_datas as $key => $value){
			$this->dbh->query("SELECT $value FROM absen WHERE id = $key");
			$inc = $this->dbh->resultOne();
			$this->dbh->query("UPDATE absen SET $value = $inc[$value]+1 WHERE id = $key");
			$this->dbh->execute();
			var_dump($inc);
			echo " <br /> ";
			//$this->dbh->query("UPDATE absen SET hadir=:hadir, sakit=:sakit, izin=:izin, alpa=:alpa WHERE id = $key ");
			//$this->dbh->execute();
		}
		return 1;
	}
	
}