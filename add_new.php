<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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
                        <a href="./views/transaction_page.php" class="nav-link link-body-emphasis text-light">
                        <i class="bi bi-clipboard-data"></i>
                            Transaction
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col ms-5">
            <div class="container m-5">
                <h1>Adding new item</h1>
                <br>
                <div id="liveAlertPlaceholder"></div>
                <hr>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">Type</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">Item Code</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">Description</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">Unit cost</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPassword">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label fw-bold">Unit</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputPassword">
                    </div>
                </div>
                <button type="button" class="btn btn-success" id="liveAlertBtn"><i class="bi bi-plus-square"></i> Add</button>
                <button type="button" class="btn btn-danger"><a href="product_page.php">Close</a></button>
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