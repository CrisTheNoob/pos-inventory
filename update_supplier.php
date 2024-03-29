<?php
include 'connec.php';
$id=$_GET['updateid'];
$sql="Select * from `product_item` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$nameSupplier=$row['nameSupplier'];
$emailAddress=$row['emailAddress'];
$address=$row['address'];
$productName=$row['productName'];
$productType=$row['productType'];
$description=$row['description'];
$unitCost=$row['unitCost'];

if(isset($_POST['submit'])){
    $nameSupplier=$_POST['nameSupplier'];
    $emailAddress=$_POST['emailAddress'];
    $address=$_POST['address'];
    $productName=$_POST['productName'];
    $productType=$_POST['productType'];
    $description=$_POST['description'];
    $unitCost=$_POST['unitCost'];

    $sql="update `product_item` set id=$id,nameSupplier='$nameSupplier',emailAddress='$emailAddress',address='$address',productName='$productName',productType='$productType',description='$description',unitCost='$unitCost'";
    $result=mysqli_query($con,$sql);
    if($result){
        echo "Updated Successfully";
    }else{
        die(mysqli_error($con));
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Updating supplier</title>
    <link rel="icon" href="./img/POS.png" type="image/x-icon">

    <!-- link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link -->

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- icons -->

    <style>
        .col-width {
            width: 200px;
            max-width: 50%;
        }
        a {
            text-decoration: none;
            color: white;
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
    <div class="flex-shrink-0 p-3 bg-dark" style="width: 220px; height: 92vh">
            <a href="/" class="d-flex align-items-center pb-3 mb-3 link-body-emphasis text-decoration-none border-bottom">
            <svg class="bi pe-none me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
            <span class="fs-5 fw-semibold text-light">Dashboard</span>
            </a>
            <ul class="list-unstyled ps-0">
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 text-light" data-bs-toggle="collapse" data-bs-target="#product-collapse" aria-expanded="true">
                Product
                </button>
                <div class="collapse show" id="product-collapse" style="">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ps-3">
                    <li><a href="list_of_products.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">List of Product</a></li>
                    <li><a href="type_of_products.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">Type of Product</a></li>
                </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light" data-bs-toggle="collapse" data-bs-target="#customer-collapse" aria-expanded="false">
                Customer
                </button>
                <div class="collapse" id="customer-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ps-3">
                    <li><a href="list_of_costumers.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">List of Customers</a></li>
                    <li><a href="location_of_customers.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">Location of Customers</a></li>
                </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light" data-bs-toggle="collapse" data-bs-target="#supplier-collapse" aria-expanded="false">
                Supplier
                </button>
                <div class="collapse" id="supplier-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ps-3">
                    <li><a href="supplier.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">List of Supplier</a></li>
                </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light" data-bs-toggle="collapse" data-bs-target="#transaction-collapse" aria-expanded="false">
                Transaction
                </button>
                <div class="collapse" id="transaction-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ps-3">
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">Purchase</a></li>
                    <li><a href="list_of_costumers.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">Sales</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">Return Sales</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">List of Sales</a></li>
                    
                </ul>
                </div>
            </li>
            <li class="mb-1">
                <button class="btn btn-toggle d-inline-flex align-items-center rounded border-0 collapsed text-light" data-bs-toggle="collapse" data-bs-target="#report-collapse" aria-expanded="false">
                Report
                </button>
                <div class="collapse" id="report-collapse">
                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small ps-3">
                    <li><a href="list_of_costumers.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">Income</a></li>
                    <li><a href="#" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">Ledger</a></li>
                </ul>
                </div>
            </li>
            </ul>
        </div>
        <div class="col ms-5">
        <div class="container m-5">
                <h1>Update supplier</h1>
                <br>
                <div id="liveAlertPlaceholder"></div>
                <hr>
                <form method="post">
                <h2>Supplier Information</h2>
                    <div class="mb-3 row">
                        <label for="nameSupplier" class="col-sm-2 col-form-label fw-bold">Name of Supplier</label>
                        <div class="col-sm-10">
                        <input type="text" name="nameSupplier" class="form-control" placeholder="Name of Supplier" aria-label="First name">  
                        </div>     
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">Address</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputPassword" name="address" placeholder="Address">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">Email Address</label>
                        <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputPassword" name="emailAddress" placeholder="Email Address">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputType" class="col-sm-2 col-form-label fw-bold">Product Type</label>
                        <div class="col-sm-10">
                        <select class="form-select" aria-label="Default select example" name="productType">
                            <option selected>Select Type</option>
                            <option value="Generic product">Generic product</option>
                            <option value="Service">Service</option>
                            <option value="Consumer goods">Consumer goods</option>
                            <option value="Food">Food</option>
                            <option value="Soap">Soap</option>
                            <option value="Clothing">Clothing</option>
                            <option value="Capital goods">Capital goods</option>
                            <option value="Electronics">Electronics</option>
                            <option value="Products">Products</option>
                            <option value="Toothpaste">Toothpaste</option>
                            <option value="Phones">Phones</option>
                            <option value="Component materials">Component materials</option>
                            <option value="Essential equipment">Essential equipment</option>
                            <option value="Raw materials">Raw materials</option>
                            <option value="Unsought goods">Unsought goods</option>
                        </select>
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputDescription" class="col-sm-2 col-form-label fw-bold">Product Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputDescription" name="productName" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="unitCost" class="col-sm-2 col-form-label fw-bold">Unit Cost</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="unitCost" name="unitCost" autocomplete="off">
                        </div>
                    </div>

                    <button type="submit" name="submit" class="btn btn-success" id="liveAlertBtn"><i class="bi bi-plus-square"></i> Add</button>

                </form>
                <br>
                <button type="button" class="btn btn-danger"><a href="supplier.php">Close</a></button>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        const appendAlert = (message, type) => {
        const wrapper = document.createElement('div')
        wrapper.innerHTML = [
            `<div class="alert alert-${type} alert-dismissible" role="alert">`,
            `   <div>${message}</div>`,
            '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
            '</div>'
        ].join('')

        alertPlaceholder.append(wrapper)
        }

        const alertTrigger = document.getElementById('liveAlertBtn')
        if (alertTrigger) {
        alertTrigger.addEventListener('click', () => {
            appendAlert('added successfully', 'success')
        })
        }else{
            //
        }
    </script>
</body>
</html>