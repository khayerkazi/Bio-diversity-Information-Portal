<?php
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';
    session_start();
?>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:553px;
	height:892px;
	z-index:1;
	left: 70px;
	top: 102px;
}
</style>
<form action="Enter_New_Data.php" method="post" enctype="multipart/form-data">
<div id="apDiv1">
    
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

  <table width="554" height="704" border="2" cellpadding="3" cellspacing="3">
    <tr>
      <td height="66" colspan="2"><h2 align="center">Enter A New Information
        
      </h2></td>
    </tr>
    <tr>
      <td width="93" rowspan="2">Phylum::</td>
      <td width="344" height="35">Name:
        <input type="text" name="PNAME" id="textfield"></td>
    </tr>
    <tr>
      <td height="56"><div>Descr
        
          <textarea name="PDESC" id="textarea" cols="45" rows="5"></textarea>
      </div></td>
    </tr>
    <?php // here is the new row?>
  <tr>
    	<td rowspan="2">Class</td>
     <td width="344" height="35">Name:
       <input type="text" name="CNAME" id="textfield2"></td>
    </tr>
    <tr>
      <td height="54">Descr
        <textarea name="CDESC" id="textarea2" cols="45" rows="5"></textarea></td>
    </tr>
     <?php // here is the new row?>
    <tr>
    	<td rowspan="2">Order</td>
     <td width="344" height="35">Name:
       <input type="text" name="ONAME" id="textfield3"></td>
    </tr>
    <tr>
      <td height="51">Descr
        <textarea name="ODESC" id="textarea3" cols="45" rows="5"></textarea></td>
    </tr>
     <?php // here is the new row?>
    <tr>
    	<td rowspan="2">Family</td>
     <td width="344" height="38">Name:
       <input type="text" name="FNAME" id="textfield4"></td>
    </tr>
    <tr>
      <td height="58">Descr
        <textarea name="FDESC" id="textarea4" cols="45" rows="5"></textarea></td>
    </tr>
     <?php // here is the new row?>
    <tr>
    	<td rowspan="2">Genus</td>
     <td width="344" height="41">Name:
       <input type="text" name="GNAME" id="textfield5"></td>
    </tr>
    <tr>
      <td height="56">Descr
        <textarea name="GDESC" id="textarea5" cols="45" rows="5"></textarea></td>
    </tr>
     <?php // here is the new row?>
    <tr>
    	<td rowspan="2">Species</td>
     <td width="344" height="39">Name:
       <input type="text" name="SNAME" id="textfield6"></td>
    </tr>
    <tr>
      <td height="45">Descr
        <textarea name="SDESC" id="textarea6" cols="45" rows="5"></textarea></td>
    </tr>
     <?php // here is the new row?>
    <tr>
    	<td>General name:</td>
        <td><input type="text" name="COMMONNAME" id="textfield7"></td>
    </tr>
    <tr>
       <td> <!-- Imaging HTML-->
        <input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
Choose a Pic to upload: </td><td>
<input name="uploadedfile" type="file" /><br /></td>
    </tr>
   <?php // here is the new row?>
   <tr>
        <td colspan="2" align="center"><input type="submit" name="ENTER_NEW" id="button" value="Submit"></td>
   </tr>
    
  </table>
  
</div>
</form>
<?php	
	if(isset($_POST['ENTER_NEW'])){//when the submit button clicked
            
            if(GET_CLASSIFICATION_ID($connect,"PHYLUM",$_POST['PNAME']) == -1)//checking
                ENTER_NEW_CLASSIFICATION ($connect, $_POST['PNAME'], $_POST['PDESC'], -1,"PHYLUM");//entry

                
            if(GET_CLASSIFICATION_ID($connect, "CLASS", $_POST['CNAME']) == -1){//checking
                $fk = GET_CLASSIFICATION_ID($connect, "PHYLUM" ,$_POST['PNAME']);
                ENTER_NEW_CLASSIFICATION ($connect, $_POST['CNAME'], $_POST['CDESC'], $fk,"CLASS");//entry
                
            }

            if(GET_CLASSIFICATION_ID($connect,"ORD",$_POST['ONAME'])== -1){//checking
                $fk = GET_CLASSIFICATION_ID($connect, "CLASS" ,$_POST['CNAME']);
                ENTER_NEW_CLASSIFICATION($connect, $_POST['ONAME'], $_POST['ODESC'], $fk, "ORD");
                
            }

            if(GET_CLASSIFICATION_ID($connect, "FAMILY", $_POST['FNAME']) == -1){
                $fk = GET_CLASSIFICATION_ID($connect, "ORD", $_POST['ONAME']);
                ENTER_NEW_CLASSIFICATION($connect,$_POST['FNAME'],$_POST['FDESC'], $fk, "FAMILY");
                
            }
            
            if(GET_CLASSIFICATION_ID($connect, "GENUS", $_POST['GNAME']) == -1){
                $fk = GET_CLASSIFICATION_ID($connect, "FAMILY", $_POST['FNAME']);
                ENTER_NEW_CLASSIFICATION($connect,$_POST['GNAME'],$_POST['GDESC'], $fk, "GENUS");
                
            }

            if(GET_CLASSIFICATION_ID($connect, "SPECIES", $_POST['SNAME']) == -1){
                $fk = GET_CLASSIFICATION_ID($connect, "GENUS", $_POST['GNAME']);
                ENTER_NEW_CLASSIFICATION($connect,$_POST['SNAME'],$_POST['SDESC'], $fk, "SPECIES",$_POST['COMMONNAME']);
                
                
            }
                $SID = GET_CLASSIFICATION_ID($connect, "SPECIES", $_POST['SNAME']);
            //entry in the table is complete
            //now time to fullfill the potential table
            INSERT_INTO_PO_TABLE($connect,$_SESSION['DEOID'], $SID);//here entry id form session need to be restore

            //****************MUNNU PORTION*************************
			
if(isset($_FILES['uploadedfile'])){
$target_path = "uploads/species/";
$target_path = $target_path .(string)(GET_CLASSIFICATION_ID($connect, "SPECIES", $_POST['SNAME'])).".jpg";

if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
} else{
    echo "There was an error uploading the file, please try again!";
}
            //**************************************
            
	}
}
?>
<?php
include_once 'includes\Close_connection.php';
?>