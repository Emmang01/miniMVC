<?php
	class Fromdb extends Controller{
		
		public function index(){
			$data = $this->model('Valuedb')->getFromdb();
			$this->view('fromdb/index',$data);
			
		}
		
		public function addData(){
			$this->view('fromdb/addData',NULL);
		}
		
		public function executeAddData(){
			if($this->model('ModeladdData')->addtodb($_POST) > 0){
				header("Location:fromdb/index");
				exit;
			}
		}
		
	}
?>