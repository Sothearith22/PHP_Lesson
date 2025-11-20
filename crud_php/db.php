    <?php
    $host = "localhost";
    $user = "root";
    $password ="";
    $database = "php_9-10";

    $conn = mysqli_connect($host, $user, $password, $database,3307);

    // Check connection
    if(!$conn){
        echo "un Success";
    }
    ?>