<?php 
    include"connect.php";
    $id=$_POST['key'];
    $delete="DELETE  FROM products WHERE id = '$id'";
    if($conn->query($delete)){
        echo "remove  successfully";
    }
    else{
        echo"remove fail";
    }
?>