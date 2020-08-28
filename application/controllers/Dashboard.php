<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public function Sales (){
        $this->load->view('Pages/dashboardpages/Sales');
    }
    public function Stocks (){
        $this->load->view('Pages/dashboardpages/Stocks');
    }

    public function Orders (){
        $this->load->view('Pages/dashboardpages/Orders');
    }

    public function Accounts (){
        $this->load->view('Pages/dashboardpages/Accounts');
    }

    public function Returns (){
        $this->load->view('Pages/dashboardpages/Returns');
    }

    public function SuppliersInfo (){
        $this->load->view('Pages/dashboardpages/SuppliersInfo');
    }
	    
}
