<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('main_model');
    }
    
    public function index()
    {
        
    }

}

/* End of file Api.php */
