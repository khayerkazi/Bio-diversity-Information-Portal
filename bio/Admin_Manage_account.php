<?php
session_start();
    if(isset($_SESSION['ADMINID'])==FALSE){
        header("Location: Login.php");
    }
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';

    

?>
<style type="text/css">
#Table{
	color: #666;
	text-align:center;
	background:#99C;
}
#apDiv2 {
	position:absolute;
	width:328px;
	height:334px;
	z-index:2;
	left: 44px;
	top: 131px;
}
#apDiv3 {
	position:absolute;
	width:200px;
	height:36px;
	z-index:3;
	left: 43px;
	top: 509px;
}
#apDiv4 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 471px;
	top: 134px;
}
</style>


<div class="Top_Table" id="apDiv1" style="position:absolute; width:535px; height:92px; z-index:1; left: 29px; top: 18px;">
  <table width="583" height="91" border="2" cellpadding="2" cellspacing="1" id="Table">
    <tr>
      <td width="62" height="85"><a href="http://localhost:9090/biodiversity/index.php/common_user/common_user/">Main Site</a></td>
      <td width="66"><a href="Admin_me.php">Profile</a></td>
      <td width="68"><p><a href="Admin_Manage_account.php">Create Account</a></p></td>
      <td width="71"><a href="Search.php">Search</a></td>
      <td width="78"><a href="Species_list.php">Pages</a></td>
      <td width="103"><a href="Admin_Approval.php">For Approval</a></td>
      <td width="81"><a href="Login.php">Log Out</a></td>
    </tr>
  </table>
</div>

<div id="apDiv2">
<form action="Admin_Manage_account.php" method="post">
  <table width="327" height="300" border="1" cellpadding="2" cellspacing="1" id="Table">
    <tr>
      <td colspan="2"><h2>Create New Account</h2></td>
    </tr>
    <tr>
      <td width="176">Name(optional)</td>
      <td width="218"><input type="text" name="NAME" id="textfield"
                             value="<?php
                             if(isset($_POST['NAME']))
                                     echo $_POST['NAME'];
                             else echo '';
                             ?>"
      ></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><input type="text" name="EMAIL" id="textfield2"
                  value="<?php
                             if(isset($_POST['EMAIL']))
                                     echo $_POST['EMAIL'];
                             else echo '';
                 ?>"
                 ></td>
    </tr>
    <tr>
      <td>User Name</td>
      <td><input type="text" name="USERNAME" id="textfield3"
                 value="<?php
                             if(isset($_POST['USERNAME']))
                                     echo $_POST['USERNAME'];
                             else echo '';
                 ?>"
                 ></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="pass" name="PASSWORD" id="textfield4"
                 value="<?php
                             if(isset($_POST['PASSWORD']))
                                     echo $_POST['PASSWORD'];
                             else echo '';
                 ?>"
                 ></td>
    </tr>
    <tr>
      <td height="36">Password(confirm)</td>
      <td><input type="pass" name="PASSWORDCONFIRM" id="textfield5"
                 value="<?php
                             if(isset($_POST['PASSWORDCONFIRM']))
                                     echo $_POST['PASSWORDCONFIRM'];
                             else echo '';
                 ?>"
                 ></td>
    </tr>
    
    <tr>
      <td rowspan="2">Account type</td>
    </tr>
    <tr>
      <td row><input type="radio" name="radiobutton" value="0"<?php
                             if(isset($_POST['radiobutton']) && $_POST['radiobutton'] == 0)
                                     echo "Checked";
     ?>
                     >Data Entry Operator</td>
    </tr>
    
     <tr>
      <td>Address(optional)</td>
      <td><textarea name="ADDRESS" id="textarea" cols="30" rows="3"><?php
                             if(isset($_POST['ADDRESS']))
                                     echo $_POST['ADDRESS'];
                             else echo '';
                 ?></textarea></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="CREATE" value="Create Account..."></td>
    </tr>
    <tr>
      <td>Status</td>
      <td><?php

        //checking password
	if(isset($_POST["PASSWORD"]) && isset($_POST['PASSWORDCONFIRM']) &&  $_POST['PASSWORD'] == $_POST['PASSWORDCONFIRM']){

        //checking radiobuttons
        if(isset($_POST['radiobutton'])){
        
        //checking button press
        if(isset ($_POST["CREATE"])){
        //if the create button is pressed
         $var = rand(23,999);
            
        $result = ADD_NEW_ADMIN_OPERATOR($connect, $_POST['NAME'], $_POST['USERNAME'], $_POST['PASSWORD'], $_POST['EMAIL'], $_POST['ADDRESS'],$_POST['radiobutton'],$var++);
        
        if($result == 1)echo "Specified Account Created";
        else echo "<br /> Specified Account Creation Failed";

           }
        }
        else{
            echo "You Must Select a type Admin or Operator";
        }
     }
    else{
		echo "Confirmed Password Does't match";
	}
    ?></td>
    </tr>
     
  </table>
  </form>    
</div>
<?php
include_once 'includes\Close_connection.php';
?>
