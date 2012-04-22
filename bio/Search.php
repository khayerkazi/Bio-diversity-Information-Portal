<?php
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';

?>
<style type="text/css">
#apDiv2 {
	position:absolute;
	width:373px;
	height:45px;
	z-index:2;
	left: 6px;
	top: 264px;
}
</style>


<div id="apDiv1" style="position:absolute; width:403px; height:185px; z-index:1; left: 71px; top: 27px;">
 <form action="Search.php" method="POST">
     <table width="583" height="91" border="2" cellpadding="2" cellspacing="1">
    <tr>
      <td width="62" height="85"><a href="http://localhost:9090/biodiversity/index.php/common_user/common_user/">Main Site</a></td>
      <td width="71"><a href="Search.php" target="_blank">Search</a></td>
      <td width="78"><a href="Species_list.php">Species List</a></td>
      
    </tr>
  </table>
    <table width="406" height="80" border="2" cellpadding="3" cellspacing="3">
    <tr>
      <td colspan="2"><h2>Search</h2></td>
    </tr>
    <tr>
      <td width="183" height="33">Select A Catagory</td>
      <td width="194"><div align="center">
        <select name="SELECT" id="select">
          <option value="SPECIES">Species</option>
          <option value="GENUS">Genus</option>
          <option value="FAMILY">Family</option>
          <option value="ORD">Order</option>
          <option value="CLASS">Class</option>
          <option value="PHYLUM">Phylum</option>
        </select>
      </div></td>
    </tr>
  </table>
  <table width="403" border="2" cellspacing="3" cellpadding="3">
    <tr>
      <td width="173">Search By ID</td>
      <td width="201"><div align="center">
        <input type="text" name="ID" id="textfield" />
      </div></td>
    </tr>
    <tr>
      <td>Search By Scientific Name</td>
      <td><div align="center">
        <input type="text" name="NAME" id="textfield2" />
      </div></td>
    </tr>
    <tr>
      <td colspan='2'><div align="center">
        <input type="submit" name="SEARCH" value="Search..." />
        </div></td>
    </tr>
  </table>
 </form>
  <?php
  //not precisely done
  if(isset($_POST['SEARCH'])&&($_POST['ID'] || $_POST['NAME'])){
      //if search button pressed
      $table = $_POST['SELECT'];
      if($table == "ORD")
      $id = "ORDERID";
      else $id=$table."ID";
      
      $name = strtoupper($_POST['NAME']);
      

      if($_POST['ID']!=""){
          $Where1 = "where {$id}={$_POST['ID']}";
      }
      else $Where1 = "";
      //2
      if($_POST['NAME']!=""){
          if($Where1 != "")
          $Where2 = " OR NAME='{$_POST['NAME']}'";
          else
              $Where2 = "WHERE UPPER(NAME) LIKE '%{$name}%'";
      }else $Where2="";

      

      $query="SELECT * FROM BIODIVERSITY.";
      $query .= $table." ".$Where1.$Where2;
	  if($_POST['SELECT'] == "SPECIES")
	  $query .= " AND BIODIVERSITY.SPECIES.VISIBLE='1'";
      //echo $query;

      $res = oci_parse($connect, $query);
      oci_execute($res);
      $arr = oci_fetch_assoc($res);
  }
  ?>
  <?php
  //this will generate the result table
  
  if(!isset($arr['NAME']))
  {
	  echo "No Result Found";
  }
  
  if(isset($arr['NAME'])){
  
  echo "<div id='apDiv2'>
    <table width='373' height='20' border='1' cellpadding='0' cellspacing='0'>
      <tr>
        <td colspan='2'><div align='center'>
          <h2>Search Result</h2>
        </div></td>  
      </tr>
      <tr>
        <td width='50%'><div align='center'>
          <p>Name</p>
        </div></td>
        <td width='104'><div align='center'>
          <p>View Details</p>
        </div></td>
      </tr>";
    /*table has been started*/

    while(isset($arr['NAME'])){


                    echo "<tr><td>";
                    echo $arr['NAME'];
                    echo "</td> <td align='center'><form method='POST' action='show_{$_POST['SELECT']}.php'>";
                           
                           echo "<input type='hidden' name='SID' value='{$arr[$id]}'>";
                           echo "<input type='submit' name='SDESC' value='Details..'/>";
                    echo "</form></td></tr>";
                    $arr=oci_fetch_assoc($res);
                }
	  
	 //end table 
    echo "</table></div></div>";
  }
	?>
</div>
<?php
include_once 'includes\Close_connection.php';
?>