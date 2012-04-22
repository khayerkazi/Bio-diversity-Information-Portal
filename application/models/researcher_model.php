<?php


class Researcher_model extends CI_Model
{

      public function  __construct() {
           parent::__construct();
    }

    public function get_projects()
    {
         $query = "SELECT * FROM Biodiversity.PROJECT ORDER BY PROJECT.CREATION_DATE DESC";

         if(!$result = $this->db->query($query))
         {
             $data = array(
                                'PROJECTID'=>0,
                                'TITLE'=>'NO PROJECTS CURRENTLY RUNNING',
                                'DESCRIPTION'=>'',
                                'CREATION_DATE'=>'',
                                'DURATION'=>''
                          );
             return $data;
         }
         return $result->result_array();
    }

    public function get_my_projects()
    {
        if(!$this->session->userdata('userid'))
        {
            redirect('common_user/common_user/sign_in');
        }
        else
        {
            $userid = $this->session->userdata('userid');
            $query = "SELECT * FROM  BIODIVERSITY.PROJECT 
                               INNER JOIN BIODIVERSITY.RESEARCHER_PROJECT
                               ON BIODIVERSITY.PROJECT.PROJECTID = BIODIVERSITY.RESEARCHER_PROJECT.PROJECTID
                               WHERE BIODIVERSITY.RESEARCHER_PROJECT.USERID = $userid"
                               ;

            if(!$result = $this->db->query($query))
            {
                $data = array(
                                'PROJECTID'=>0,
                                'TITLE'=>'NO PROJECTS HAVE BEEN ASSOCIATED WITH YOU',
                                'DESCRIPTION'=>'',
                                'CREATION_DATE'=>'',
                                'DURATION'=>''
                          );
             return $data;
            }
            return $result->result_array();
        }
    }

    public function get_selected_project($projectid)
    {
           $query = "SELECT * FROM BIODIVERSITY.PROJECT WHERE PROJECT.PROJECTID = $projectid";

           if(!$result=$this->db->query($query))
           {
              $data = array(
                                'PROJECTID'=>0,
                                'TITLE'=>'PROJECT DOSE NOT EXIST OR EXPIRED',
                                'DESCRIPTION'=>'',
                                'CREATION_DATE'=>'',
                                'DURATION'=>''
                          );
             return $data;
           }
           else
           {
               return $result->row_array();
           }
    }

    public function join_project($projectid)
    {
        if(!$this->session->userdata('userid'))
        {
            /*
             * Not Logged In
             */
            return false;
        }
        $userid = $this->session->userdata('userid');

        $data = array(
                        'USERID'=>$userid,
                        'PROJECTID'=>$campaignid
                     );

        if(!$this->db->insert('RESEARCHER_PROJECT',$data))
        {
            /*
             * Database Error
             */
            return false;
        }
        return true;
    }

    public function get_searched_project($projectid=0,$title='',$description='',$creation_date='',$duration='')
    {

          if($projectid=='')
          {
              $projectid=0;
          }

          if(strcmp($creation_date,'')==0)
          {
              $creation_date_query = '';
          }
          else
          {
              $creation_date_query = "OR PROJECT.CREATION_DATE LIKE to_date('$creation_date','dd-mm-yyyy') ";
          }
          if(strcmp($duration,'')==0)
          {
              $duration_query = '';
          }
          else
          {
              $duration_query = "OR PROJECT.DURATION LIKE to_date('$duration','dd-mm-yyyy')";
          }

          $query = "SELECT * FROM BIODIVERSITY.PROJECT
                             WHERE PROJECT.PROJECTID=$projectid
                                OR PROJECT.TITLE LIKE '$title'
                                OR PROJECT.DESCRIPTION LIKE '$description'
                                ".$creation_date_query.$duration_query."                                
                   ORDER BY PROJECT.CREATION_DATE DESC
                  ";

          if(!$result = $this->db->query($query))
          {
                  $data = array(
                                    'PROJECTID'=>0,
                                    'TITLE'=>'NO RESULTS FOUND',
                                    'DESCRIPTION'=>'',
                                    'CREATION_DATE'=>'',
                                    'DURATION'=>''
                              );
                 return $data;
          }

          return $result->result_array();         
    }

    public function add_project($title,$description,$creation_date,$duration,$document_path='')
    {
        /*
         * Insert Into project entity
         * Then assign the project id in researcher_project table  along with  userids
         */
        $query="INSERT INTO BIODIVERSITY.PROJECT
                        VALUES
                        (
                            NULL,
                            '$title',
                            '$description',
                            to_date($creation_date,'dd-mm-yyyy'),
                            to_date('$duration','dd-mm-yyyy'),
                            NULL
                        )
                ";
             /*$this->db->set('PROJECTID',null);
             $this->db->set('TITLE',$title);
             $this->db->set('DESCRIPTION',$description);
             $this->db->set('CREATION_DATE',"to_date($creation_date,'dd-mm-yy')");
             $this->db->set('DURATION',"to_date($duration,'dd-mm-yy')");
             $this->db->set('DOCUMENT',null);*/

             if(!$this->db->query($query))
             {
                 echo "Project Could Not Be Inserted";
                 return false;
             }
       
        $data = array(
                        'TITLE'=>$title,
                        'DESCRIPTION'=>$description,
                     );

        if(!$result = $this->db->get_where('PROJECT',$data))
        {
            echo "Project NOT FOUND";
            return false;
        }
        $result = $result->row_array();
        $projectid = $result['PROJECTID'];
        $userid = $this->session->userdata('userid');

        $data = array(
                        'PROJECTID'=>$projectid,
                        'USERID'=>$userid
                     );

        if(!$this->db->insert('RESEARCHER_PROJECT',$data))
        {
            echo "INSERTION IN RESEARCHER_PROJECT FAILED";
            return false;
        }
        return true;
    }

    public function update_project($projectid,$title,$description,$duration,$document='')
    {
        /*
         * $document is disabled for the time being
         * To enable the steps are described in earlier.s
         */
        $query = "UPDATE BIODIVERSITY.PROJECT 
                        SET PROJECT.TITLE='$title',PROJECT.DESCRIPTION='$description',PROJECT.DURATION=to_date('$duration','dd-mm-yyyy')
                        WHERE PROJECT.PROJECTID=$projectid";

        if(!$result = $this->db->query($query))
        {
            echo "UPDATE OPERATION FAILED,EITHER THE PROJECT IS EXPIRED OR YOU DON'T HAVE <br/> PERMISSION";
            return false;
        }
        return true;
    }

    public function get_project_mates($projectid)
    {
        /*
         * 
         */
        $userid  = $this->session->userdata('userid');
       $query = "SELECT BIODIVERSITY.COMMON_USER.USERNAME FROM BIODIVERSITY.COMMON_USER
                            INNER JOIN BIODIVERSITY.RESEARCHER_PROJECT
                                ON
                                BIODIVERSITY.COMMON_USER.USERID= BIODIVERSITY.RESEARCHER_PROJECT.USERID
                                    WHERE
                                    BIODIVERSITY.RESEARCHER_PROJECT.PROJECTID = $projectid
                                    AND BIODIVERSITY.RESEARCHER_PROJECT.USERID <> $userid
                                
               ";
       
       if(!$result = $this->db->query($query))
       {
           echo "NO MEMBERS FOUND";
       }

       return $result->result_array();


    }

    public function delete_project($projectid)
    {
        /*
         * Delete From Researcher Project so that only that user is excluded from circle
         * Trigger Must be written so that if no one else has been associated with this project then The Entity
           (Corresponding Project Table Must be deleted)
         * return whether operation was successful or not
         */
        $userid = $this->session->userdata('userid');
        $query = "DELETE FROM BIODIVERSITY.RESEARCHER_PROJECT
                        WHERE
                        RESEARCHER_PROJECT.PROJECTID=$projectid
                        AND
                        RESEARCHER_PROJECT.USERID = $userid";

        if(!$result = $this->db->query($query))
        {
            echo "Deletion from researcher_project failed";
            return  false;
        }

        $query = "SELECT count(*) COUNT FROM BIODIVERSITY.RESEARCHER_PROJECT
                                  WHERE RESEARCHER_PROJECT.PROJECTID=$projectid";

        if(!$result = $this->db->query($query))
        {
            
        }
        
        $result = $result->row_array();
        if($result['COUNT']==0)
        {
            $query = "DELETE FROM BIODIVERSITY.PROJECT WHERE PROJECT.PROJECTID = $projectid";
            if(!$this->db->query($query))
            {
               
                return false;
            }
        }
        return true;
        
    }

    public function get_notifications(){}

    

    
}

?>
