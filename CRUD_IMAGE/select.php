<?php
include "connect.php";

$select = "SELECT * FROM userimg";
$select_send=$conn->query($select);
while($row=mysqli_fetch_assoc($select_send)){
    echo "
      <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>
                    <img src='./uploads/{$row['img']}'  alt='$row[name]' style='width:50px;height:50px'>
                </td>
                 <td> <a href='remove.php?id=$row[id]' 
                      class='btn btn-danger'
                        onclick=\"return confirm('Are you sure you want to remove this item')\"
                        >remove</a>
                 </td>
                 <td> <a href='update.php?id=$row[id]' class='btn btn-primary'> update</a> </td>
            </tr>
    
    ";
}



?>