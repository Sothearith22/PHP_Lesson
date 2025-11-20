<?php 
    include "db.php";
    $SETECT = "SETECT * FROM product";
    $result =$conn->query($SETECT);
    while($row=mysqli_fetch_assoc($result)){
        
    }



?>