<?php
    session_start();

function thongtindonhang(){

}

function taogiohang($tensp, $hinhsp, $dongia, $soluong, $thanhtien, $idbill){
    $conn = ketnoidb();
        $sql = "INSERT INTO tbl_cart(tensp, hinhsp, dongia, soluong, thanhtien, idbill)
        VALUES ('$tensp', '$hinhsp', '$dongia','$soluong', '$thanhtien', '$idbill')";
        // use exec() because no results are returned
        $conn->exec($sql);
    $conn = null;
}  

function taodonhang($name, $address, $tel, $email, $total, $pttt){
    $conn = ketnoidb();
        $sql = "INSERT INTO tbl_bill(name, address, tel, email, total, pttt)
        VALUES ('$name', '$address', '$tel', '$email', '$total', '$pttt')";
        // use exec() because no results are returned
        $conn->exec($sql);
        $last_id = $conn->lastInsertId();
    $conn = null;
    return $last_id;
}   
    
function tongdonhang(){
    $tongtien = 0;                                
    if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
        foreach($_SESSION['cart'] as $cart_item){
        $thanhtien = $cart_item['soluong'] * $cart_item['DonGia'];
        $tongtien += $thanhtien;                                                                        
        }                              
    }
    return $tongtien;
}

function ketnoidb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "quanlybanhang";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch(PDOException $e) {
        return $e->getMessage();
    }

}




    if (isset($_POST['submitcart'])) {
    //lấy thông tin từ form
    $name = $_POST['name'];
    $address = $_POST['address'];
    $tel = $_POST['phone'];
    $email = $_POST['email'];
    $pttt = 0;
    $total = tongdonhang();

    //insert đơn hàng
    $idbill = taodonhang($name, $address, $tel, $email, $total, $pttt);

    foreach($_SESSION['cart'] as $cart_item){
        $tensp =$cart_item['TenSanPham'];
        $hinhsp =$cart_item["HinhAnh"];
        $dongia =$cart_item['DonGia'];
        $soluong =$cart_item['soluong'];
        $thanhtien =  $dongia * $soluong;
        taogiohang($tensp, $hinhsp, $dongia, $soluong, $thanhtien, $idbill);
    }


    //show thông tin đơn hàng
    unset($_SESSION['cart']);

    echo "<script>
        alert('Đặt hàng thành công, cảm ơn quý khách');
        window.location.href = './index-logined.php';
    </script>";
}
?>