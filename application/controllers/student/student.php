<?php

class Student extends CI_Controller
{
    public function  __construct()
    {
        parent::__construct();
        $this->output->enable_profiler(TRUE);
        $this->load->model('student_model');
    }

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('student/sub_menu');
        $this->load->view('student/index');
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function all_assignments()
    {
        $result = $this->student_model->get_my_assignments();

        $index=0;
        $data = $result;
        
        foreach($data as $row)
        {
            $instructor = $this->student_model->get_assignment_instructor($row['ASSIGNMENTID']);

            $instructor = $instructor['NAME'];

            $data[$index]['INSTRUCTOR'] = $instructor;

            $index++;
            
        }
       
        $this->load->view('template/header');
        $this->load->view('student/sub_menu');
        $this->load->view('student/all_assignments',array('data'=>$data));
        $this->load->view('template/header_end');
        $this->load->view('template/footer');
    }

    public function manage_assignment($assignmentid)
    {

          if(!$result = $this->student_model->get_assignment($assignmentid))
          {
              //redirect to a error page showing that the assignment does not exists
          }

          $data = $result;
          $this->load->view('template/header');
          $this->load->view('student/sub_menu');
          $this->load->view('student/manage_assignment',$data);
          $this->load->view('template/header_end');
          $this->load->view('template/footer');        
    }

    public function submit_assignment($assignmentid)
    {
         /*
          * Update will take place only
          */
         $this->form_validation->set_rules('content','required');

         if($this->form_validation->run()==FALSE)
         {
             $this->load->view('template/header');
             $this->load->view('student/sub_menu');
             $this->load->view('student/submit_assignment',array('assignmentid'=>$assignmentid));//
             $this->load->view('template/header_end');
             $this->load->view('template/footer');
         }
         else
         {
             
             $source = $_FILES["content"]["tmp_name"];
             $name = $_FILES["content"]["name"];

             $destination = './uploads/docs/'.$assignmentid.'_submission_'.$name;

             if(!copy($source,$destination))
             {
                 echo "File Uploading failed";
             }
             else
             {

                 $document = base_url().'/uploads/docs/'.$assignmentid.'_submission_'.$name;

                 $old_path = $this->student_model->get_submission($assignmentid);
                 
                 $old_path  = $old_path['CONTENT'];
                 $old_path = end(explode("/",$old_path));

                 $old_path = './uploads/docs/'.$old_path;

                 if(file_exists($old_path))
                 {
                     if((strcmp($old_path,'./uploads/docs/')!=0) && (strcmp($old_path,$destination)!=0))
                         unlink($old_path);
                 }

                 
                 $this->student_model->set_submission($assignmentid,$document);

                 $this->load->view('template/header');
                 $this->load->view('student/sub_menu');
                 $this->load->view('student/confirmation',array('document'=>$document));
                 $this->load->view('template/header_end');
                 $this->load->view('template/footer');
                 
             }
        }       
    }

    public function my_submissions()
    {
        $userid = $this->session->userdata('userid');

        $result = $this->student_model->get_submissions();

        $index = 0;

        foreach($result as $row)
        {
            $data[$index]['ASSIGNMENTID'] = $row['ASSIGNMENTID'];
            $data[$index]['SUBMITTED_FILE'] = $row['CONTENT'];
            $data[$index]['REMARK'] = $row['REMARK'];
            $data[$index]['SUBMISSION_DATE'] = $row['CREATION_DATE'];

            $assignment = $this->student_model->get_assignment($row['ASSIGNMENTID']);
            $data[$index]['ASSIGNMENT_FILE'] = $assignment['DOCUMENT'];
            $data[$index]['ASSIGNMENT_DATE'] = $assignment['CREATION_DATE'];
            $data[$index]['ASSIGNMENT_DEADLINE'] = $assignment['DURATION'];
            $data[$index]['ASSIGNMENT_TOTAL_MARKS'] = $assignment['TOTAL_MARKS'];

            $instructor = $this->student_model->get_assignment_instructor($row['ASSIGNMENTID']);
            $data[$index]['INSTRUCTOR'] = $instructor;

            $index++;
        }

        $this->load->view('template/header');
        $this->load->view('student/sub_menu');
        $this->load->view('student/all_submissions',array('data'=>$data));
        $this->load->view('template/header_end');
        $this->load->view('template/footer');       
    }

    public function search_assignment()
    {
        $this->form_validation->set_rules('assignmentid','');
        $this->form_validation->set_rules('title','');
        $this->form_validation->set_rules('creation_date','');
        $this->form_validation->set_rules('duration','');

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('template/header');
            $this->load->view('student/search_assignment');
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
        }
        else
        {
            $assignmentid = $this->input->post('assignmentid',TRUE);
            $title = $this->input->post('title',TRUE);
            $total_marks = $this->input->post('total_marks',TRUE);
            $creation_date = $this->input->post('creation_date',TRUE);
            $duration = $this->input->post('duration',TRUE);

            $result = $this->student_model->get_searched_assignment($assignmentid,$title,$total_marks,$creation_date,$duration);
            

            $index=0;
            $data = $result;


            foreach($data as $row)
            {
                $instructor = $this->student_model->get_assignment_instructor($row['ASSIGNMENTID']);

                $instructor = $instructor['NAME'];

                $data[$index]['INSTRUCTOR'] = $instructor;

                $index++;

            }
  
            $this->load->view('template/header');
            $this->load->view('student/sub_menu');
            $this->load->view('student/search_assignment');
            $this->load->view('student/search_result',array('data'=>$data));
            $this->load->view('template/header_end');
            $this->load->view('template/footer');
        }

    }
    public function  instructor_profile(){}
    public function notifications(){}

    
}
?>
