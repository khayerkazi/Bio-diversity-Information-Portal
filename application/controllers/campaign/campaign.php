<?php


/*
 * Assuming The campaign Service is only enabled for 
 */
class Campaign extends CI_Controller
{
    public function  __construct() {
        parent::__construct();
        $this->load->model('campaign_model');
        $this->output->enable_profiler(TRUE);
        
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('campaign/sub_menu');
        $this->load->view('campaign/index');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }
    
    public function  all_campaigns()
    {
        $data = null;
        //$this->load->model('campaign_model');
        if(!$result=$this->campaign_model->get_campaigns())
        {
            $message = 'No Campaign is currently running ';
        }
        else
        {
            $count = count($result);
            $message = " Total $count Projects are running.";
        }
        $index = 0;
        foreach($result as $row)
        {
            if(!$mates = $this->campaign_model->get_campaign_mates($row['CAMPAIGNID']))
            {
            }
            $data[$index] = array('CAMPAIGN'=>$row,'MATES'=>$mates);
            $index++;
        }

        $this->load->view('template/header');
        $this->load->view('campaign/sub_menu');
        $this->load->view('campaign/all_campaigns',array('data'=>$data,'message'=>$message));
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function my_campaigns()
    {
        /*
         * show a list of  the user's compaign
         * and associated members
         */
        //$this->load->model('campaign_model');
        if(!$this->session->flashdata('message'))
        {
            $message =  $this->session->flashdata('message');
        }
        else
        {
            $message = '';
        }
        $campaign = $this->campaign_model->get_my_campaigns();

        $index = 0;
       // $data = array('PROJECT'=>'','MATES'=>'');
        $data = null;

        foreach($campaign as $row)
        {

            $campaignid = $row['CAMPAIGNID'];
            //$compaign_col = array('TITLE'=>$row['TITLE'],'DESCRIPTION'=>$row['DESCRIPTION'],'CREATION_DATE'=>$row['CREATION_DATE'],'DURATION'=>$row['DURATION']);

            if(!$mates = $this->campaign_model->get_campaign_mates($campaignid))
            {

            }
            $data[$index] = array('CAMPAIGN'=>$row,'MATES'=>$mates);

            $index++;

        }

        $this->load->view('template/header');
        $this->load->view('campaign/sub_menu');
        $this->load->view('campaign/my_campaigns',array('data'=>$data,'message'=>$message));
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }
    
    public function view_campaign($campaignid)
    {
        //$this->load->model('campaign_model');

        $campaign = $this->campaign_model->get_selected_campaign($campaignid);
        $campaign['message'] = $this->session->flashdata('message');

        $this->load->view('template/header');
        $this->load->view('campaign/sub_menu');
        $this->load->view('campaign/single_campaign_view',$campaign);
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
           
    }
    public function manage_campaign($campaignid)
    {
        //$this->load->model('campaign_model');

        $campaign = $this->campaign_model->get_selected_campaign($campaignid);
        $campaign['message'] = $this->session->flashdata('message');

        $this->load->view('template/header');
        $this->load->view('campaign/sub_menu');
        $this->load->view('campaign/single_campaign',$campaign);
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function join_campaign($campaignid)
    {
        //$this->load->model('campaign_model');

        if(!$this->campaign_model->join_campaign($campaignid))
        {
            $this->session->set_flashdata('messsage','Either you are not logger in or the campaign might not exist');
            redirect('campaign/capaign/view_campaign/'.$campaignid);
        }
        else
        {
            $this->session->set_flashdata('message','you are Compadded to the Campaign');
            redirect('campaign/campaign/manage_campaign/'.$campaignid);
        }
    }

    public function delete_campaign($campaignid)
    {
        //$this->load->model('campaign_model');

        if(!$this->campaign_model->delete_campaign($campaignid))
        {
            $this->session->set_flashdata('message','Could Not Disconnet You from compaign right now.<br/> PLease try sometie later');

        }
        else
        {
            $this->session->set_flashdata('message','Disconnected you from compaign');
        }
        redirect('campaign/campaign/my_campaigns');
    }

    public function search_campaign()
    {
        if($this->session->flashdata('message')!='')
        {
            $message = $this->session->flashdata('message');
        }
        else
        {
            $message = '';
        }

        //$this->load->model('campaign_model');
        $this->form_validation->set_rules('campaignid','');
        
        if($this->form_validation->run()==FALSE)
        {
             $this->load->view('template/header');
             $this->load->view('campaign/sub_menu');
             $this->load->view('campaign/search_campaign');//
             $this->load->view('template/header_end');
             $this->load->view('template/footer');
        }
        else
        {

            $campaignid = $this->input->post('campaignid',TRUE);
            $title = $this->input->post('title',TRUE);
            $starttime = $this->input->post('starttime',TRUE);
            $finishtime = $this->input->post('finishtime',TRUE);

            $result=$this->campaign_model->get_searched_campaign($campaignid,$title,'',$starttime,$finishtime);
            $index=0;
            $data = null;
                foreach($result as $row)
                {

                    if(!$mates = $this->campaign_model->get_campaign_mates($row['CAMPAIGNID']))
                    {
                        //echo "Error while fetching associate compaignmates";

                    }
                    $data[$index] = array('CAMPAIGN'=>$row,'MATES'=>$mates);
                    $index++;
                }
                $count = count($data);
                if($count>=1)
                {
                    $message  = "$count Results found";
                }
                else
                {
                    $message = "No Result Found";
                }
                $this->load->view('template/header');
                $this->load->view('campaign/sub_menu');
                $this->load->view('campaign/search_campaign');//
                $this->load->view('campaign/search_result',array('data'=>$data,'message'=>$message));//
                $this->load->view('template/header_end');
                $this->load->view('template/footer');



        }
    }

    public function add_campaign()
    {
        //$this->load->model('campaign_model');

        $this->form_validation->set_rules('title','TITLE','required');
        $this->form_validation->set_rules('description','DESCRIPTION','required');
        $this->form_validation->set_rules('finishtime','Finishtime','required');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('campaign/sub_menu');
            $this->load->view('campaign/add_campaign');
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
        }
        else
        {
            $title = $this->input->post('title',TRUE);
            $description = $this->input->post('description',TRUE);
            $finishtime = $this->input->post('finishtime',TRUE);
            $creation_date = 'SYSDATE';

            if(!$this->campaign_model->add_campaign($title,$description,$creation_date,$finishtime))
            {
                //error message regarding failure of insertion  in compaign table
                echo "Internal Server Error.<br/> PLease try later";
            }

            redirect('campaigner/campaigner/my_campaigns');
        }
    }

    public function update_campaign($campaignid)
    {
        //$this->load->model('campaign_model');
        $this->form_validation->set_rules('title','TITLE','required');
        $this->form_validation->set_rules('description','DESCRIPTION','required');

        $data = $this->campaign_model->get_selected_campaign($campaignid);
        if($this->session->flashdata('message'))
        {
            $data['message']=$this->session->flashdata('message');
        }
        else
        {
           $data['message']='';
        }


        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('campaign/sub_menu');
            $this->load->view('campaign/update_campaign',$data);
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
        }

        else
        {
            /*
             * Document  Manipulation Facility has not been yet enabled.But folow the steps to start it.
             *
             * Load The file Helper class
             *
             * check if the file has been uploaded or not
             * if uploaded then
             * find './uploads' like path of the destination
             * find tmp path of the file
             * move the file to the destination
             *get the new path of the document of thye form basu_url
             *
             * get the older document path from database
             * parse it to find the older filename[last index of segmented array]
             * unlink it
             *
             * update the database with new path
             */

            $title = $this->input->post('title');
            $description = $this->input->post('description');
            $starttime = $this->input->post('starttime');//similar to starttime
            $finishtime = $this->input->post('finishtime');// similar to finishtime

            if(!$this->campaign_model->update_campaign($campaignid,$title,$description,$finishtime))
            {
                $this->session->set_flashdata('message','Project Could not be  Updated Now ,please try later');
                redirect("campaign/campaign/update_campaign/$campaignid");
            }
            else
            {
                $this->session->set_flashdata('message','Project Successfully Updated');
                redirect('campaign/campaign/manage_campaign/'.$campaignid);
            }

        }

    }

    public function donations($campaignid)
    {
        $amount = $this->campaign_model->get_donations($campaignid);

        $this->load->view('template/header');
        $this->load->view('campaign/sub_menu');
        $this->load->view('campaign/donations',array('CAMPAIGNID'=>$campaignid,'AMOUNT'=>$amount));
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function donate($campaignid)
    {
        $this->form_validation->set_rules('amount','required');
        $this->form_validation->set_rules('email','required');

        $campaign = $this->campaign_model->get_selected_campaign($campaignid);

        if($this->form_validation->run()==FALSE)
        {
             $this->load->view('template/header');
             $this->load->view('campaign/sub_menu');
             $this->load->view('campaign/donation',$campaign);
             $this->load->view('template/header_end');
             $this->load->view('template/footer');
       }
       else
       {
            $email = $this->input->post('email');
            $amount = $this->input->post('amount');

            if(!$this->campaign_model->add_donation($campaignid,$email,$amount))
            {
                echo "Could not Add to Donation.Please try Later";
                redirect('campaign/campaign/donate'.$campaignid);
            }

            redirect('campaign/campaign/manage_campaign/'.$campaignid);
       }
    }
}
?>
