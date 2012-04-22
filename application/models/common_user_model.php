<?php


class Common_user_model extends CI_Model
{

    public function  __construct() {
        parent::__construct();
    }

    public function insert($username,$password,$name,$address,$email,$photo='./uploads/')
    {
        $password = md5($password);
       
        $this->db->set('USERID',null);
        $this->db->set('USERNAME',$username);
        $this->db->set('PASSWORD',$password);
        $this->db->set('NAME',$name);
        $this->db->set('ADDRESS',$address);
        $this->db->set('EMAIL',$email);
        $this->db->set('PHOTO',$photo);

        if(!$this->db->insert('COMMON_USER'))
        {
             //echo $this->db->error_message();
             return false;
        }
         else
         {
             return true;
         }
    }
    
    /*
     *  Update return false  if the user doesn't exists and for some reason the update fails
     */

    public function update($username,$password,$name,$address,$email,$photo)
    {
           $userid = $this->session->userdata('userid');
           $password = md5($password);
           $data = array(
                            'USERNAME'=>$username,
                            'PASSWORD'=>$password,
                            'NAME'=>$name,
                            'ADDRESS'=>$address,
                            'EMAIL'=>$email,
                            'PHOTO'=>$photo
                        );
           $old = $this->db->get_where('COMMON_USER',array('USERID'=>$userid));

           if($old->num_rows()>0)
           {
               /*
                *  assuming the image is uploaded in controller
                *  Get  the path f old image from $old->photo ; which have to be done here
                *  delete the image
                *  then just updating
                */

               $this->db->where('USERID',$userid);
               if(!$this->db->update('COMMON_USER',$data))
               {
                     return false;
               }
               return true;

                
           }
           else
           {
               return false;
           }
    }

    public function get_user_info()
    {
         $userid = $this->session->userdata('userid');
         $result = $this->db->query("SELECT * FROM biodiversity.common_user WHERE userid= $userid");//,array('userid'=>$userid));
         
         return $result->row_array();
        
         
    }

    public function login($username,$password)
     {
         $password = md5($password);

         $query = "SELECT userid FROM common_user WHERE username='$username' AND password ='$password'";
         if(!$result = $this->db->query($query))//get_where('common_user',array('username'=>$username,'password'=>$password)))
         {
             return false;
         }
         if($result->num_rows()>0)
         {
             $user = $result->row();
             $this->session->set_userdata('userid',$user->USERID);
             return true;
         }
         return false;
     }

     public function is_logged_in()
     {
         if(!$this->session->userdata('userid'))
         {
              return false;
         }
         return true;
     }


     public function get_username()
     {
         $result = $this->get_user_info();
         return $result['USERNAME'];
     }
     public function get_address()
     {
         $result = $this->get_user_info();
         return $result['ADDRESS'];
     }

     public function get_name()
     {
        $result = $this->get_user_info();
        return $result['NAME'];
     }

     public function get_email()
     {
         $result = $this->get_user_info();
         return $result['EMAIL'];
     }

     public function get_photo()
     {
         $result =  $this->get_user_info();
         return $result['PHOTO'];
     }
     
     public function logout()
     {
         if(!$this->is_logged_in())
         {
             return ;
         }
         $this->session->unset_userdata('userid');
     }

}


?>
