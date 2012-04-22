<?php

//this is for setting connection

    $connect = oci_connect('BIODIVERSITY', 'mou', 'localhost/XE');
    if(!$connect){
        echo "connection failed !!!";
    }


?>
