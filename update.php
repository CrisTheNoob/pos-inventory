<?php
    include 'connec.php';
    $id=$_GET['updateid'];
    $sql="Select * from `new_product_items` where id=$id";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_assoc($result);
    $itemCode=$row['itemCode'];
    $description=$row['description'];
    $unitCost=$row['unitCost'];
    $unit=$row['unit'];





    if(isset($_POST['submit'])){
        // $id=$_POST['id'];
        $type=$_POST['type'];
        $itemCode=$_POST['itemCode'];
        $description=$_POST['description'];
        $unitCost=$_POST['unitCost'];
        $unit=$_POST['unit'];

        $sql="update `new_product_items` set id=$id,type='$type',itemCode='$itemCode',description='$description',unitCost='$unitCost',unit='$unit'";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "Dpdated successfully";
            // header('location:product_page.php');
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
                <form method="POST">
                    <div class="mb-3 row">
                        <label for="inputType" class="col-sm-2 col-form-label fw-bold">Type</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputType" name="type" autocomplete="off">
                    </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputItemCode" class="col-sm-2 col-form-label fw-bold">Item Code</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputItemCode" name="itemCode" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputDescription" class="col-sm-2 col-form-label fw-bold">Description</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputDescription" name="description" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputCost" class="col-sm-2 col-form-label fw-bold">Unit cost</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputCost" name="unitCost" autocomplete="off">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputUnit" class="col-sm-2 col-form-label fw-bold">Unit</label>
                        <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputUnit" name="unit" autocomplete="off">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success" id="liveAlertBtn"><i class="bi bi-plus-square"></i> Update</button>
                   
                </form>
                
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script>
        // const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
        // const appendAlert = (message, type) => {
        // const wrapper = document.createElement('div')
        // wrapper.innerHTML = [
        //     `<div class="alert alert-${type} alert-dismissible" role="alert">`,
        //     `   <div>${message}</div>`,
        //     '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
        //     '</div>'
        // ].join('')

        // alertPlaceholder.append(wrapper)
        // }

        // const alertTrigger = document.getElementById('liveAlertBtn')
        // if (alertTrigger) {
        // alertTrigger.addEventListener('click', () => {
        //     appendAlert('added successfully', 'success')
        // })
        // }else{
        //     //
        // }

    //     const InputType = document.getElementById('inputType');
    //     const InputItemCode = document.getElementById('inputItemCode');
    //     const InputDescription = document.getElementById('inputDescription');
    //     const InputCost = document.getElementById('inputCost');
    //     const InputUnit = document.getElementById('inputUnit');
    //     const form = document.getElementById('form');
        
    //    form.addEventListener('submit', function(e) {
    //         e.preventDefault();

    //         const TypeValue = InputType.value;
    //         const ItemCodeValue = InputItemCode.value;
    //         const DescriptionValue = InputDescription.value;
    //         const CostValue = InputCost.value;
    //         const UnitValue = InputUnit.value;


    //         localStorage.setItem('type', TypeValue);
    //         localStorage.setItem('itemCode', ItemCodeValue);
    //         localStorage.setItem('description', DescriptionValue);
    //         localStorage.setItem('cost', CostValue);
    //         localStorage.setItem('value', UnitValue);

    //         // window.location.href = "product_page.php";
    //    })

    </script>
</body>
</html>