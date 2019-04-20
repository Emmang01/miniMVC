<?php

class App{
	
	protected $controller = "home";
	protected $method = "index";
	protected $parameter = [];
		
	public function __construct(){
		
		$url = $this->parseURL();
		
		//controller
		if(file_exists('../app/controllers/' . $url[0]. ".php")){
			$this->controller = $url [0];
			unset($url [0]);
		}
		
		require_once '../app/controllers/' . $this->controller. '.php';
		$this->controller = new $this->controller;
		
		//method
		if(isset($url [1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url [1];
				unset($url [1]);
			}
		}
		
		
		//parameter
		if(!empty($url )){
			$this->parameter = array_values($url);
		}
		
		//jalankan $controller, $method dan kirim parameter
		call_user_func_array(array($this->controller,$this->method),$this->parameter);
		
	}

	public function parseURL(){
		
		if(isset($_GET)){
			$url = $_GET["url"];
			$url = rtrim($url, '/');
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode('/',$url);
			return $url;
		}
	}
}
?>