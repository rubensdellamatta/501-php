<?php 
include 'Model.php';
class Controller
{
	private $model;
	public function __construct(){
		$this->model = new Model();
	}
	public function run(){
		$string = $this->model->getString();
		include 'View.php';
	}
}