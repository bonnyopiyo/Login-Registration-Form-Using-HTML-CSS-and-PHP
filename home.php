<?php
/**
 * Created by PhpStorm.
 * User: osindi
 * Date: 6/16/19
 * Time: 10:41 AM
 */
session_start();
if (!isset($_SESSION['username'])){
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="custom.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
</head>
<body>
<div class="container">
<a href="logout.php" class="float-right">LOGOUT</a>
<h1 class="text-white">Welcome  <?php echo $_SESSION['username']; ?> </h1>
</div>
</body>
</html>
