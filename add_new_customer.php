<?php
include 'connec.php';
if(isset($_POST['submit'])){
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $mobile=$_POST['mobile'];
    $emailAddress=$_POST['emailAddress'];
    $location=$_POST['location'];

    $sql="insert into `customers_db` (firstName,lastName,mobile,emailAddress,location)
    value('$firstName','$lastName','$email','$emailAddress','$location')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:list_of_costumers.php');
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
    <title>Add new customer</title>
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
    <div class="flex-shrink-0 p-3 bg-dark" style="width: 220px; height: 150vh">
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
            <form method="POST">
                    <div class="mb-3 row">
                        <h2>Personal</h2>
                        <div class="mb-3 row">
                            <label for="inputDescription" class="col-sm-2 col-form-label fw-bold">ID</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="inputDescription" name="id" autocomplete="off">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputDescription" class="col-sm-2 col-form-label fw-bold">Area</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputDescription" name="area" autocomplete="off">
                            </div>
                        </div>
                        <label for="inputType" class="col-sm-2 col-form-label fw-bold">Price Level</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="type">
                                <option selected>Select Type</option>
                                <option value="level1">Level 1</option>
                                <option value="level2">Level 2</option>
                                <option value="level3">Level 3</option>
                                <option value="level4">Level 4</option>
                                <option value="level5">Level 5</option>
                            </select>
                        </div>
                    </div>
                    <h2>Personal Information</h2>
                    <div class="row m-2">
                        <div class="col">
                            <input type="text" name="firstName" class="form-control" placeholder="First name" aria-label="First name">
                        </div>
                        <div class="col">
                            <input type="text" name="lastName" class="form-control" placeholder="Last name" aria-label="Last name">
                        </div>
                        <div class="col">
                            <input type="text" name="middleName" class="form-control" placeholder="Middle name" aria-label="Middle name">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputDescription" class="col-sm-2 col-form-label fw-bold">Address</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputDescription" name="address" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Date of Birth</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputUnit" name="className" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="unitCost" class="col-sm-2 col-form-label fw-bold">Sex</label>
                        <div class="col-sm-10">
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="male" id="male">
                                <label class="form-check-label" for="male">
                                    Male
                                </label>
                                </div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="female" id="female">
                                <label class="form-check-label" for="female">
                                    Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Place of Birth</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUnit" name="placeOfBirth" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Civil Status</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="type">
                                <option selected>Select Type</option>
                                <option value="level1">Single</option>
                                <option value="level2">Married</option>
                                <option value="level3">Divorced</option>
                                <option value="level4">widowed</option>
                                <option value="level5">Civil partnership</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Citizenahip</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUnit" name="level2" autocomplete="off" placeholder="000.00">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Occupation</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUnit" name="level3" autocomplete="off" placeholder="000.00">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">TIn #</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputUnit" name="level4" autocomplete="off" placeholder="000.00">
                        </div>
                    </div>
                    <h2>Corporate Information</h2>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Company Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUnit" name="level5" autocomplete="off" placeholder="000.00">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Company Address</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUnit" name="unitCost" autocomplete="off" placeholder="100.00">
                        </div>
                    </div>
                    <h2>Conditions</h2>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Date Open</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control" id="inputUnit" name="unit" autocomplete="off" placeholder="pcs">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Approved by:</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUnit" name="price" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Remarks</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUnit" name="quantity" autocomplete="off">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success" id="liveAlertBtn"><i class="bi bi-plus-square"></i> Add</button>
                    <button type="button" name="submit" class="btn btn-danger"><a href="list_of_products.php"><i class="bi bi-x-circle"></i> Cancel</a></button>  
                </form>
                <br>
                <!-- <button type="button" class="btn btn-danger"><a href="location_of_customers.php">Close</a></button> -->
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