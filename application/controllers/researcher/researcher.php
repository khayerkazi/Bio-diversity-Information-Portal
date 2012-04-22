<?php



class Researcher extends CI_Controller
{

    public function  __construct() {
        parent::__construct();
        $this->load->model('researcher_model');
        $this->output->enable_profiler(TRUE);
    }

    public function  index()
    {
        $this->load->view('template/header');
        $this->load->view('researcher/sub_menu');
        $this->load->view('researcher/index');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
        
    }

    public function my_projects()
    {
        /*
         * show a list of  the user's project
         * and associated members
         */
        if(!$this->session->flashdata('message'))
        {
            $message =  $this->session->flashdata('message');
        }
        else
        {
            $message = '';
        }
        $project = $this->researcher_model->get_my_projects();
        
        $index = 0;
       // $data = array('PROJECT'=>'','MATES'=>'');
        $data = null;
        
        foreach($project as $row)
        {
            
            $projectid = $row['PROJECTID'];
            //$project_col = array('TITLE'=>$row['TITLE'],'DESCRIPTION'=>$row['DESCRIPTION'],'CREATION_DATE'=>$row['CREATION_DATE'],'DURATION'=>$row['DURATION']);

            if(!$mates = $this->researcher_model->get_project_mates($projectid))
            {
               
            }
            $data[$index] = array('PROJECT'=>$row,'MATES'=>$mates);
         
            $index++;
            
        }
        
        $this->load->view('template/header');
        $this->load->view('researcher/sub_menu');
        $this->load->view('researcher/researcher_my_projects',array('data'=>$data,'message'=>$message));
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }
    public function view_project($projectid)
    {

        $project = $this->researcher_model->get_selected_project($projectid);
        $project['message'] = $this->session->flashdata('message');

        $this->load->view('template/header');
        $this->load->view('researcher/sub_menu');
        $this->load->view('researcher/single_project_view',$project);
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
        
    }

    public function join_project($projectid)
    {
        //$this->load->model('project_model');

        if(!$this->project_model->join_project($projectid))
        {
            $this->session->set_flashdata('messsage','Either you are not logger in or the Project  might not exist');
            redirect('researcher/researcher/view_project/'.$projectid);
        }
        else
        {
            $this->session->set_flashdata('message','you are Compadded to the Campaign');
            redirect('researcher/researcher/manage_project/'.$projectid);
        }
    }

    public function  all_projects()
    {
        $data = null;
        $this->load->model('researcher/researcher_model');
        if(!$result=$this->researcher_model->get_projects())
        {
            $message = 'No Project is currently running ';
        }
        else
        {
            $count = count($result);
            $message = " Total $count Projects are running.";
        }
        $index = 0;
        foreach($result as $row)
        {
            if(!$mates = $this->researcher_model->get_project_mates($row['PROJECTID']))
            {
            }
            $data[$index] = array('PROJECT'=>$row,'MATES'=>$mates);
            $index++;            
        }

        $this->load->view('template/header');
        $this->load->view('researcher/sub_menu');
        $this->load->view('researcher/all_projects',array('data'=>$data,'message'=>$message));
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function manage_project($projectid)
    {
        $this->load->model('researcher_model');

        $project = $this->researcher_model->get_selected_project($projectid);
        $project['message'] = $this->session->flashdata('message');

        $this->load->view('template/header');
        $this->load->view('researcher/sub_menu');
        $this->load->view('researcher/single_project',$project);
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function delete_project($projectid)
    {
        $this->load->model('researcher_model');

        if(!$this->researcher_model->delete_project($projectid))
        {
            $this->session->set_flashdata('message','Could Not Disconnet You from project right now.<br/> PLease try sometie later');
            
        }
        else
        {
            $this->session->set_flashdata('message','Disconnected you from project');
        }
        redirect('researcher/researcher/my_projects');
    }
    public function notifications(){}

    public function search_project()
    {
        if($this->session->flashdata('message')!='')
        {
            $message = $this->session->flashdata('message');
        }
        else
        {
            $message = '';
        }

        $this->load->model('researcher_model');
        $this->form_validation->set_rules('projectid','');

        if($this->form_validation->run()==FALSE)
        {
             $this->load->view('template/header');
             $this->load->view('researcher/sub_menu');
             $this->load->view('researcher/search_project');
             $this->load->view('template/header_end');
             $this->load->view('template/footer');
        }
        else
        {
            $projectid = $this->input->post('projectid',TRUE);
            $title = $this->input->post('title',TRUE);
            $creation_date = $this->input->post('creation_date',TRUE);
            $duration = $this->input->post('duration',TRUE);

            $result=$this->researcher_model->get_searched_project($projectid,$title,'',$creation_date,$duration);
            $index=0;
            $data = null;
                foreach($result as $row)
                {
                    
                    if(!$mates = $this->researcher_model->get_project_mates($row['PROJECTID']))
                    {
                        //echo "Error while fetching associate projectmates";
                       
                    }
                    $data[$index] = array('PROJECT'=>$row,'MATES'=>$mates);
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
                $this->load->view('researcher/sub_menu');
                $this->load->view('researcher/search_project');
                $this->load->view('researcher/search_result',array('data'=>$data,'message'=>$message));
                $this->load->view('template/header_end');
                $this->load->view('template/footer');
                    
            
            
        }
    }

    public function add_project()
    {
        $this->load->model('researcher_model');

        $this->form_validation->set_rules('title','TITLE','required');
        $this->form_validation->set_rules('description','DESCRIPTION','required');
        $this->form_validation->set_rules('duration','Duration','required');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('researcher/sub_menu');
            $this->load->view('researcher/add_project');
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
        }
        else
        {
            $title = $this->input->post('title',TRUE);
            $description = $this->input->post('description',TRUE);
            $duration = $this->input->post('duration',TRUE);
            $creation_date = 'SYSDATE';

            if(!$this->researcher_model->add_project($title,$description,$creation_date,$duration))
            {
                //error message regarding failure of insertion  in project table
                echo "Internal Server Error.<br/> PLease try later";
            }
            
            redirect('researcher/researcher/my_projects');
        }
    }

    public function update_project($projectid)
    {
        $this->load->model('researcher_model');
        $this->form_validation->set_rules('title','TITLE','required');
        $this->form_validation->set_rules('description','DESCRIPTION','required');

        $data = $this->researcher_model->get_selected_project($projectid);
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
            $this->load->view('researcher/sub_menu');
            $this->load->view('researcher/update_project',$data);
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
            $creation_date = $this->input->post('creation_date');
            $duration = $this->input->post('duration');

            if(!$this->researcher_model->update_project($projectid,$title,$description,$duration))
            {
                $this->session->set_flashdata('message','Project Could not be  Updated Now ,please try later');
                redirect("researcher/researcher/update_project/$projectid");
            }
            else
            {
                $this->session->set_flashdata('message','Project Successfully Updated');
                redirect('researcher/researcher/manage_project/'.$projectid);
            }
            
        }
        
    }

    
    
}

?>
