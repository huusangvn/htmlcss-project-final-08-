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
    include("../../admin/config/config.php");
    $id_khachhang = $_SESSION['Email'];
    $code_order = rand(0,999);
    $insert_cart = "INSERT INTO  tbl_cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."','".$code_order."',1)";
    $cart_query = mysqli_query($mysqli,$insert_cart);  
    if($cart_query ){
        //them gio hàng chi tiết        
        foreach($_SESSION['cart'] as $key => $value){
            $id_sanpham = $value['id'];
            $soluong = $value['soluong'];
            $insert_order_details = "INSERT INTO  tbl_cart_details(id_sanpham, code_cart, soluongmua) 
                VALUE('".$id_sanpham."','".$code_order."','".$soluong."')";
            mysqli_query($mysqli,$insert_order_details);
        }
    }
    //unset($_SESSION['cart']);
    echo "<srcipt>alert('Đặt hàng thành công');
    window.location.href = 'index-logined.php';
    </srcipt>";
?>