<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kepsek extends CI_Controller {

	function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
       
    }
    function index()
    {
    	$this->load->view('Kepsek/header_kepsek');
    	$this->load->view('Kepsek/dashboard_kepsek');
    	$this->load->view('Kepsek/footer_kepsek');
    }
}