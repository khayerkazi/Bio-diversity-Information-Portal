<?php
session_start();
    if(isset($_SESSION['ADMINID'])==FALSE){
        header("Location: Login.php");
    }
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';

?>
<?php
    if(isset ($_POST['PRESS'])){
        echo "Preview ID was = {$_POST['APPROVEID']}";
    }
    //Retrieving data from the tables
    $species=FETCH_DETAILS($connect, "SPECIES",$_POST['SID']);
    $genus=FETCH_DETAILS($connect, "GENUS",$species['GENUSID']);
    $family=FETCH_DETAILS($connect, "FAMILY",$genus['FAMILYID']);
    $order=FETCH_DETAILS($connect, "ORDER",$family['ORDERID']);
    $class=FETCH_DETAILS($connect, "CLASS",$order['CLASSID']);
    $phylum=FETCH_DETAILS($connect, "PHYLUM",$class['PHYLUMID']);
    $operator =  GET_OPERATOR_INFO($connect, $_POST['OPID']);

?>
<style type="text/css">
#Table{
	color: #666;
	text-align:center;
	background:#99C;
}
#apDiv1 {
	position:absolute;
	width:457px;
	height:634px;
	z-index:1;
	left: 18px;
	top: 200px;
}
#apDiv2 {
	position:absolute;
	width:298px;
	height:179px;
	z-index:2;
	left: 513px;
	top: 200px;
}
#apDiv3 {
	position:absolute;
	width:304px;
	height:216px;
	z-index:3;
	left: 513px;
	top: 464px;
}
</style>
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

<FORM ACTION="admin_approval_preview.php" method="POST">
<div id="apDiv1">
  <table width="482" height="767" border="2" cellpadding="3" cellspacing="3">
    <tr>
      <td height="66" colspan="2"><h2 align="center">Waiting 4 Approval (preview)</h2></td>
    </tr>
    <tr>
      <td width="69" rowspan="2">Phylum::</td>
      <td width="384" height="35">Name:
        <input type="text" name="PNAME" id="textfield" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> value="<?php
        		ECHO $phylum['NAME'];
			?>">
        </td>
    </tr>
    <tr>
      <td height="56"><div>Descr
        
          <textarea name="PDESC" id="textarea" cols="45" rows="3" 				<?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?>><?php
		  ECHO $phylum['DESCRIPTION'];
          ?></textarea>
      </div></td>
    </tr>
    <?php // here is the new row?>
  <tr>
    	<td rowspan="2">Class</td>
     <td width="384" height="35">Name:
       <input type="text" name="CNAME" id="textfield2" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> value="<?php
	   ECHO $class['NAME'];
       ?>" ></td>
    </tr>
    <tr>
      <td height="54">Descr
        <textarea name="CDESC" id="textarea2" cols="45" rows="3" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> ><?php
        ECHO $class['DESCRIPTION'];
		?></textarea></td>
    </tr>
     <?php // here is the new row?>
    <tr>
    	<td rowspan="2">Order</td>
     <td width="384" height="35">Name:
       <input type="text" name="ONAME" id="textfield3" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> value="<?php
	   ECHO $order['NAME'];
       ?>" ></td>
    </tr>
    <tr>
      <td height="51">Descr
        <textarea name="ODESC" id="textarea3" cols="45" rows="3" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> ><?php
		ECHO $order['DESCRIPTION'];
        ?></textarea></td>
    </tr>
     <?php // here is the new row?>
    <tr>
    	<td rowspan="2">Family</td>
     <td width="384" height="38">Name:
       <input type="text" name="FNAME" id="textfield4" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> value="<?php
	   ECHO $family['NAME'];
       ?>"></td>
    </tr>
    <tr>
      <td height="58">Descr
        <textarea name="FDESC" id="textarea4" cols="45" rows="3" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> ><?php
        	ECHO $family['DESCRIPTION'];
		?></textarea></td>
    </tr>
     <?php // here is the new row?>
    <tr>
    	<td rowspan="2">Genus</td>
     <td width="384" height="41">Name:
       <input type="text" name="GNAME" id="textfield5" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> value="<?php
	   ECHO $genus['NAME'];
       ?>" ></td>
    </tr>
    <tr>
      <td height="56">Descr
        <textarea name="GDESC" id="textarea5" cols="45" rows="3" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> ><?php
		ECHO $genus['DESCRIPTION'];
        ?></textarea></td>
    </tr>
     <?php // here is the new row?>
    <tr>
    	<td rowspan="2">Species</td>
     <td width="384" height="39">Name:
       <input type="text" name="SNAME" id="textfield6" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> value="<?php
	   ECHO $species['NAME'];
       ?>" ></td>
    </tr>
    <tr>
      <td height="45">Descr
        <textarea name="SDESC" id="textarea6" cols="45" rows="3" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> ><?php
        ECHO $species['DESCRIPTION'];
		?></textarea></td>
    </tr>
     <?php // here is the new row?>
    <tr>
    	<td>General name:</td>
        <td><input type="text" name="textfield7" id="textfield7" <?PHP
        	if(isset($_POST['CHANGE']) == FALSE)
			ECHO "readonly='readonly'";
		?> value="<?php
		ECHO $species['COMMONNAME'];
        ?>"></td>
    </tr>
   <?php // here is the new row?>
   <tr>
        <td height="26" colspan="2" align="center"><?php
        if(isset($_POST['CHANGE']) == FALSE && isset($_POST['APPROVE']) == false)
		ECHO "<input type='submit' name='CHANGE' id='button' value='Change'>";
        if(isset($_POST['APPROVE'])){
		//approvation code place here
		
		/*step 1 make species visible*/
		$query = "UPDATE BIODIVERSITY.SPECIES SET BIODIVERSITY.SPECIES.VISIBLE='1'";
                $query .= " WHERE BIODIVERSITY.SPECIES.SPECIESID={$_POST['SID']}";
                $res=oci_parse($connect, $query);
                echo "$query";
                oci_execute($res);

                /*step 2 delete potential table entry*/
                $query="DELETE FROM BIODIVERSITY.POTENTIALDOCS WHERE ";
                $query.="BIODIVERSITY.POTENTIALDOCS.POTENTIALID={$_POST['APPROVEID']}";
                $res=oci_parse($connect, $query);
                oci_execute($res);

                //now setting the updates
                UPDATE_CLASSIFICATION($connect,$phylum['PHYLUMID'],$_POST['PNAME'],$_POST['PDESC'],"PHYLUM");
                UPDATE_CLASSIFICATION($connect, $class['CLASSID'],$_POST['CNAME'],$_POST['CDESC'], "CLASS");
		UPDATE_CLASSIFICATION($connect, $order['ORDERID'],$_POST['ONAME'],$_POST['ODESC'], "ORDER");
                UPDATE_CLASSIFICATION($connect, $family['FAMILYID'],$_POST['FNAME'],$_POST['FDESC'], "FAMILY");
                UPDATE_CLASSIFICATION($connect, $genus['GENUSID'],$_POST['GNAME'],$_POST['GDESC'], "GENUS");
                UPDATE_CLASSIFICATION($connect, $species['SPECIESID'],$_POST['SNAME'],$_POST['SDESC'], "SPECIES");
                


                }
        
        else echo "<input type='submit' name='APPROVE' id='button' value='Approve'>";
		?>
        </td>
   </tr>
    
  </table>
</div>

<input type='HIDDEN' name='APPROVEID' value="<?PHP ECHO $_POST['APPROVEID']; ?>"/>
    <input type='HIDDEN' name='SID' value="<?PHP ECHO $_POST['SID']; ?>"/>
    <input type='HIDDEN' name='OPID' value="<?PHP ECHO $_POST['OPID']; ?>"/>
</FORM>



<form action="Admin_approval_preview.php" method="POST">
<div id="apDiv2">
  <table width="308" height="178" border="2" cellpadding="3" cellspacing="3">
    <tr>
      <td colspan="2"><h2 align="center">Entrier Details</h2></td>
    </tr>
    <tr>
      <td width="110">Name:</td>
      <td width="169"><?php echo $operator['NAME']; ?></td>
    </tr>
    <tr>
      <td>Email:</td>
      <td><?php echo $operator['EMAIL']; ?></td>
    </tr>
    <tr>
      <td height="34">Address:</td>
      <td><?php echo $operator['ADDRESS']; ?></td>
    </tr>
    <tr>
      <td height="34">DEOID:</td>
      <td><?php echo $operator['DOEID']; ?></td>
    </tr>
    <tr>
      <td height="34">DesignationDate:</td>
      <td><?php echo $operator['DESIGNATIONDATE']?></td>
    </tr>
  </table>
</div>
</form>

<div id="apDiv3">
  <table width="314" height="217" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td height="172"><Img src='<?php
      echo "uploads/species/".$species['SPECIESID'].".JPG";
	  ?>' width="314" height="220"></td>
    </tr>
    <tr>
      <td><p align="center">Species pic</p></td>
    </tr>
  </table>
</div>

<?php
include_once 'includes\Close_connection.php';
?>