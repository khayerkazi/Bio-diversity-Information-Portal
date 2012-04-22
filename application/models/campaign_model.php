<?php


class Campaign_model extends CI_Model
{
    public function  __construct() {
        parent::__construct();
       
    }

    public function  get_campaigns()
    {
        $query = "SELECT * FROM BIODIVERSITY.CAMPAIGN ORDER BY STARTTIME DESC";

        if(!$result = $this->db->query($query))
        {
            echo "NO CAMPAIGNS YET RUNNING";
        }

        return $result->result_array();        
    }

    public function get_my_campaigns()
    {
        if(!$this->session->userdata('userid'))
        {
            $this->session->set_flashdata('message','Unauthorized Access is not allowed .Please Sign In');
            redirect('common_user/common_user/sign_in');
        }  
       else
        {
            $userid = $this->session->userdata('userid');
            $query = "SELECT * FROM  BIODIVERSITY.CAMPAIGN
                               INNER JOIN BIODIVERSITY.USER_CAMPAIGN
                               ON BIODIVERSITY.CAMPAIGN.CAMPAIGNID = BIODIVERSITY.USER_CAMPAIGN.CAMPAIGNID
                               WHERE BIODIVERSITY.USER_CAMPAIGN.USERID = $userid"
                               ;

            if(!$result = $this->db->query($query))
            {
               echo "NO CAMPAIGN IS BEING CREATED BY YOU";
            }
            return $result->result_array();
        }
    }

    public function get_selected_campaign($campaignid)
    {
           $query = "SELECT * FROM BIODIVERSITY.CAMPAIGN WHERE CAMPAIGN.CAMPAIGNID = $campaignid";

           if(!$result=$this->db->query($query))
           {
              $data = array(
                                'CAMPAIGNID'=>0,
                                'TITLE'=>'PROJECT DOSE NOT EXIST OR EXPIRED',
                                'DESCRIPTION'=>'',
                                'STARTTIME'=>'',
                                'FINISHTIME'=>'',

                          );
             return $data;
           }
           else
           {
               return $result->row_array();
           }
    }

    public function get_searched_campaign($campaignid=0,$title='',$description='',$starttime='',$finishtime='',$document='')
    {

          if($campaignid=='')
          {
              $campaignid=0;
          }

          if(strcmp($starttime,'')==0)
          {
              $starttime_date_query = '';
          }
          else
          {
              $starttime_date_query = "OR CAMPAIGN.STARTTIME LIKE to_date('$starttime','dd-mm-yyyy') ";
          }
          if(strcmp($finishtime,'')==0)
          {
              $finishtime_query = '';
          }
          else
          {
              $finishtime_query = "OR CAMPAIGN.FINISHTIME LIKE to_date('$finishtime','dd-mm-yyyy')";
          }

          $query = "SELECT * FROM BIODIVERSITY.CAMPAIGN
                             WHERE CAMPAIGN.CAMPAIGNID=$campaignid
                                OR CAMPAIGN.TITLE LIKE '$title'
                                OR CAMPAIGN.DESCRIPTION LIKE '$description'
                                ".$starttime_date_query.$finishtime_query."
                   ORDER BY CAMPAIGN.STARTTIME DESC
                  ";

          if(!$result = $this->db->query($query))
          {
              /*
                  $data = array(
                                    'CAMPAIGNID'=>0,
                                    'TITLE'=>'NO RESULTS FOUND',
                                    'DESCRIPTION'=>'',
                                    'STARTTIME'=>'',
                                    'FINISHTIME'=>'',
                                    'DOCUMENT'=>''
                              );
                 return $data;
               *
               */
          }

          return $result->result_array();
    }

    public function get_donations($campaignid)
    {
        $query = "
                    SELECT sum(BIODIVERSITY.CAMPAIGN_DONATOR.AMOUNT) AMOUNT FROM BIODIVERSITY.CAMPAIGN_DONATOR WHERE BIODIVERSITY.CAMPAIGN_DONATOR.CAMPAIGNID = $campaignid
                 ";

        if(!$result = $this->db->query($query))
        {
            return 0;
        }

        $result = $result->row_array();
        $result = $result['AMOUNT'];
    }

    public function add_donation($campaignid,$email,$amount)
    {
         $userid = $this->session->userdata('userid');

         $query = "
                        INSERT INTO BIODIVERSITY.CAMPAIGN_DONATOR VALUES
                        (
                            $campaignid,
                            '$email',
                            $amount,
                            to_date(SYSDATE,'dd-mm-yyyy')
                        )
                  ";
         return $this->db->query($query);
    }

     public function add_campaign($title,$description,$creation_date,$duration,$document_path='')
    {
        /*
         * Insert Into campaign entity
         * Then assign the campaign id in campaign_campaign table  along with  userids
         */
        $query="INSERT INTO BIODIVERSITY.CAMPAIGN
                        VALUES
                        (
                            NULL,
                            '$title',
                            '$description',
                            0,
                            to_date($creation_date,'dd-mm-yyyy'),
                            to_date('$duration','dd-mm-yyyy'),
                            '$document_path'
                        )
                ";
             /*$this->db->set('PROJECTID',null);
             $this->db->set('TITLE',$title);
             $this->db->set('DESCRIPTION',$description);
             $this->db->set('STARTTIME',"to_date($creation_date,'dd-mm-yy')");
             $this->db->set('FINISHTIME',"to_date($duration,'dd-mm-yy')");
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

        if(!$result = $this->db->get_where('CAMPAIGN',$data))
        {
            echo "CAMPAIGN NOT FOUND";
            return false;
        }
        $result = $result->row_array();
        $campaignid = $result['CAMPAIGNID'];
        $userid = $this->session->userdata('userid');
        
        $data = array(
                        'USERID'=>$userid,
                        'CAMPAIGNID'=> $campaignid
                     );

        if(!$this->db->insert('USER_CAMPAIGN',$data))
        {
            echo "INSERTION IN USER_CAMPAIGN FAILED";
            return false;
        }
        return true;
    }

    public function update_campaign($campaignid,$title,$description,$duration,$document='')
    {
        /*
         * $document is disabled for the time being
         * To enable the steps are described in earlier.
         *
         * upload the document and save it in a place defiined earlier and save its root path
         * get the current path string(root path)
         * append ';' in it
         * then append another string
         * finally put it on the database
         */
        $query = "UPDATE BIODIVERSITY.CAMPAIGN
                        SET CAMPAIGN.TITLE='$title',CAMPAIGN.DESCRIPTION='$description',CAMPAIGN.FINISHTIME=to_date('$duration','dd-mm-yyyy')
                        WHERE CAMPAIGN.CAMPAIGNID=$campaignid";

        if(!$result = $this->db->query($query))
        {
            echo "UPDATE OPERATION FAILED,EITHER THE PROJECT IS EXPIRED OR YOU DON'T HAVE <br/> PERMISSION";
            return false;
        }
        return true;
    }

    public function delete_campaign($campaignid)
    {
        /*
         * Delete From Researcher Project so that only that user is excluded from circle
         * Trigger Must be written so that if no one else has been associated with this campaign then The Entity
           (Corresponding Project Table Must be deleted)
         * return whether operation was successful or not
         */
        $userid = $this->session->userdata('userid');
        $query = "DELETE FROM BIODIVERSITY.USER_CAMPAIGN
                        WHERE
                       USER_CAMPAIGN.CAMPAIGNID=$campaignid
                        AND
                        USER_CAMPAIGN.USERID = $userid";

        if(!$result = $this->db->query($query))
        {
            return  false;
        }

        $query = "SELECT count(*) COUNT FROM BIODIVERSITY.USER_CAMPAIGN
                                  WHERE USER_CAMPAIGN.CAMPAIGNID=$campaignid";

        if(!$result = $this->db->query($query))
        {
     
        }
        $result = $result->row_array();
        if($result['COUNT']==0)
        {
            $query = "DELETE FROM BIODIVERSITY.CAMPAIGN WHERE CAMPAIGN.CAMPAIGNID = $campaignid";
            if(!$this->db->query($query))
            {
                return false;
            }
        }
        
        return true;

    }

    public function join_campaign($campaignid)
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
                        'CAMPAIGNID'=>$campaignid
                     );

        if(!$this->db->insert('USER_CAMPAIGN',$data))
        {
            /*
             * Database Error
             */
            return false;
        }
        return true;
    }

    public function get_campaign_mates($campaignid)
    {
        /*
         *
         */
        $userid  = $this->session->userdata('userid');
       $query = "SELECT BIODIVERSITY.COMMON_USER.USERNAME FROM BIODIVERSITY.COMMON_USER
                            INNER JOIN BIODIVERSITY.USER_CAMPAIGN
                                ON
                                BIODIVERSITY.COMMON_USER.USERID= BIODIVERSITY.USER_CAMPAIGN.USERID
                                    WHERE
                                    BIODIVERSITY.USER_CAMPAIGN.CAMPAIGNID = $campaignid
                                    AND BIODIVERSITY.USER_CAMPAIGN.USERID <> $userid

               ";

       if(!$result = $this->db->query($query))
       {
           echo "NO MEMBERS FOUND";
       }

       return $result->result_array();


    }

    public function get_notifications(){}

}
?>
