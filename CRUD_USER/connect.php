<?php
$server = "localhost";
$username="root";
$psw="";
$db="php_9-10";

$con=mysqli_connect($server,$username,$psw,$db,3307);
if(!$con){
    echo "connct fail";
}


?>