<?php 
    include "connect.php";
    $id = $_POST['id'];
    $name=$_POST['pro_name'];
    $qty = $_POST['pro_qty'];
    $price =$_POST['pro_price'];
    $update = "UPDATE products  set name='$name',qty='$qty',price='$price' WHERE id='$id' ";
    $update_send = $conn->query($update);
    if($update_send){
        echo "Updated Successfully";
    }
    else{
        echo " Update dea tea sl ke mnk eng ot success";
    }


?>