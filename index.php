<!-- <?php
    include 'connec.php';
?> -->

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
        <div class="flex-shrink-0 p-3 bg-dark" style="width: 290px; height: 92vh">
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
                    <li><a href="purchase.php" class="link-body-emphasis d-inline-flex text-decoration-none rounded text-light">Purchase</a></li>
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
                    <div class="row ms-3">
                        <div class="col-md-12 fw-bold fs-2">
                            Dashboard
                        </div>
                    </div>
                    <div class="row ms-5">
                        <div class="col-md-3">
                            <div class="card text-bg-primary mb-3" style="max-width: 18rem; height: 200px">
                                <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-people-fill"></i> Product</h5>
                                <p class="card-text">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-bg-danger mb-3" style="max-width: 18rem; height: 200px">
                                <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-files"></i> Customer</h5>
                                <p class="card-text">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-bg-warning mb-3" style="max-width: 18rem; height: 200px">
                                <div class="card-body">
                                <h5 class="card-title"><i class="bi bi-clipboard2-data"></i> Transaction</h5>
                                <p class="card-text">0</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card text-bg-success mb-3" style="max-width: 18rem; height: 200px">
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