<?php
include 'connec.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <link rel="icon" href="./img/POS.png" type="image/x-icon">

    <!-- link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link -->

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- icons -->

    <style>
    .items {
            margin-left: 60px;
    }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid bg-dark">
            <a class="navbar-brand fw-bold text-uppercase text-light" href="#">Point of Sale_Inventory</a>
        </div>
    </nav>

    <div class="row">
        <div class="col col-lg-2">
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 220px; height: 94vh;">
                <a href="index.php" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none text-light">
                <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
                <span class="fs-4">Dashboard</span>
                </a>
                    <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="product.php" class="nav-link link-body-emphasis text-light">
                        <i class="bi bi-cart3"></i>
                        Product
                        </a>
                    </li>
                    <li>
                        <a href="customer_page.php" class="nav-link link-body-emphasis text-light">
                        <i class="bi bi-person"></i>
                        Costumer
                        </a>
                    </li>
                    <li>
                        <a href="transaction.php" class="nav-link link-body-emphasis text-light">
                        <i class="bi bi-clipboard-data"></i>
                            Transaction
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col items">
        <div class="px-3 py-2 border-bottom">
                <div class="container">
                    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                            <li class="m-1">
                                <button type="button" class="btn btn-success"><a href="add_new_customer.php" class="nav-link text-dark"><i class="bi bi-plus-square"></i>New</a></button> 
                            </li>
                            <li class="m-1">
                                <button type="button" class="btn btn-danger"><a href="index.php" class="nav-link text-dark"><i class="bi bi-x-lg"></i>Close</a></button> 
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
        <div class="container">
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Mobile</th>
                <th scope="col">Email Address</th>
                </tr>
            </thead>
            <tbody>

            <?php

            $sql="Select * from `new_users`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $firstName=$row['firstName'];
                    $lastName=$row['lastName'];
                    $mobile=$row['mobile'];
                    $emailAddress=$row['emailAddress'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$firstName.'</td>
                    <td>'.$lastName.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$emailAddress.'</td>
                    <td>
                    <button class="btn btn-primary"><a href="update_users.php?updateid='.$id.'" class="text-light"><i class="bi bi-pencil-square"></i>Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light"><i class="bi bi-trash3"></i>Delete</a></button>
                    </td>
                </tr>';
                }
            }

            ?>
                
            </tbody>
            </table>
            </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</body>
</html>