<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "pos_inventory";
    $conn = "";

    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    if($conn) {
        //Success
    } else {
        //failed or syntax error
    }
?>