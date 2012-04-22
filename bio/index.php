<?php
    include_once 'includes\functions.php';

    include_once 'includes\Set_connection.php';
    
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //BIODIVERSITY side
        $date = '22-11-11';
        //INSERT_DIVISION($connect, "12-12-2009", "dog", "It is a dog", 1, "SPECIES");
        //$row = FETCH_DETAILS($connect, "KINGDOM", 1);
        //echo "{$row['LASTMODIFIED']} , {$row['NAME']}";
        //INSERT_DIVISION($connect, "12-2-76", "BELAI2", "ANOTHER CAT TYPE2", 2, "CLASS");
        //GET_CHILDS_ID($connect, "PHYLUM", 2);
        //ADD_NEW_ADMIN_OPERATOR($connect, "Ratul Sharker", "popey", "1234", "sharker.ratul.08@gmail.com", "Dhaka-1000", 1);
        //ADD($connect);
        //$row = GET_ADMIN_INFO($connect, 5);
        //echo print_r($row);
        //REMOVE_DOE($connect,"12");
        //echo GET_CLASSIFICATION_ID($connect,"SPECIES", "dog");
        //ENTER_NEW_CLASSIFICATION($connect, "Kutta", "This is Kutta Description", 21, "SPECIES")
        //INSERT_INTO_PO_TABLE($connect, 21, 2, 1, 3, 1, 1, 1, "gheu", "This is kutta");
        ECHO GET_CLASSIFICATION_ID($connect, "PHYLUM", 'chordatA');
        ?>
    </body>
</html>

<?php
include_once 'includes\Close_connection.php';
?>
