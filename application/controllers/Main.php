<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	public function index()
	{
        //$this->load->view('main');
        $this->load->model("main_model");  
        $data["fetch_data"] = $this->main_model->fetch_data();
		//$this->load->view('list');
		$this->load->view("main", $data);
    }
    public function add()
	{
		$this->load->view('add');
    }
    public function form_val(){
        $this->load->library('form_validation');
        //contact man loca add name
        $this->form_validation->set_rules("name", "First Name", 'required|alpha');  
        $this->form_validation->set_rules("add", "Address", 'required|alpha_numeric_spaces');
        $this->form_validation->set_rules("loca", "Location", 'required|alpha');
        $this->form_validation->set_rules("man", "Manager Name", 'required|alpha');
        $this->form_validation->set_rules("contact", "Contact", 'required|numeric');
        if($this->form_validation->run())
        {
            $data=array(
                "id"   =>"",
                "name"     =>$this->input->post("name"),
                "add"     =>$this->input->post("add"),
                "location"     =>$this->input->post("loca"),
                "manager_nm"     =>$this->input->post("man"),
                "contact"     =>$this->input->post("contact"),
            );
            if($this->db->insert('rst', $data)){
                echo"<script>alert('Data Inserted');</script>";
                $this->load->view('main');  
            }
            else{
                echo"<script>alert('Data Not Inserted');</script>";
            }
        }
        else
        {
            $this->Add();
        }
    }

}
