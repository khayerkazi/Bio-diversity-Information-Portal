<?php

class Student_model extends CI_Model
{
    public function  __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_my_assignments()
    {
        $userid = $this->session->userdata('userid');

        $query = "
                    SELECT * FROM BIODIVERSITY.ASSIGNMENT
                            INNER JOIN BIODIVERSITY.ASSIGNMENT_SUBMISSION
                            ON
                            BIODIVERSITY.ASSIGNMENT.ASSIGNMENTID= BIODIVERSITY.ASSIGNMENT_SUBMISSION.ASSIGNMENTID
                            WHERE BIODIVERSITY.ASSIGNMENT_SUBMISSION.USERID = $userid
                 ";

        if(!$result = $this->db->query($query))
        {
            //NO assignments yet
        }
        return $result->result_array();
    }

    public function get_assignment($assignmentid)
    {
        $userid = $this->session->userdata('userid');
        $data = array('ASSIGNMENTID'=>$assignmentid);
        if(!$result = $this->db->get_where('ASSIGNMENT',$data))
        {
            //No result found
        }

        return $result->row_array();
        
   }

   public function get_remark($assignmentid)
   {
     $result = get_assignment($assignmentid);
     return $result['REMARK'];
      
   }

   public function set_submission($assignmentid,$document)
   {
       $userid = $this->session->userdata('userid');
       $query = "UPDATE BIODIVERSITY.ASSIGNMENT_SUBMISSION
                        SET ASSIGNMENT_SUBMISSION.CONTENT= '$document'
                        WHERE ASSIGNMENT_SUBMISSION.USERID = $userid
                        AND
                        ASSIGNMENT_SUBMISSION.ASSIGNMENTID = $assignmentid
                ";
       if(!$result = $this->db->query($query))
       {
           /*
            * Query Execution Problem
            */
           return false;
       }
       return true;
   }

   public function get_submission($assignmentid)
   {
          $userid = $this->session->userdata('userid');

          $query = "
                        SELECT * FROM BIODIVERSITY.ASSIGNMENT_SUBMISSION
                        WHERE BIODIVERSITY.ASSIGNMENT_SUBMISSION.ASSIGNMENTID = $assignmentid
                        AND BIODIVERSITY.ASSIGNMENT_SUBMISSION.USERID = $userid
                   ";

          if(!$result = $this->db->query($query))
          {
              echo "NO ASSIGNMENT FOUND";
          }

          return $result->row_array();
          
   }

   public function get_submissions()
   {
       $userid = $this->session->userdata('userid');
       $query = "
                    SELECT *
                    FROM BIODIVERSITY.ASSIGNMENT_SUBMISSION
                    WHERE BIODIVERSITY.ASSIGNMENT_SUBMISSION.USERID = $userid
                    ORDER BY BIODIVERSITY.ASSIGNMENT_SUBMISSION.CREATION_DATE DESC
                ";

       if(!$result = $this->db->query($query))
       {
           //error in query
       }
       
       return $result->result_array();
   }

   public function  get_notifications()
   {
       $userid = $this->session->userdata('userid');
       $query = "
                    SELECT * FROM BIODIVERSITY.NOTIFICATION
                            INNER JOIN BIODIVERSITY.STUDENT_NOTIFICATION
                            ON
                            BIODIVERSITY.NOTIFICATION.NOTIFICATIONID = BIODIVERSITY.STUDENT_NOTIFICATION.NOTIFICATIONID
                            WHERE BIODIVERSITY.STUDENT_NOTIFICATION.STUDENTID = $userid
                ";

       if(!$result = $this->db->query($query))
       {
           //error message
           echo "Notification Finding Query Could not be resolved at this moment";
       }
       
       return $result->result_array();         
   }

   public function get_assignment_instructor($assignmentid)
   {
       $userid = $this->session->userdata('userid');

       $query = "
                    SELECT * FROM BIODIVERSITY.COMMON_USER INNER JOIN BIODIVERSITY.INSTRUCTOR_ASSIGNMENT ON
                        BIODIVERSITY.COMMON_USER.USERID = BIODIVERSITY.INSTRUCTOR_ASSIGNMENT.USERID
                        WHERE
                        BIODIVERSITY.INSTRUCTOR_ASSIGNMENT.ASSIGNMENTID = $assignmentid
                ";

       if(!$result = $this->db->query($query))
       {
           echo "NO Assignemnt Found .<br/> May be the deadline is over or the assignment is deleted";
       }

       return $result->row_array();
       
   }

   public function get_all_assignments_instructor()
   {
       $userid = $this->session->userdata('userid');

       $query = "
                    SELECT * FROM BIODIVERSITY.COMMON_USER INNER JOIN BIODIVERSITY.INSTRUCTOR_ASSIGNMENT
                    ON
                    BIODIVERSITY.COMMON_USER.USERID = BIODIVERSITY.INSTRUCTOR_ASSIGNMENT.USERID
                    WHERE BIODIVERSITY.INSTRUCTOR_ASSIGNMENT.ASSIGNMENTID IN
                    (
                        SELECT BIODIVERSITY.ASSIGNMENT_SUBMISSION.ASSIGNMENTID FROM BIODIVERSITY.ASSIGNMENT_SUBMISSION
                        WHERE ASSIGNMENT_SUBMISSION.USERID = $userid
                    )
                ";

       if(!$result = $this->db->query($query))
       {
           echo "Instructor  Searching Failed";
       }

       return $result->result_array();
   }

   public function get_searched_assignment($assignmentid=0,$title='',$total_marks=0,$creation_date='',$duration='')
    {
            $userid = $this->session->userdata('userid');

            if($creation_date=='')
            {
                $creation_date_query = '';
            }
            else
            {
                $creation_date_query = "OR BIODIVERSITY.ASSIGNMENT.CREATION_DATE LIKE to_date('$creation_date','dd-mm-yyyy')";
            }
            if($duration=='')
           {
               $duration_query ='' ;
           }
           else
           {
               $duration_query = "OR BIODIVERSITY.ASSIGNMENT.DURATION LIKE to_date('$duration','dd-mm-yyyy')";
           }
           if($assignmentid=='')
           {
               $assignmentid = 0;
           }
           if($total_marks=='')
           {
               $total_marks=0;
           }
              

            $query = "
                        SELECT * FROM BIODIVERSITY.ASSIGNMENT INNER JOIN BIODIVERSITY.ASSIGNMENT_SUBMISSION
                        ON BIODIVERSITY.ASSIGNMENT.ASSIGNMENTID = BIODIVERSITY.ASSIGNMENT_SUBMISSION.ASSIGNMENTID
                        WHERE
                        BIODIVERSITY.ASSIGNMENT_SUBMISSION.USERID = $userid
                        AND
                        (
                        BIODIVERSITY.ASSIGNMENT.ASSIGNMENTID = $assignmentid
                        OR
                        BIODIVERSITY.ASSIGNMENT.TITLE LIKE '%$title%'
                        OR
                        BIODIVERSITY.ASSIGNMENT.TOTAL_MARKS = $total_marks
                        ".$creation_date_query.$duration_query.
                        ")";

            if(!$result = $this->db->query($query))
            {
                echo "NO SUCH RESULT FOUND";
            }

           return $result->result_array();
    }
   
}

 ?>
