<?php 
 include "connect.php";
 $id =$_POST['id'];
 $select="SELECT * FROM products WHERE id='$id' ";
 if($select_send=$conn->query($select)){
    $row=mysqli_fetch_assoc($select_send);
    echo json_encode($row); //convert to json 
 }  
?>