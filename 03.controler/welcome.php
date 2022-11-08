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






