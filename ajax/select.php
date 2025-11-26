<?php 
    include"connect.php";
    $select = "SELECT * FROM products";
    $result = $conn->query($select);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $data[]=$row;   
        }
        echo json_encode($data);
    }



?>