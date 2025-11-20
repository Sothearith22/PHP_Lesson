<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>INSERT DATA</title>
</head>
<body>
     <form action="" class="w-25 shadow-lg p-3 mt-5 m-auto" method="post">
        <h4 class="text-center text-warning">INERT STUDENT</h4>
        <div class="mb-3">
            <label for="" class="form-label"> Name</label>
            <input type="text" class="form-control" name="name">
        </div>
            <div class="mb-3">
            <label for="" class="form-label">Gender</label>
            <input type="text" class="form-control" name="gender">
        </div>
         <div class="mb-3">
            <label for="" class="form-label">Address</label>
            <input type="text" class="form-control" name="address">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Score</label>
            <input type="number" class="form-control" name="score">
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-success w-100" name="submit">Add Student</button>
        </div>
</body>
</html>
<?php 
include('connect.php');
if(isset($_POST['submit'])){
   $name = $_POST['name'];
   $gender=$_POST['gender'];
   $address=$_POST['address'];
   $score = $_POST['score'];

    $insert = "INSERT INTO student(name , gender , address , score)
            VALUE('$name','$gender','$address','$score')";
    
    $result =$con->query($insert);
    if($result){
         echo "<script>alert('Insert Data succefully')</script>";
         header("Location :read.php");
    }
}


?>

