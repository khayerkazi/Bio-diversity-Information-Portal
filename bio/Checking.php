<?php
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';

?>
<?php
$USERNAME = $_POST['USERNAME'];
$PASSWORD = $_POST['PASSWORD'];
//echo $USERNAME."<br>".$PASSWORD."<br>";
	if(isset($_POST['ADMIN'])){
                $query = "SELECT * FROM BIODIVERSITY.ADMIN WHERE BIODIVERSITY.ADMIN.USERNAME='{$USERNAME}'";
                $query .= " AND BIODIVERSITY.ADMIN.PASSWORD='{$PASSWORD}'";
                $res = oci_parse($connect, $query);
                oci_execute($res);
               $admin = oci_fetch_assoc($res);
                if(isset($admin['ADMINID'])){//there are seven field in admin table
                session_start();
                $_SESSION['ADMINID'] = $admin['ADMINID'];// on log out this must be unset
                    header("Location:Admin_me.php");
                }else header("Location:Login.php");

                 
                
                
	}
	else if(isset($_POST['DEO'])){
                $query = "SELECT * FROM BIODIVERSITY.DOE WHERE BIODIVERSITY.DOE.USERNAME='{$USERNAME}'";
                $query .= " AND BIODIVERSITY.DOE.PASSWORD='{$PASSWORD}'";
                $res = oci_parse($connect, $query);
                oci_execute($res);
                $doe = oci_fetch_assoc($res);
                if(isset ($doe['DOEID'])){//there are seven field in  tablE
                    session_start();
                    print_r($doe);
                    $_SESSION['DEOID'] = $doe['DOEID'];// on log out this must be unset
                    
                   header("Location:DataEntry_me.php");
                }else header("Location:Login.php");
	}

       else header("Location:Login.php");

?>
<?php
    include_once 'includes\Close_connection.php';
?>