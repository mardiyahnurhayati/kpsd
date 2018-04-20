<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
       
    }
    function index()
    {
    	$this->load->view('Guru/header_guru');
    	$this->load->view('Guru/dashboard_guru');
    	$this->load->view('Guru/footer_guru');
    }
}