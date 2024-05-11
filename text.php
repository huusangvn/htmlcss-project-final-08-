<?php
session_start();
    //require_once "../config/connect.php";
     $severName = "localhost";
    $userName = "root";
    $password = "";
    $dataBase = "quanlybanhang";
    $conn = mysqli_connect($severName,$userName,$password,$dataBase);
    if (!$conn) {
        die("Lỗi kết nối: " . mysqli_connect_error());
    }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">


    <script type="text/javascript" src="scripts/jquery-1.4.1.js"></script>

    <!-- Scripts -->


</head>

<body>
    <div><?php include 'jquery.php'; ?></div>
</body>

</html>