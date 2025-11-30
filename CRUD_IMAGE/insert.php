<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <form action="" 
          class="w-25 shadow-lg p-3 mt-5 m-auto" 
          method="post" 
          enctype="multipart/form-data">

        <h4 class="text-center text-warning">INSERT DATA</h4>

        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" name="email">
        </div>

        <div class="mb-3">
            <label class="form-label">IMAGE</label>
            <input type="file" class="form-control" name="img">
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success w-100" name="submit">SUBMIT DATA</button>
        </div>
    </form>
</body>
</html>

<?php 
include("connect.php");

if (isset($_POST['submit'])) {

    $name  = $_POST['name'];
    $email = $_POST['email'];

    $img  = $_FILES['img']['name'];
    $tmp  = $_FILES['img']['tmp_name'];

    // Upload image
    if (move_uploaded_file($tmp, "../CRUD_IMAGE/uploads/" . $img)) {

        $insert = "INSERT INTO userimg(name, email, img) 
                   VALUES ('$name', '$email', '$img')";
    
        $query = mysqli_query($conn, $insert);

        if ($query) {
            echo "<script>alert('Data Inserted Successfully')</script>";
           header("location:index.php");
        } else {
            echo "<script>alert('Data Insertion Failed')</script>";
        }

    } else {
        echo "<script>alert('Image Upload Failed')</script>";
    }
}
?>
