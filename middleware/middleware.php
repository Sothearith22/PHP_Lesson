<?php 
    function checkLogin(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if(!isset($_SESSION['user'])){
            header("location:welcomepage.php");
            exit();
        }
    }
?>