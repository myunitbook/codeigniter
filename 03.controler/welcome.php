<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function hello()
	{
		echo "<h1>Hello Developer</h1>";
		$this->load->model('dbmaster');
		// $this->load->model('Dunit');
		// $this->Dunit->index();
		$this->dbmaster->index();
	}
	########################################################################
	public function insert()
	{
		//$this->load->model('Dbmaster');
		//$data['arr']="hello";
		//$emp=$this->Dbmaster->insert_data();
		//print_r($_POST);
		//echo $_POST['emp_name'];
		//$data['name']="Inseret Page";
		print_r($_POST);
		echo $_POST['emp_name'];
		$this->load->view('master/head');
		$this->load->view('insert');
		$this->load->view('master/footer');
		
	}
	##########################################################################
	public function view()
	{
		$this->load->view('master/head');
		$this->load->view('view');
		$this->load->view('master/footer');
	}
	public function update()
	{
		$this->load->view('master/head');
		$this->load->view('update');
		$this->load->view('master/footer');
	}
	public function delete()
	{
		$this->load->view('master/head');
		$this->load->view('delete');
		$this->load->view('master/footer');
	}









	public function fun()
	{
		echo "<h2>This is Helper Module</h2>";

		$this->load->helper("test");
		test();
	}
	public function api()
	{
		echo "<h2>This is Lib Module</h2>";
		$this->load->library('unitbook');
		$this->unitbook->unit();
	}
}






