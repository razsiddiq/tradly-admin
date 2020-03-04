<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    protected $userSession = null;

	public function __construct()
    {
          parent::__construct();
          $this->data['breadcrumbs'] = 'Search';
          $this->data['js_file']    = 'search';
          $this->data['title'] = APPLICATION_NAME; 
		  $this->userSession = $this->session->userdata('username');	  
    }

    public function index()
	{
        $this->data['subview'] = $this->load->view('search', $this->data, TRUE);
        $this->load->view('layout', $this->data); //page load
    }

}