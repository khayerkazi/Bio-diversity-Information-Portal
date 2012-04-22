<?php


class Instructor_model extends CI_Model
{
    public function  __construct() {
        parent::__construct();
    }

    public function  get_assignments()
    {
        $userid = $this->session->userdata('userid');
        $query = "
                    SELECT * FROM BIODIVERSITY.ASSIGNMENT INNER JOIN BIODIVERSITY.INSTRUCTOR_ASSIGNMENT
                    ON BIODIVERSITY.ASSIGNMENT.ASSIGNMENTID = BIODIVERSITY.INSTRUCTOR_ASSIGNMENT.ASSIGNMENTID
                    WHERE BIODIVERSITY.INSTRUCTOR_ASSIGNMENT.USERID = $userid
                 ";
        if(!$result = $this->db->query($query))
        {
            echo "NO SUCH ASSIGNMENT IS INITIATED BY YOU";
        }

        return $result->result_array();
    }

    public function get_next_assignmentid()
    {
        $query = "
                    SELECT max(BIODIVERSITY.ASSIGNMENT.ASSIGNMENTID) ASSIGNMENTID FROM BIODIVERSITY.ASSIGNMENT
                 ";
        if(!$result = $this->db->query($query))
        {
            return 0;
        }

        $id = $result->row_array();
        $id = $id['ASSIGNMENTID'];
        $id++;
        return $id;
    }

    public function get_submissions()
    {
        $userid = $this->session->userdata('userid');

        $query = "
                        SELECT * FROM BIODIVERSITY.ASSIGNMENT_SUBMISSION
                        WHERE BIODIVERSITY.ASSIGNMENT_SUBMISSION.ASSIGNMENTID
                        IN
                        (SELECT BIODIVERSITY.ASSIGNMENT.ASSIGNMENTID FROM BIODIVERSITY.ASSIGNMENT
                        INNER JOIN BIODIVERSITY.INSTRUCTOR_ASSIGNMENT
                        ON BIODIVERSITY.ASSIGNMENT.ASSIGNMENTID = BIODIVERSITY.INSTRUCTOR_ASSIGNMENT.ASSIGNMENTID
                        WHERE BIODIVERSITY.INSTRUCTOR_ASSIGNMENT.USERID = $userid
                        )
                 ";

        if(!$result = $this->db->query($query))
        {
            echo "NO Submissions Have been Committed Yet.";
        }

        return $result->result_array();
    }

    public function  get_assignment($assignmentid)
    {
          $userid = $this->session->userdata('userid');
          $query = "
                        SELECT * FROM BIODIVERSITY.ASSIGNMENT WHERE BIODIVERSITY.ASSIGNMENT.ASSIGNMENTID = $assignmentid
                   ";
          if(!$result = $this->db->query($query))
          {
              echo "";
          }
          return $result->row_array();
        
    }

    public function  get_assignment_submission($assignmentid)
    {
         $userid = $this->session->userdata('userid');

         $query = "
                        SELECT * FROM BIODIVERSITY.ASSIGNMENT_SUBMISSION
                        WHERE BIODIVERSITY.ASSIGNMENT_SUBMISSION.ASSIGNMENTID = $assignmentid
                  ";

         if(!$result = $this->db->query($query))
         {
             echo "";
         }
         return $result->result_array();
         
    }

    public function add_assignment($title='',$description='',$total_marks=0,$creation_date='',$duration='',$document='')
    {
          $userid = $this->session->userdata('userid');
          if($creation_date=='')
          {
              $creation_date_query= "to_date(SYSDATE,'dd-mm-yyyy')";
          }
          else
          {
              $creation_date_query = "to_date('$creation_date','dd-mm-yyyy')";
          }
          if($duration=='')
          {
              $duration_query= "to_date(SYSDATE,'dd-mm-yyyy')";
          }
          else
          {
              $duration_query = "to_date('$duration','dd-mm-yyyy')";
          }

          if($total_marks=='')
          {
              $total_marks=0;
          }

          $query = "
                        INSERT INTO BIODIVERSITY.ASSIGNMENT VALUES
                        (
                            NULL,
                            '$title',
                            '$description',
                            $total_marks,
                            ".$creation_date_query.','.$duration_query.','."
                            '$document'
                            ".")";
          if(!$result = $this->db->query($query))
          {
              echo "Insertion in Assignment From Instructor Controller_Model Failed";
              return false;
          }

          $data=array(
                        'TITLE'=>$title,
                        'DESCRIPTION'=>$description,
                        'TOTAL_MARKS'=>$total_marks,
                     );

          if(!$result = $this->db->get_where('ASSIGNMENT',$data))
          {
              echo "INSERTED BUT COULD NOT BE RECOVERED AS ERROR OCCURED WHILE TRANSFER";
              return false;
          }

          $result = $result->row_array();
          $assignmentid = $result['ASSIGNMENTID'];

          $query = "
                        INSERT INTO BIODIVERSITY.INSTRUCTOR_ASSIGNMENT VALUES($userid,$assignmentid)
                   ";
          if(!$result = $this->db->query($query))
          {
              echo "FAILED TO INSERT INTO INSTRUCTOR_ASSIGNMENT";
              return false;
          }

          return true;
    }

    public function update_assignment($assignmentid,$title,$description,$total_marks,$duration,$document)
    {
            $userid = $this->session->userdata('userid');


            $query = "
                        UPDATE BIODIVERSITY.ASSIGNMENT
                        SET
                        BIODIVERSITY.ASSIGNMENT.TITLE = '$title',
                        ASSIGNMENT.DESCRIPTION = '$description',
                        ASSIGNMENT.TOTAL_MARKS = $total_marks,
                        ASSIGNMENT.DURATION = to_date('$duration','dd-mm-yyyy'),
                        ASSIGNMENT.DOCUMENT = '$document'
                        WHERE ASSIGNMENT.ASSIGNMENTID = $assignmentid
                     ";
            if(!$this->db->query($query))
            {
                return false;
            }
            return true;
    }

    public function get_students()
    {
           $query = "SELECT * FROM BIODIVERSITY.COMMON_USER INNER JOIN BIODIVERSITY.STUDENT
                     ON
                     BIODIVERSITY.COMMON_USER.USERID = BIODIVERSITY.STUDENT.USERID
                    ";
           if(!$result = $this->db->query($query))
           {
               ;
           }
           return $result->result_array();
    }

    public function assign_student($assignmentid,$studentid)
     {
         $query = "
                     INSERT INTO BIODIVERSITY.ASSIGNMENT_SUBMISSION VALUES
                     (
                        $assignmentid,
                        $studentid,
                        NULL,
                        100,
                        to_date(SYSDATE,'dd-mm-yyyy')                        
                     )
                  ";
         if(!$result = $this->db->query($query))
         {
             return false;
         }
         return true;
     }

    public function update_assignment_document($assignmentid,$document)
    {
         $userid = $this->session->userdata('userid');

         $query = "UPDATE BIODIVERSITY.ASSIGNMENT
                   SET ASSIGNMENT.DOCUMENT = '$document'
                   WHERE ASSIGNMENT.ASSIGNMENTID = $assignmentid
                  ";
         if(!$result = $this->db->query($query))
         {
             echo "Update Operation Failed In ";
             return false;
         }

         return true;
    }

    public function  update_assignment_creation_date($assignmentid,$creation_date)
    {
         $userid = $this->session->userdata('userid');

         $query = "UPDATE BIODIVERSITY.ASSIGNMENT
                   SET ASSIGNMENT.CREATION_DATE = to_date('$creation_date','dd-mm-yyyy')
                   WHERE ASSIGNMENT.ASSIGNMENTID = $assignmentid
                  ";
         if(!$result = $this->db->query($query))
         {
             echo "Update Operation Failed In ";
             return false;
         }

         return true;
    }

    public function update_assignment_duration($assignmentid,$duration)
    {
         $userid = $this->session->userdata('userid');

         $query = "UPDATE BIODIVERSITY.ASSIGNMENT
                   SET ASSIGNMENT.DURATION = to_date('$duration','dd-mm-yyyy')
                   WHERE ASSIGNMENT.ASSIGNMENTID = $assignmentid
                  ";
         if(!$result = $this->db->query($query))
         {
             echo "Update Operation Failed In ";
             return false;
         }

         return true;
    }

    public function  delete_assignment($assignmentid)
    {
         $userid = $this->session->userdata('userid');

         $query = "
                     DELETE FROM BIODIVERSITY.ASSIGNMENT WHERE BIODIVERSITY.ASSIGNMENT.ASSIGNMENTID = $assignmentid
                  ";
         if(!$result = $this->db->query($query))
         {
             echo "DELETION OPERATION FAILED IN INSTRUCTOR PART ";
             return false;
         }

         return true;
    }

    

    
}

?>
