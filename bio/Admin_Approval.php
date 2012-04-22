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
	left: 153px;
	top: 157px;
}
#apDiv3 {
	position:absolute;
	width:428px;
	height:115px;
	z-index:2;
	left: 87px;
	top: 205px;
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
<h1>This is Approval page..</h1>
<div id="apDiv3">
  <table width="428" border="2" cellspacing="3" cellpadding="3">
    <tr >
      <td height="43" colspan="2"><h2 align="center">This are Waiting 4 Approval</h2></td>
    </tr>
    <?php
		//here the approval list appears
                //*** Raw PHP Code is Placed here ***//
                
                $query="SELECT * FROM BIODIVERSITY.POTENTIALDOCS";

                $res=  oci_parse($connect, $query);
                oci_execute($res);

                $arr=oci_fetch_assoc($res);

                while(isset($arr['POTENTIALID'])){
                   

                    echo "<tr>";
                    echo "<td>ENTRIERID:{$arr['ENTRYID']} SPECIESID ={$arr['SPECIESID']} </td>";
                    echo "  <td align='center'>
                                <form action='Admin_Approval_preview.php' method='POST'>
                                <input type='HIDDEN' name='APPROVEID' value='{$arr['POTENTIALID']}'/>
                                <input type='HIDDEN' name='SID' value='{$arr['SPECIESID']}'/>
                                <input type='HIDDEN' name='OPID' value='{$arr['ENTRYID']}'/>
                                <input type='SUBMIT' name='PRESS' value='Preview'>
                                </form>
                            </td>";
                    echo "</tr>";
                    $arr=oci_fetch_assoc($res);
                }
    ?>
  </table>
</div>
<?php
    include_once 'includes\Close_connection.php';
?>
