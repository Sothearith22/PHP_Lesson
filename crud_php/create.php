<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Product</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">

    <div class="card shadow-sm border-0" style="width: 26rem;">
        <div class="card-body p-4">
            <h3 class="text-center mb-4 fw-bold">Create Product</h3>

            <form method="POST">

                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-box"></i></span>
                        <input type="text" class="form-control" name="name" placeholder="Enter Product Name" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-cash-stack"></i></span>
                        <input type="number" class="form-control" name="price" placeholder="Enter Price" required>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Quantity</label>
                    <div class="input-group">
                        <span class="input-group-text"><i class="bi bi-123"></i></span>
                        <input type="number" class="form-control" name="qty" placeholder="Enter Quantity" required>
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary w-100 py-2 fw-semibold">
                    <i class="bi bi-plus-circle me-1"></i> Create Product
                </button>

            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
include "db.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['qty'];

    $sql = " INSERT INTO product ( name , price ,qty) 
    VALUES ('$name' , $price , $qty)";
    $isSuccess = $conn->query($sql);
    if($isSuccess){
        echo "<script>alert('Product Added Successfully');</script>";
        header("location : read.php");
        exit();
    }


}
?>