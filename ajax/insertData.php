<?php 
    include "connect.php";
    $name = $_POST['pro_name'];
    $qty  = $_POST['pro_qty'];
    $price =$_POST['pro_price'];

    $insert = "INSERT INTO products (name,qty,price)
                 VALUE ('$name','$qty','$price')";
    $insert_send = $conn->query($insert);
    if($insert_send){
        echo "Inserted Successfully";
    }
?>