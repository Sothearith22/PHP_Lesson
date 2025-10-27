<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <form class="w-25 shadow-lg rounded-2 p-3 mx-auto mt-5" method="post">
        <h3 class="text-center">Our Store</h3>
        <div class="mb-3">
            <label for="code" class=" form-label">Code</label>
            <input type="text" class=" form-control" placeholder="Code" name="code">
        </div>
              <div class="mb-3">
            <label for="name" class=" form-label">name</label>
            <input type="text" class=" form-control" placeholder="name" name="name">
        </div>
              <div class="mb-3">
            <label for="Qty" class=" form-label">Qty</label>
            <input type="text" class=" form-control" placeholder="Qty" name="qty">
        </div>
              <div class="mb-3">
            <label for="Price" class=" form-label">Price</label>
            <input type="text" class=" form-control" placeholder="Price" name="price">
        </div>
        <button type="submit" class="w-100 btn  btn-primary" name="send">Send</button>
    </form>
    <table class="table w-50 mt-5 mx-auto">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
    <?php
    if(isset($_POST['send'])){
        $code = $_POST["code"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $qty= $_POST["qty"];

        include "EncapsulationFormClass.php";
        $Product = new Store();
        $Product->setInput($code,$name,$qty,$price);
        echo $Product->getCode();
        echo $Product->getName();
        echo $Product->getPrice();
        echo $Product->getQty();
        echo $Product->getTotal();
       

        


    }

    ?>
    

        </tbody>
    </table>


   
</body>
</html>