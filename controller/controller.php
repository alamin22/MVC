<?php
include "model/model.php";

class controller
{
	private $model;
	public function __construct()
	{
		$this->model=new model();
	}

	public function home(){
		$student=$this->model->std_info();
		include"view/view.php";
	}
}

?>