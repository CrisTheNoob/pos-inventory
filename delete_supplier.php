<?php
include 'connec.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `product_item` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:supplier.php');
    }else{
        die(mysqli_error($con));
    }
}
?>