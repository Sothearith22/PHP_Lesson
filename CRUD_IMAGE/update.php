<?php
include "connect.php";

if (isset($_GET['id'])) {
    // Load old data to show 
    $id = $_GET['id'];

    $select = "SELECT * FROM userimg WHERE id='$id'";
    $result = $conn->query($select);
    $row = mysqli_fetch_assoc($result);

    $name = $row['name'];
    $email = $row['email'];
    $img = $row['img'];
}

if (isset($_POST['update'])) {

    $id     = $_POST['id'];
    $name   = $_POST['name'];
    $email  = $_POST['email'];

    $oldImg = $_POST['old_img'];  // existing image
    $newImg = $_FILES['img']['name'];
    $tmp    = $_FILES['img']['tmp_name'];

    // If user uploads new image
    if ($newImg) {

        $savePath = "" . $newImg;    // path saved in DB
        $uploadPath = "../CRUD_IMAGE/uploads/" . $newImg;  // real folder
        move_uploaded_file($tmp, $uploadPath);
        $imgToSave = $savePath;
    } 
    else {
        // keep old image
        $imgToSave = $oldImg;
    }
    // Update
    $update = "UPDATE userimg 
               SET name='$name', email='$email', img='$imgToSave'
               WHERE id='$id'";

    $update_send = $conn->query($update);

  if ($update_send) {
    echo "<script>
             alert('Update successfully');
             window.location.href = 'index.php';
          </script>";

}


    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Data</title>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data"
      class="w-25 shadow-lg p-3 mt-5 m-auto">

    <h4 class="text-center text-warning">UPDATE DATA</h4>

    <input type="hidden" name="id" value="<?= $id ?>">

    <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control"
               name="name" value="<?= $name ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control"
               name="email" value="<?= $email ?>">
    </div>

    <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" 
         name="img" value="<?= $img ?>">
    </div>


    <div class="mb-3">
        <button type="submit" class="btn btn-success w-100" name="update">
            UPDATE DATA
        </button>
    </div>

</form>

</body>
</html>

