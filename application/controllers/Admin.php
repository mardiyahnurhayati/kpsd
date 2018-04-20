<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
       
    }

	public function index()
	{
		$this->load->view('Admin/header_admin');
		$this->load->view('Admin/dashboard_admin');
		$this->load->view('Admin/footer_admin');
	}
}