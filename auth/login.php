<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <title>Modern Login Page</title>

    <style>
        body {
            height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: "Poppins", sans-serif;
        }

        .login-box {
            width: 380px;
            background: #ffffff;
            border-radius: 18px;
            padding: 35px;
            box-shadow: 0 12px 40px rgba(0,0,0,0.15);
            animation: fadeIn 0.6s ease-in-out;
        }

        @keyframes fadeIn {
            from {opacity: 0; transform: translateY(10px);}
            to {opacity: 1; transform: translateY(0);}
        }

        h2 {
            text-align: center;
            font-weight: 600;
            margin-bottom: 25px;
        }

        .form-control {
            height: 48px;
            padding-left: 12px;
            border-radius: 12px;
            border: 1px solid #ccc;
        }

        .btn-login {
            width: 100%;
            height: 48px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 500;
        }

        a {
            text-decoration: none;
            font-size: 14px;
            display: block;
            text-align: center;
            margin-top: 12px;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <form class="login-box" method="post">
        <h2>Login</h2>

        <input type="email" name="email" class="form-control mb-3" placeholder="Enter your email" required>

        <input type="password" name="pw" class="form-control mb-3" placeholder="Enter your password" required>

        <button type="submit" name="submit" class="btn btn-primary btn-login">
            Login
        </button>

        <a href="register.php">Don't have an account?</a>
    </form>

</body>
</html>
<?php 
    include"connect.php";
    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $pw=$_POST['pw'];
        $select="SELECT * FROM user WHERE email = '$email' AND pw='$pw'";
        $select_send=$conn->query($select);
        if(mysqli_num_rows($select_send)>0){
            $_SESSION['user'] = $email;
            header("location:dashboard.php");
        }
    } 

?>
