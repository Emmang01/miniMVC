<?php

class Controller{
	protected function view($view,$data = NULL){
		 require '../app/views/' . $view. '.php';
	}
	
	protected function model($model){
		require '../app/models/' .$model. '.php';
		return new $model;
	}
}
?>