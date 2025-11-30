<?php
include "connect.php";

$name  = $_POST["pro_name"];
$qty   = $_POST["pro_qty"];
$price = $_POST["pro_price"];

$insert = "INSERT INTO products (name, qty, price) VALUES ('$name', '$qty', '$price')";
$send = $conn->query($insert);

if($send){
    echo "insert success"; 
}else{
    echo "error";
}
?>
