<?php
	class Database{
		private $dbh;
		private $stmt;
		
		public function __construct(){
			$dsn = DB_DRIVER. ':host=' .DB_HOST. '; dbname=' .DB_NAME;
			$user = DB_USER;
			$pass = DB_PASS;
			$option = [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
			
			try{
				$this->dbh = new PDO($dsn, $user, $pass,$option);
			}
			catch(PDOException $e){
				print "Error = " .$e->getMessage(). "</br>";
				die;
			}
		}
		
		public function query($comm){
			$this->stmt = $this->dbh->prepare($comm);
		}
		
		public function bind($param, $value, $type = NULL){
			if($type == NULL){
				switch (TRUE){
					case is_int($value):
						$type = PDO::PARAM_INT;
						break;
					case is_bool($value):
						$type = PDO::PARAM_BOOL;
						break;
					case is_float($value):
						$type = PDO::PARAM_FLOAT;
						break;
					case is_null($value):
						$type = PDO::PARAM_NULL;
						break;
					default:
						$type = PDO::PARAM_STR;
				}
				
				if( $type == PDO::PARAM_STR ){
					$value = htmlspecialchars($value);
				}
			}
			
			$this->stmt->bindParam($param, $value, $type);
		}
		
		public function execute(){
			$this->stmt->execute();
		}
		
		public function resultAll(){
			$this->stmt->execute();
			return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function resultOne(){
			$this->stmt->execute();
			return $this->stmt->fetch(PDO::FETCH_ASSOC);
		}
		
	}
?>