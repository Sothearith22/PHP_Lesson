<?php 
        include("connect.php");
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $remove = "DELETE FROM userimg WHERE id ='$id'";
            $result = $conn->query($remove);
            if($result){
                  echo "<script>alert('remove succesfully')</script>";
                  header("location:index.php");
            }else{
                echo "Hello World";
            }
        }else{
            echo "no id found";
        }
?>