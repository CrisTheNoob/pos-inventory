<?php
include 'connec.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `new_product_items` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted Successfull";
        header('location:product_page.php');
    }else{
        die(mysqli_error($con));
    }
}

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `new_users` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:customer_page.php');
    }else{
        die(mysqli_error($con));
    }
}

?>