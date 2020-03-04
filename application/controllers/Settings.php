<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {
    protected $userSession = null;

	public function __construct()
    {
          parent::__construct();
          $this->data['breadcrumbs'] = 'Settings';
          $this->data['js_file']    = 'settings';
          $this->data['title'] = APPLICATION_NAME; 
		  $this->userSession = $this->session->userdata('username');	  
    }

    public function index()
	{             
        $this->data['subview'] = $this->load->view('dashboard', $this->data, TRUE);
        $this->load->view('layout', $this->data); //page load
    }

    public function api()
	{            
        $this->data['breadcrumbs'] = 'Api'; 
        $this->data['subview'] = $this->load->view('Settings/api', $this->data, TRUE);
        $this->load->view('layout', $this->data); //page load
    }

    public function business_info()
	{            
        $this->data['breadcrumbs'] = 'Business Info'; 
        $this->data['subview'] = $this->load->view('Settings/business_info', $this->data, TRUE);
        $this->load->view('layout', $this->data); //page load
    }

    public function setup_guide()
	{            
        $this->data['breadcrumbs'] = 'Setup guide'; 
        $this->data['subview'] = $this->load->view('Settings/setup_guide', $this->data, TRUE);
        $this->load->view('layout', $this->data); //page load
    }

    public function extensions()
	{            
        $this->data['breadcrumbs'] = 'Extensions'; 
        $this->data['subview'] = $this->load->view('Settings/extensions', $this->data, TRUE);
        $this->load->view('layout', $this->data); //page load
    }

    public function commissions()
	{            
        $this->data['breadcrumbs'] = 'Commissions'; 
        $this->data['subview'] = $this->load->view('Settings/commissions', $this->data, TRUE);
        $this->load->view('layout', $this->data); //page load
    }
    

}