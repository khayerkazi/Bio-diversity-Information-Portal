<?php
session_start();
    if(isset($_SESSION['ADMINID'])==FALSE){
        header("Location: Login.php");
    }
?>
<?php
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';
    
session_start();
?>
<style type="text/css">
#Table{
	color:#999;
	text-align:center;
}
#apDiv2 {
	position:absolute;
	width:399px;
	height:283px;
	z-index:2;
	left: 23px;
	top: 237px;
}
#apDiv3 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 446px;
	top: 234px;
}
#apDiv4 {
	position:absolute;
	width:541px;
	height:115px;
	z-index:4;
	left: 55px;
	top: 227px;
}
</style>



<div class="Top_Table" id="apDiv1" style="position:absolute; width:535px; height:92px; z-index:1; left: 30px; top: 16px;">
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<div id="apDiv4">
  <table width="784" height="117" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="383">
    <form  action="Admin_me.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
  <table width="383" height="264" border="2" cellpadding="3" cellspacing="3">
    <tr>
      <td width="173">Name ::</td>
      <td width="192"><?php
      //this is a php tag
      
      $admin = GET_ADMIN_INFO($connect,$_SESSION['ADMINID']);//change admin id here
      if(isset ($_POST["EDIT"])){
      echo "<input type='text' maxlength='30' size='30' name='NAME' value=\"{$admin['NAME']}\">";

      }
      else
          echo $admin['NAME'];
      ?></td>
    </tr>
    <tr>
      <td>Email ::</td>
      <td><?php
      //this is a php tag
      if(isset ($_POST["EDIT"])){
      echo "<input type='text' maxlength='30' size='30' name='EMAIL' value=\"{$admin['EMAIL']}\">";

      }
      else
          echo $admin['EMAIL'];
      ?></td>
    </tr>
    <tr>
      <td>Address ::</td>
      <td><?php
      //this is a php tag
      if(isset ($_POST["EDIT"])){
      echo "<textarea name='ADDRESS' cols='45' rows='5'>{$admin['ADDRESS']}</textarea>";

      }
      else
          echo $admin['ADDRESS'];
      ?></td>
    </tr>
    <tr>
      <td>User Name ::</td>
      <td><?php
      //this is a php tag
      if(isset ($_POST["EDIT"])){
      echo "<input type='text' maxlength='30' size='30' name='USERNAME' value=\"{$admin['USERNAME']}\">";

      }
      else
          echo $admin['USERNAME'];
      ?></td>
    </tr>
    <tr>
      <td>Password ::</td>
      <td><?php
      //this is a php tag
      if(isset ($_POST["EDIT"])){
      echo "<input type='text' maxlength='30' size='30' name='PASS' value=\"{$admin['PASSWORD']}\">";

      }
      else
          echo $admin['PASSWORD'];
      ?></td>
    </tr>
    <tr>
      <td>Designation Date ::</td>
      <td><?php
      //this is a php tag
          echo $admin['DESIGNATIONDATE'];
      ?></td>
    </tr>
    <tr>
      <td><?php
          
          if(isset ($_POST["EDIT"])){
			  echo "Choose Avatar:</td>
			  <td>
			 	<input name='uploadedfile' type='file' />
			  </td>
			  </tr>";
			  
              echo "<tr><td><input type='submit' name='SAVE'  value='Save' /></td></tr>";
          }
          else echo "<tr><td><input type='submit' name='EDIT'  value='Edit...' /></td></tr>";
        ?>
      
  </table>
</form>
    <?php
    //update are done here
    if(isset($_POST["SAVE"])){
		//update pics
		if(isset($_FILES['uploadedfile'])){
$target_path = "uploads/Admin/";
$target_path = $target_path .(string)$_SESSION['ADMINID'].".jpg";

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
} else{
    echo "There was an error uploading the file, please try again!";
}
		}
		//update data
        UPDATE_ADMIN($connect, $_POST["NAME"], $_POST["EMAIL"], $_POST["ADDRESS"], $_POST["USERNAME"], $_POST["PASS"], 5);//change admin id here
    }
    ?>
</td>
      <td width="379"><img src='<?php
echo "uploads/Admin/".(string)($_SESSION['ADMINID']).".JPG";	
?>' width="371" height="315" ></td>
    </tr>
  </table>
</div>
<p>&nbsp;</p>
<h1>This Is Me Page</h1>

<p>&nbsp;</p>
<?php
include_once 'includes\Close_connection.php';
?>
