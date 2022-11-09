<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class dbmaster extends CI_Model
{
    public function index()
    {
        echo "<h1>Hello I Am  DataBase Master</h1>";
    }
    public function insert_data($tname,$tdata)
	{
		return "hello insert query {$tname} {$tdata}";

	}
}


?>