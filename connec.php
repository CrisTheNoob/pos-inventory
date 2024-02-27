<?php
    $con = new mysqli('localhost', 'root', '', 'pos_inventory_database');

    if(!$con){
        die(mysqli_error($con));
    }

?>