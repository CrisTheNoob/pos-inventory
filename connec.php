<?php
    $con = new mysqli('localhost', 'root', '', 'pos_database');

    if(!$con){
        die(mysqli_error($con));
    }

?>