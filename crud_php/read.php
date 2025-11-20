<?php
include "db.php";
$sql = "SELECT * FROM product ";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Read Data</title>
</head>

<body>
    <div class="container">
        <h2 class="mt-5 mb-3">Product info</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th>Qty</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    if($result->num_rows > 0 ){
                        while($row = $result->fetch_assoc()){
                            echo "<tr>";
                                 echo "<td>" .$row['code'] ."</td>";
                                 echo "<td>" .$row['name'] . "</td>";
                                 echo "<td>" .$row['price'] . "</td>";
                                 echo "<td>" .$row['qty'] . "</td>";
                                 echo "<td>";
                                 echo "<a href='update.php?id=$row[code]'class='m-2 btn btn-primary'>Update</a>";
                                 echo "<a href='detele.php?id=$row[code]'class='btn btn-danger'>Delete</a>";
                                 echo "</td>";
                                 echo "</th>";
                        }
                    }
                ?>   
                 
            </tbody>
              <a href="create.php" class="btn btn-success">Create</a>
        </table>
    </div>
  
     
</body>

</html>