<?php
    $con = new mysqli('localhost', 'root', '', 'updated_db');

    if(!$con){
        die(mysqli_error($con));
    }

?>