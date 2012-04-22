<?php
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';

?>
<?php 
        //Assume that species id placed here from previous page
        $fid = $_POST['SID'];
        
        
        $family = GET_CLASSIFICATION_DETAIL($connect, "FAMILY", $fid);
        $order = GET_CLASSIFICATION_DETAIL($connect, "ORDER", $family['ORDERID']);
        $class = GET_CLASSIFICATION_DETAIL($connect, "CLASS", $order['CLASSID']);
        $phylum = GET_CLASSIFICATION_DETAIL($connect, "PHYLUM", $class['PHYLUMID']);
		
		$show = 0;
		/*************************************************/
		// u need 2 variable set to access this page properly
		// u have to declare a POST hidden form attribute with 
		// 2 variable named SID = 'GENUSID' & a SDESC with 
		//arbitrary value
		/************************************************/
?>
<style type="text/css">
#apDiv1 {
	position:absolute;
	width:222px;
	height:151px;
	z-index:1;
	left: 33px;
	top: 44px;
}
</style>

<a href="Search.php"> Link back to Search List</a>
<style type="text/css">
#apDiv2 {
	position:absolute;
	width:254px;
	height:189px;
	z-index:2;
	left: 119px;
	top: 128px;
}
#apDiv3 {
	position:absolute;
	width:591px;
	height:115px;
	z-index:3;
	left: 114px;
	top: 436px;
}
#apDiv4 {
	position:absolute;
	width:587px;
	height:63px;
	z-index:4;
	top: 18px;
	left: 113px;
}
</style>




<div id="apDiv1">
    <table width="583" height="91" border="2" cellpadding="2" cellspacing="1">
    <tr>
      <td width="62" height="85"><a href="http://localhost:9090/biodiversity/index.php/common_user/common_user/">Main Site</a></td>
      <td width="71"><a href="Search.php" target="_blank">Search</a></td>
      <td width="78"><a href="Species_list.php">Species List</a></td>

    </tr>
  </table>
  <table width="225" height="155" border="2" cellpadding="3" cellspacing="3">
    <tr>
      <td colspan="2">
  <table width="588" height="67" border="2"  >
    <tr>
      <td height="28">
        <h2 align="center"><?php 
	  	echo $family['NAME'];
	  ?></h2>
</td>
    </tr>
  </table>
</td>
    </tr>
    <tr>
      <td width="281"><form action="show_FAMILY.php" method="post">


  <table width="288" height="207" border="1" cellpadding="3" cellspacing="3">
    <tr>
      <td colspan="2"><h4 align="center">Classification</h4></td>
    </tr>
    <tr>
      <td width="51">kindom</td>
      <td width="157">Animalia</td>
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
		if($show == 1){
			echo "<td><input type='submit' name='SDESC' value='Desc'></td>";
		}
	  ?></td>
    </tr>
    
  </table>

      <input type='hidden' name='SID' value='<?php 
echo $_POST['SID'];
?>'>
</form></td>
      <td width="296">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><?PHP
	if(isset($_POST['PDESC']))
		echo "PHYLUM DESCRIPTION:<br>".$phylum['DESCRIPTION']."<br/>"."->LAST MODIFIED(".$phylum['LASTMODIFIED'].")";
	else if(isset($_POST['CDESC']))
		echo "CLASS DESCRIPTION:<br/>".$class['DESCRIPTION']."<br/>"."->LAST MODIFIED(".$class['LASTMODIFIED'].")";
	else if(isset($_POST['ODESC']))
		echo "ORDER DESCRIPTION:<br/>".$order['DESCRIPTION']."<br/>"."->LAST MODIFIED(".$order['LASTMODIFIED'].")";
	else if(isset($_POST['SDESC']))
		echo "FAMILY DESCRIPTION:<br/>".$family['DESCRIPTION']."<br/>"."->LAST MODIFIED(".$family['LASTMODIFIED'].")";
	
?></td>
    </tr>
  </table>
</div>
<?php
include_once 'includes\Close_connection.php';
?>