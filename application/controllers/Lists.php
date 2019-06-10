<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lists extends CI_Controller {
	public function index()
	{
		$this->load->model("main_model");  
        $data["fetch_data"] = $this->main_model->fetch_data();
		//$this->load->view('list');
		$this->load->view("list", $data);
	}
}
