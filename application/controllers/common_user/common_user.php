<?php

if(!defined('BASEPATH')) exit('NO DIRECT ACCESS');

class Common_user extends CI_Controller
{
    public function  __construct() {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
       
    }
    public function index()
    {
       $this->load->view('template/header');
       $this->load->view('template/slider');
       $this->load->view('template/home');
       $this->load->view('template/header_end');
       $this->load->view('template/footer');
    }

    public function registration()
    {
        
        $this->load->model('common_user_model');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('template/slider');
            $this->load->view('common_user/common_user_registration');
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
            
        }
       else
        {
           
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $name = $this->input->post('name');
            $address = $this->input->post('address');
            $email = $this->input->post('email');


            $source = $_FILES["photo"]["tmp_name"];
            $dest = './uploads/'.$_FILES["photo"]["name"];
            if(!copy($source,$dest))
            {
                echo "Please check whether the photo size exceed the maximum of 100kbs or max height and weidth of<br/>sequentially 768px and 1024 px";
            }

            $photo=base_url().'/uploads/'.$_FILES["photo"]["name"];
            
            //test                
            if(!$this->common_user_model->insert($username,$password,$name,$address,$email,$photo))
            {
               
                    $this->load->view('template/header');
                    $this->load->view('template/slider');
                    $this->load->view('common_user/common_user_registration');
                    $this->load->view('template/header_end');
                    $this->load->view('template/footer');
            }
            else
            {
                    $this->load->view('template/header');
                    //$this->load->view('template/slider');

                    $data = array('message'=>'Registration Completed Successsfully . Now Please Log In');
                    $this->load->view('common_user/common_user_sign_in_view',$data);
                    $this->load->view('template/header_end');
                    $this->load->view('template/footer');
            }
              
                

            
        }
       
        
    }

    public function sign_in()
    {
        $this->load->model('common_user_model');
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()==FALSE)
        {
             $this->load->view('template/header');
             $this->load->view('template/slider');
             $data = array('message'=>'');
             $this->load->view('common_user/common_user_sign_in_view',$data);
             $this->load->view('template/header_end');
             $this->load->view('template/footer');
        }
        else
        {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            if(!$this->common_user_model->login($username,$password))
            {
                $data = array('message'=>'Invalid Log In Credintials');
                $this->load->view('template/header');
                $this->load->view('template/slider');
                $this->load->view('common_user/common_user_sign_in_view',$data);
                $this->load->view('template/header_end');
                $this->load->view('template/footer');
            }
            else
            {
                redirect('common_user/common_user/profile');
            }
        }       
    }
    public function log_out()
    {
        if(!$this->session->userdata('userid')){}
        else
        {
            $this->session->unset_userdata('userid');
        }
        redirect('common_user/common_user/sign_in');
    }


    public function update()
    {
      
        $this->load->model('common_user_model');
        $this->load->helper('file');
        if(!$userid = $this->session->userdata('userid'))
        {
            //must load the unauthorized permission error page
        }
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('template/slider');
            $this->load->view('common_user/common_user_update');
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
        }
        else
        {
            $userid   = $this->session->userdata('userid');
            $username = $this->input->post('username',TRUE);
            $password = $this->input->post('password',TRUE);
            $name     = $this->input->post('name',TRUE);
            $address  = $this->input->post('address',TRUE);
            $email    = $this->input->post('email',TRUE);

            /***Here 1. The mew photo file_name has been  uploaded.2. The current file_path is retrieved for olater use 3.The information (file_pathe is updated in database ) 3. The old file is removed  ****/

            $source = $_FILES["photo"]["tmp_name"];
            $destination = './uploads/'.$_FILES["photo"]["name"];
            if(!copy($source, $destination))
            {
                $this->load->view('template/header');
                $this->load->view('template/slider');
                $this->load->view('common_user/common_user_update',array('message'=>'File Size Exceeds The maximum allowed Size.'));
                $this->load->view('template/header_end');
                $this->load->view('template/footer');
            }

            $old_photo = $this->common_user_model->get_photo();
            $old_photo = explode('/',$old_photo);
            $old_photo = $old_photo[count($old_photo)-1];
            $old_photo = 'uploads/'.$old_photo;
            $new_photo = base_url().'/uploads/'.$_FILES["photo"]["name"];

            if(!$this->common_user_model->update($username,$password,$name,$address,$email,$new_photo))
            {
                $this->load->view('template/header');
                $this->load->view('template/slider');
                $this->load->view('common_user/common_user_update',array('message'=>'File Update Operation Failed.Please Try again Later'));
                $this->load->view('template/header_end');
                $this->load->view('template/footer');
            }
            
            unlink($old_photo);
            
            $data = array('message'=>'Account Info Successfully Updated');
            redirect('common_user/common_user/profile/'.$data['message']);
           
        }

        

        

        
    }

    public function profile($message='')
    {
        $this->load->model('common_user_model');
        
        if(!$result = $this->common_user_model->get_user_info())
        {
            echo "NOT FOUND";
        }
        else
         {
                $result['message']=$message; //  Message confirming the update of information in update method.After redirecting to profile page
                
                $this->load->view('template/header');
                $this->load->view('common_user/common_user_profile',$result);
                $this->load->view('template/header_end');
                $this->load->view('template/footer');
         }
    }

    public function about_us()
    {
        $this->load->view('template/header');
        $this->load->view('template/slider');
        $this->load->view('template/about_us');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function contact_us()
    {
        $this->load->view('template/header');
        $this->load->view('template/slider');
        $this->load->view('template/contact_us');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    
}