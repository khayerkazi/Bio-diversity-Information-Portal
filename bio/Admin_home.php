
<?php
session_start();
    if(isset($_SESSION['ADMINID'])==FALSE){
        header("Location: Login.php");
    }
?>

<style type="text/css">
#Table{
	color:#999;
	text-align:center;
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
<p>&nbsp;</p>
<h1>	This is my Admins Home Page</h1>
