<?php


class Instructor extends CI_Controller
{
    public function  __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
        $this->load->model('instructor_model');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('instructor/sub_menu');
        $this->load->view('instructor/index');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }
    

    public function add_assignment()
    {
       
        $this->form_validation->set_rules('title','required');
        $this->form_validation->set_rules('total_marks','required');
        $this->form_validation->set_rules('duration','required');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('instructor/sub_menu');
            $this->load->view('instructor/add_assignment');
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
        }

        else
        {
            $title = $this->input->post('title',TRUE);
            $description = $this->input->post('description',TRUE);
            $total_marks = $this->input->post('total_marks',TRUE);
            $creation_date = '';
            $duration = $this->input->post('duration',TRUE);

            /*
             * copy the new file to destination
             * create the string containing path to new document (http format)
             * insert it 
             */

            $assignmentid = $this->instructor_model->get_next_assignmentid();

            $name = $_FILES["document"]["name"];
            $source = $_FILES["document"]["tmp_name"];
            $destination = './uploads/docs/'.$assignmentid.'_'.'assignment'.'_'.$name;

            if(!copy($source, $destination))
            {
                echo "File is Corrupted";
                //redirect('instructor/instructor/add_assignment');
            }

            $document = base_url().'/uploads/docs/'.$assignmentid.'_'.'assignment_'.$name;

            if($this->instructor_model->add_assignment($title,$description,$total_marks,$creation_date,$duration,$document))
            {
                $this->load->view('template/header');
                $this->load->view('instructor/sub_menu');
                $this->load->view('instructor/add_assignment',array('message','Assignment Successfully Created'));
                $this->load->view('template/header_end');
                $this->load->view('template/footer');
            }
            
        }
    }
    public function my_assignments()
    {

            $result = $this->instructor_model->get_assignments();

            $this->load->view('template/header');
            $this->load->view('instructor/sub_menu');
            $this->load->view('instructor/my_assignments',array('data'=>$result));
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
    }

    public function manage_assignment($assignmentid)
    {
         $result = $this->instructor_model->get_assignment($assignmentid);
 
         $this->load->view('template/header');
         $this->load->view('instructor/sub_menu');
         $this->load->view('instructor/manage_assignment',$result);
         $this->load->view('template/header_end');
    }

    public function delete_assignment($assignmentid)
    {
         $this->instructor_model->delete_assignment($assignmentid);
         redirect('instructor/instructor/my_assignments');
    }

    public function update_assignment($assignmentid)
    {
        $this->form_validation->set_rules('title','required');
        $this->form_validation->set_rules('total_marks','required');
        $this->form_validation->set_rules('duration','required');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('instructor/sub_menu');
            $this->load->view('instructor/update_assignment',array('ASSIGNMENTID'=>$assignmentid));
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
        }

        else
        {
            $title = $this->input->post('title',TRUE);
            $description = $this->input->post('description',TRUE);
            $total_marks = $this->input->post('total_marks',TRUE);
            $creation_date = '';
            $duration = $this->input->post('duration',TRUE);

            /*
             * copy the new file to destination
             * create the string containing path to new document (http format)
             * insert it
             */
            $name = $_FILES["document"]["name"];
            $source = $_FILES["document"]["tmp_name"];
            $destination = './uploads/docs/'.$assignmentid.'_'.'assignment'.'_'.$name;

            if(!copy($source, $destination))
            {
                echo "File is Corrupted";
                //redirect('instructor/instructor/add_assignment');
            }

            $document = base_url().'/uploads/docs/'.$assignmentid.'_'.'assignment_'.$name;

            $old = $this->instructor_model->get_assignment($assignmentid);
            $old = $old['DOCUMENT'];
            $old = end(explode('/',$old));
            $old ='./uploads/docs/'.$old;

            if(file_exists($old))
                 {
                     if((strcmp($old,'./uploads/docs/')!=0) && (strcmp($old,$destination)!=0))
                         unlink($old);
                 }

            if($this->instructor_model->update_assignment($assignmentid,$title,$description,$total_marks,$duration,$document))
            {
                redirect('instructor/instructor/manage_assignment/'.$assignmentid);
            }

        }
         
    }
    
    public function assign_assignment($assignmentid)
    {

        $this->form_validation->set_rules('check','required');


        if($this->form_validation->run()==FALSE)
        {

            $result = $this->instructor_model->get_students();
            $assignment =$this->instructor_model->get_assignment($assignmentid);

            $data['ASSIGNMENT'] = $assignment;
            $data['STUDENT'] = $result;

            $this->load->view('template/header');
            $this->load->view('instructor/assign_assignment',array('data'=>$data));
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
        }

        else
        {
            $students = $this->input->post('check',TRUE);

            for($index=0;$index<count($students);$index++)
            {
                 $this->instructor_model->assign_student($assignmentid,$students[$index]);
            }

            redirect('instructor/instructor/manage_assignment/'.$assignmentid);
            
        }

        
    }
    public function view_submissions(){}
    public function give_remarks(){}
    public function update_remarks(){}
    public function notifications(){}
    
}
?>
