<?php
	class Valuedb{
		private $dbh;
		
		public function __construct(){
			$this->dbh = new Database;
		}
		
		public function getFromdb(){
			$this->dbh->query("SELECT * FROM data1");
			return $this->dbh->resultAll();
		}
	}
?>