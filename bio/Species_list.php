<?php
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';

?>
<div id="apDiv1" style="position:absolute; width:451px; z-index:1; left: 87px; top: 26px;" #height:200px;
>
<table width="583" height="91" border="2" cellpadding="2" cellspacing="1">
    <tr>
      <td width="62" height="85"><a href="http://localhost:9090/biodiversity/index.php/common_user/common_user/">Main Site</a></td>
      <td width="71"><a href="Search.php" target="_blank">Search</a></td>
      <td width="78"><a href="Species_list.php">Species List</a></td>

    </tr>
  </table>
  <table width="450" height="115" border="2" cellpadding="3" cellspacing="3">


    <tr>
      <td colspan="3"><h2 align="center">This is Species Listed from the Database </h2></td>
      
    </tr>
    <tr>
      <td width="125"><div align="center">Name</div></td>
      <td width="158"><div align="center">Scientific name</div></td>
      <td width="127"><div align="center">Details</div></td>
    </tr>

	<?php
	//this is the table body
        $query="SELECT * FROM BIODIVERSITY.SPECIES ";//ADD A WHERE VISIBILITY = 1
        $res=oci_parse($connect, $query);
        oci_execute($res);

        $arr=oci_fetch_assoc($res);
		

                while(isset($arr['SPECIESID'])){
				$genus=GET_CLASSIFICATION_DETAIL($connect,"GENUS",$arr['GENUSID']); 

                    echo "<tr>";
                    echo "<td>{$arr['COMMONNAME']} </td>";
                    echo "<td align='center'> <u>{$genus['NAME']}</u> <u>{$arr['NAME']}</u></td>";
                    echo "<td><form action='show_species.php' method='POST'>
                        <input type='hidden' name='SID' value='{$arr['SPECIESID']}'>
                        <input type='submit' name='SDESC' value='Details..'/>
                        </form>
                        </td>";//HERE SDESC NAME & SID -> IS NOT OPTIONAL(COMPULSARY)
                    echo "</tr>";
                    $arr=oci_fetch_assoc($res);
                }
        

        ?>

    <tr>
      <td colspan="3"><h2 align="center">This is Species Listed from the Database </h2></td>
      
    </tr>
  </table>
</div>
<?php
include_once 'includes\Close_connection.php';
?>