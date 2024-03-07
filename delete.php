<?php
include 'connec.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `product_item` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted Successfull";
        header('location:list_of_products.php');
        // echo '<h1>Delete Successfull</h1>';
    }else{
        die(mysqli_error($con));
    }
}

// if(isset($_GET['deleteid'])){
//     $id=$_GET['deleteid'];

//     $sql="delete from `product_item` where id=$id";
//     $result=mysqli_query($con,$sql);
//     if($result){
//         header('location:type_of_products.php');
//     }else{
//         die(mysqli_error($con));
//     }
// }

// if(isset($_GET['deleteid'])){
//     $id=$_GET['deleteid'];

//     $sql="delete from `customers_db` where id=$id";
//     $result=mysqli_query($con,$sql);
//     if($result){
//         header('location:list_of_costumers.php');
//     }else{
//         die(mysqli_error($con));
//     }
// }

// ?>