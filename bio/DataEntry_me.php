<?php
    include_once 'includes\functions.php';

   include_once 'includes\Set_connection.php';
session_start();
?>


<style type="text/css">
#apDiv1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 29px;
	top: 72px;
}
#apDiv2 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:2;
	left: 459px;
	top: 72px;
}
#apDiv3 {
	position:absolute;
	width:200px;
	height:288px;
	z-index:3;
	left: 12px;
	top: 57px;
}
</style>

<a href="Enter_new_data.php">Link to Enter_new_data.php...</a>




<div id="apDiv3">
    <table width="583" height="91" border="2" cellpadding="2" cellspacing="1">
    <tr>
      <td width="62" height="85"><a href="http://localhost:9090/biodiversity/index.php/common_user/common_user/">Main Site</a></td>
      <td width="66"><a href="DataEntry_me.php">Profile</a></td>
      <td width="71"><a href="Search.php">Search</a></td>
      <td width="78"><a href="Species_list.php">Pages</a></td>
      <td width="103"><a href="Enter_New_Data.php">New Document</a></td>
      <td width="81"><a href="Login.php">Log Out</a></td>
    </tr>
  </table>
  <table width="200" height="115" border="2" cellpadding="3" cellspacing="3">
    <tr>
      <td width="79"><form  action="DataEntry_me.php" method="post" enctype="multipart/form-data">
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
  <table width="396" height="259" border="2" cellpadding="3" cellspacing="3">
    <tr>
      <td width="173">Name ::</td>
      <td width="192"><?php
      //this is a php tag

      $operator = GET_OPERATOR_INFO($connect,$_SESSION['DEOID']);//change operator id here
      if(isset ($_POST["EDIT"])){
      echo "<input type='text' maxlength='30' size='30' name='NAME' value=\"{$operator['NAME']}\">";
		}
      else
          echo $operator['NAME'];
      ?></td>
    </tr>
    <tr>
      <td>Email ::</td>
      <td><?php
      //this is a php tag
      if(isset ($_POST["EDIT"])){
      echo "<input type='text' maxlength='30' size='30' name='EMAIL' value=\"{$operator['EMAIL']}\">";

      }
      else
          echo $operator['EMAIL'];
      ?></td>
    </tr>
    <tr>
      <td>Address ::</td>
      <td><?php
      //this is a php tag
      if(isset ($_POST["EDIT"])){
      echo "<textarea name='ADDRESS' cols='45' rows='5'>{$operator['ADDRESS']}</textarea>";

      }
      else
          echo $operator['ADDRESS'];
      ?></td>
    </tr>
    <tr>
      <td>User Name ::</td>
      <td><?php
      //this is a php tag
      if(isset ($_POST["EDIT"])){
      echo "<input type='text' maxlength='30' size='30' name='USERNAME' value=\"{$operator['USERNAME']}\">";

      }
      else
          echo $operator['USERNAME'];
      ?></td>
    </tr>
    <tr>
      <td>Password ::</td>
      <td><?php
      //this is a php tag
      if(isset ($_POST["EDIT"])){
      echo "<input type='text' maxlength='30' size='30' name='PASS' value=\"{$operator['PASSWORD']}\">";

      }
      else
          echo $operator['PASSWORD'];
      ?></td>
    </tr>
    <tr>
      <td>Designation Date ::</td>
      <td><?php
      //this is a php tag
          echo $operator['DESIGNATIONDATE'];
      ?></td>
    </tr>
    <tr>
      <td colspan="1"><?php
          
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
      </tr>
  </table>
</form>
<?php
    //update are done here
    if(isset($_POST["SAVE"])){
		//update pics
				if(isset($_FILES['uploadedfile'])){
		$target_path = "uploads/Operator/";
$target_path = $target_path .(string)$_SESSION['DEOID'].".jpg";
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
} else{
    echo "There was an error uploading the file, please try again!";
}
				}
		//update data
        UPDATE_OPERATOR($connect, $_POST["NAME"], $_POST["EMAIL"], $_POST["ADDRESS"], $_POST["USERNAME"], $_POST["PASS"], 22);//change operator id here
    }
    ?></td>
      <td width="92"><img src='<?php
echo "uploads/Operator/".(string)($_SESSION['DEOID']).".JPG";	
?>' width="309" height="242" ></td>
    </tr>
  </table>
</div>
<?php
include_once 'includes\Close_connection.php';
?>