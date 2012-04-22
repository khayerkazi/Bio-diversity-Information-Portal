<?php
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';

?>
<?php 
        //Assume that species id placed here from previous page
        $sid = $_POST['SID'];
        $species = GET_CLASSIFICATION_DETAIL($connect, "SPECIES", $sid);
        $genus = GET_CLASSIFICATION_DETAIL($connect, "GENUS", $species['GENUSID']);
        $family = GET_CLASSIFICATION_DETAIL($connect, "FAMILY", $genus['FAMILYID']);
        $order = GET_CLASSIFICATION_DETAIL($connect, "ORDER", $family['ORDERID']);
        $class = GET_CLASSIFICATION_DETAIL($connect, "CLASS", $order['CLASSID']);
        $phylum = GET_CLASSIFICATION_DETAIL($connect, "PHYLUM", $class['PHYLUMID']);
		
		$show = 0;
		/*************************************************/
		// u need 2 variable set to access this page properly
		// u have to declare a POST hidden form attribute with 
		// 2 variable named SID = 'SPECIESID' & a SDESC with 
		//arbitrary value
		/************************************************/
?>
<style type="text/css">
#apDiv5 {
	position:absolute;
	width:611px;
	height:68px;
	z-index:2;
	left: 151px;
	top: 39px;
}
#apDiv4 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:3;
	left: 160px;
	top: 191px;
}
#apDiv2 {
	position:absolute;
	width:615px;
	height:115px;
	z-index:4;
	left: 140px;
	top: 506px;
}
#apDiv3 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:5;
	left: 153px;
	top: 77px;
}
</style>

<table width="583" height="91" border="2" cellpadding="2" cellspacing="1">
    <tr>
      <td width="62" height="85"><a href="http://localhost:9090/biodiversity/index.php/common_user/common_user/">Main Site</a></td>
      <td width="71"><a href="Search.php" target="_blank">Search</a></td>
      <td width="78"><a href="Species_list.php">Species List</a></td>

    </tr>
  </table>
<style type="text/css">
</style>






<form action="show_species.php" method="post">
<input type='hidden' name='SID' value='<?php 
echo $_POST['SID'];
?>'>
<div id="apDiv3">
  <table width="638" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2"><table width="634" height="78" border="2"  >
    <tr>
      <td width="617" height="28"><div align="center">
        <h2>
          <?php 
	  	echo $species['COMMONNAME'];
	  ?>
        </h2>
      </div></td>
    </tr>
    <tr>
      <td height="26"><div align="center">
        <p>
          <?php 
	  	echo "<u>".$genus['NAME']."</u> <u>".$species['NAME']."</u>";
	  ?>
        </p>
      </div></td>
    </tr>
  </table></td>
    </tr>
    <tr>
      <td width="264" height="284"><table width="277" height="276" border="1" cellpadding="3" cellspacing="3">
    <tr>
    
      <td colspan="2"><h4 align="center">Classification</h4></td>
    </tr>
    <tr>
      <td width="58">kindom</td>
      <td width="192">Animalia</td>
    </tr>
    <tr>
      <td>phylum</td>
      <td><?php 
	  	echo $phylum['NAME'];
		if(isset($_POST['PDESC'])==false){
			echo "<td><input type='submit' name='PDESC' value='Desc'></td>";
		}else $show = 1;
	  ?></td>
    </tr>
    <tr>
      <td>class</td>
      <td><?php 
	  	echo $class['NAME'];
		if(isset($_POST['CDESC'])==false){
			echo "<td><input type='submit' name='CDESC' value='Desc'></td>";
		}else $show = 1;
	  ?></td>
    </tr>
    <tr>
      <td>order</td>
      <td><?php 
	  	echo $order['NAME'];
		if(isset($_POST['ODESC'])==false){
			echo "<td><input type='submit' name='ODESC' value='Desc'></td>";
		}else $show = 1;
	  ?></td>
    </tr>
    <tr>
      <td>family</td>
      <td><?php 
	  	echo $family['NAME'];
		if(isset($_POST['FDESC']) == false){
			echo "<td><input type='submit' name='FDESC' value='Desc'></td>";
		}else $show = 1;
	  ?></td>
    </tr>
    <tr>
      <td>genus:</td>
      <td><?php 
	  	echo $genus['NAME'];
		if(isset($_POST['GDESC']) == false){
			echo "<td><input type='submit' name='GDESC' value='Desc'></td>";
		}else $show = 1;
	  ?></td>
    </tr>
    <tr>
      <td>species</td>
      <td><?php 
	  	echo $species['NAME'];
		if($show == 1){
			echo "<td><input type='submit' name='SDESC' value='Desc'></td>";
		}
	  ?></td>
    </tr>
  </table></td>

      <td width="350"><img src='<?php
echo "uploads/species/".(string)($species['SPECIESID']).".JPG";	
?>' width="345" height="274" ></td>
    </tr>
    <tr>
      <td colspan="2">
    <table width="623" height="112" border="1" cellpadding="2" cellspacing="2">
      <tr>
         <?PHP
	if(isset($_POST['PDESC']))
		echo "<TD>Phylum DESCRIPTION:</TD><TD>".$phylum['DESCRIPTION']."</TD>"."<TR><TD>->LAST MODIFIED</TD><TD>(".$phylum['LASTMODIFIED'].")</TD></TR>";
	else if(isset($_POST['CDESC']))
		echo "<TD>Class DESCRIPTION:</TD><TD>".$class['DESCRIPTION']."</TD>"."<TR><TD>->LAST MODIFIED</TD><TD>(".$class['LASTMODIFIED'].")</TD></TR>";
	else if(isset($_POST['ODESC']))
		echo "<TD>Order DESCRIPTION:</TD><TD>".$order['DESCRIPTION']."</TD>"."<TR><TD>->LAST MODIFIED</TD><TD>(".$order['LASTMODIFIED'].")</TD></TR>";
	else if(isset($_POST['FDESC']))
		echo "<TD>Family DESCRIPTION:</TD><TD>".$family['DESCRIPTION']."</TD>"."<TR><TD>->LAST MODIFIED</TD><TD>(".$family['LASTMODIFIED'].")</TD></TR>";
	else if(isset($_POST['GDESC']))
		echo "<TD>Genus DESCRIPTION:</TD><TD>".$genus['DESCRIPTION']."</TD>"."<TR><TD>->LAST MODIFIED</TD><TD>(".$genus['LASTMODIFIED'].")</TD></TR>";
	else if(isset($_POST['SDESC']))
		echo "<TD>Species DESCRIPTION:</TD><TD>".$species['DESCRIPTION']."</TD>"."<TR><TD>->LAST MODIFIED</TD><TD>(".$species['LASTMODIFIED'].")</TD></TR>";
?>
      </tr>
    </table>
 </td>
    </tr>
  </table>
</div>
</form>


  
<?php
include_once 'includes\Close_connection.php';
?>