<?php


class Admin extends CI_Controller
{
    public function  __construct() {
        parent::__construct();
        //$this->output->enable_profiler(TRUE);
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('admin/sub_menu');
        $this->load->view('admin/Admin_home');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function manage_account()
    {
        $this->load->view('template/header');
        $this->load->view('admin/sub_menu');
        $this->load->view('admin/Admin_Manage_Account');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
        
    }
    public function log_in()
    {
        $this->load->view('template/header');
        $this->load->view('admin/Login');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function profile()
    {
        $this->load->view('template/header');
        $this->load->view('admin/sub_menu');
        $this->load->view('admin/Admin_me');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function search()
    {
        $this->load->view('template/header');
        $this->load->view('admin/sub_menu');
        $this->load->view('admin/Admin_Search');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function pending(){}
    public function permit(){}
    
    

    
}
?>
