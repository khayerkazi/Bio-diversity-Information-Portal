<?PHP
session_start();
if(isset($_SESSION['ADMINID'])){
    unset ($_SESSION['ADMINID']);
    }
    if(isset($_SESSION['DOEID'])){
    unset ($_SESSION['DOEID']);
    }
?>

<style type="text/css">
#apDiv1 {
	position:absolute;
	width:367px;
	height:217px;
	z-index:1;
	top: 169px;
	background-color:  #008040;
	font-family:"Comic Sans MS", cursive;
	font-size:14px;
	left: 187px;
}
#Table{
	color:#999;
	text-align:center;
}
</style>


<div id="apDiv1" align="center">

<form method="POST" action="Checking.php">
  <table width="377" height="215" border="0" cellpadding="2" cellspacing="1" id="Table">
    <tr>
      <td height="58" colspan="2" align="center"><h1>Log in here...</h1></td>
    </tr>
    <tr >
      <td width="116" align="center">User Name</td>
      <td width="250"><input type="text" name="USERNAME" id="User" /></td>
    </tr>
    <tr>
      <td height="29" align="center">PassWord</td>
      <td><input type="Pass" name="PASSWORD" id="Pass" /></td>
    </tr>
    <tr>
    <td width="116"></td>
     <td width="250"><table width="200" border="0" cellspacing="1" cellpadding="2">
       <tr>
         <td width="70"><input type="submit" name="ADMIN" id="button" value="As Admin" /></td>
         
         <td width="119"><input type="submit" name="DEO" id="button2" value="As Data Operator" onsubmit="this.action = DataEntry_me.php"/></td>
        
       </tr>
     </table></td>      
    </tr>
  </table>
  </form> 

</div>
