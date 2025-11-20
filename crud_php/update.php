<?php 
include "db.php";
function getProduct($conn, $uid) {
    $sql = "SELECT * FROM product WHERE code = '$uid'";
    $result = $conn->query($sql);

    if ($result ->num_rows > 0) {
        $row = $result->fetch_assoc();
        return [
            'code' => $row['code'],
            'name' => $row['name'],
            'price'=> $row['price'],
            'qty'  => $row['qty']
        ];
    }
    return null;
}
if (isset($_GET['id'])) {
    $uid = $_GET['id'];
    $productData = getProduct($conn, $uid);

    if ($productData) {
        $name = $productData['name'];
        $price = $productData['price'];
        $qty = $productData['qty'];
    }
}
  function updateProduct($conn , $uid , $name , $price , $qty){
     $sql = "UPDATE product 
            SET name = '$name',
                price= '$price',
                qty  = '$qty' ";
        $isSuccess = $conn->query($sql);
        return $isSuccess;
  }
  if(isset($_POST['update'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty  = $_POST['qty'];

    $isSuccess = updateProduct($conn , $uid , $name , $price , $qty);
    if($isSuccess){
      header("Location : read.php");
      exit();
    }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Product</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
  <div class="card shadow-sm border-0" style="width: 26rem;">
    <div class="card-body p-4">
      <h3 class="text-center mb-4 fw-bold">Update Product</h3>

      <form method="POST">
        <div class="mb-3">
          <label class="form-label">Product Name</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-box"></i></span>
            <input type="text" 
              class="form-control" 
              name="name" 
              value="<?= $name; ?>"
              required>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Price</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-cash-stack"></i></span>
            <input type="number" 
            class="form-control" 
            name="price" 
            value="<?=$price; ?>" 
            required>
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Quantity</label>
          <div class="input-group">
            <span class="input-group-text"><i class="bi bi-123"></i></span>
            <input type="number" 
            class="form-control" 
            name="qty" 
            value="<?= $qty; ?>" 
            required>
          </div>
        </div>

        <button type="submit" name="submit" class="btn btn-primary w-100 py-2 fw-semibold">
          <i class="bi bi-pencil-square me-1"></i> Update Product
        </button>
      </form>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
