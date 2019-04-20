<?php
	class About extends Controller{
		function index(){
			$data = $this->model('View_data')->getData();
			$this->view('about/index',$data);
		}
		
		public function tes(){
			$this->view('about/tes');
		}
	}
?>