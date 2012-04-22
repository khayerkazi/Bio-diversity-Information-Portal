<?php
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';

?>
<?php 
        //Assume that species id placed here from previous page
        $pid = $_POST['SID'];  
        $phylum = GET_CLASSIFICATION_DETAIL($connect, "PHYLUM", $pid);
		
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
	width:200px;
	height:115px;
	z-index:1;
	left: 69px;
	top: 91px;
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



<?php
include_once 'includes\Close_connection.php';
?>
<div id="apDiv1">
    <table width="583" height="91" border="2" cellpadding="2" cellspacing="1">
    <tr>
      <td width="62" height="85"><a href="http://localhost:9090/biodiversity/index.php/common_user/common_user/">Main Site</a></td>
      <td width="71"><a href="Search.php" target="_blank">Search</a></td>
      <td width="78"><a href="Species_list.php">Species List</a></td>

    </tr>
  </table>
  <table width="200" height="115" border="2" cellpadding="3" cellspacing="3">
    <tr>
      <td colspan="2">
  <table width="588" height="67" border="2"  >
    <tr>
      <td height="28"><div align="center">
        <h2><?php 
	  	echo $phylum['NAME'];
	  ?></h2>
      </div></td>
    </tr>
  </table>
</td>
    </tr>
    <tr>
      <td width="278"><form action="show_PHYLUM.php" method="post">


  <table width="281" height="117" border="1" cellpadding="3" cellspacing="3">
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
	  ?></td>
    </tr>
        
  </table>

<input type='hidden' name='SID' value='<?php 
echo $_POST['SID'];
?>'>
</form></td>
      <td width="299">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="2"><?PHP
		echo "PHYLUM DESCRIPTION:<br>".$phylum['DESCRIPTION']."<br/>"."->LAST MODIFIED(".$phylum['LASTMODIFIED'].")";
	
	
?></td>

    </tr>
  </table>
</div>
