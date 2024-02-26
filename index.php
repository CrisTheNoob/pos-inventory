<?php
    include("./database/datebase.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="./img/POS.png" type="image/x-icon">
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- link -->

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- icons -->
    <style>
    :root {
    --offcanvas-width: 290px;
    }
    @media (min-width: 992px) {
    main {
        margin-left: var(--offcanvas-width);
    }
    .sidebar-nav {
        transform: none;
        visibility: visible !important;
    }
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
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 280px; height: 94vh;">
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
                        <a href="customer.php" class="nav-link link-body-emphasis text-light">
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
        <div class="col ms-5">
                    <div class="row ms-3">
                        <div class="col-md-12 fw-bold fs-2">
                            Dashboard
                        </div>
                    </div>
                    <div class="row ms-5">
                        <div class="col-md-3">
                            <div class="card text-bg-primary mb-3" style="max-width: 18rem;">
                                <!-- {{-- <div class="card-header">Header</div> --}} -->
                                <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-people-fill"></i> Product</h5>
                                <p class="card-text">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-bg-danger mb-3" style="max-width: 18rem;">
                                <!-- {{-- <div class="card-header">Header</div> --}} -->
                                <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-files"></i> Customer</h5>
                                <p class="card-text">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-bg-warning mb-3" style="max-width: 18rem;">
                                <!-- {{-- <div class="card-header">Header</div> --}} -->
                                <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-clipboard2-data"></i> Transaction</h5>
                                <p class="card-text">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-bg-success mb-3" style="max-width: 18rem;">
                                <!-- {{-- <div class="card-header">Header</div> --}} -->
                                <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-receipt-cutoff"></i> New Products</h5>
                                <p class="card-text">0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card m-3">
                                <div class="card-header">
                                    <h1>Customer Tables</h1>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped data-table" style="width: 100%">
                                            <thead>
                                                <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    
</body>
</html>