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
    //xoa san pham
        if(isset($_SESSION['cart']) && isset($_GET['xoa'])){
             $id=$_GET['xoa'];
             foreach($_SESSION['cart'] as $cart_item){

                 if($cart_item['id']!=$id)
                 {
                      $product[] =array('TenSanPham'=>$cart_item['TenSanPham'],'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],
                        'DonGia'=>$cart_item['DonGia'],'HinhAnh'=>$cart_item['HinhAnh'],'MaSanPham'=>$cart_item['MaSanPham']);
                 }
             $_SESSION['cart'] = $product;
                echo "<script>alert('Xóa sản phẩm thành công');
        window.location.href='./checkout.php';
        </script>";
             }
         }

 //them sp vao gio hang
    if(isset($_POST['btnAddToCart'])){
        $id=$_GET['id'];
        $soluong=1;
        $sql="SELECT * FROM tbl_sanpham WHERE IdSanPham ='".$id."' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

        if($row){
            $new_product = array(array('TenSanPham'=>$row['TenSanPham'],
            'id'=>$id, 
            'soluong'=>$soluong,
            'DonGia'=>$row['DonGia'],
            'HinhAnh'=>$row['HinhAnh'],
            'MaSanPham'=>$row['MaSanPham']));
            //kiem tra sesion gio hang da ton tai
            if(isset($_SESSION['cart'])){
                $found = false;
                foreach($_SESSION['cart'] as $cart_item){
                    //neu du lieu truung
                    if($_cart_item['id']==$id){
                        $product[] =array('TenSanPham'=>$cart_item['TenSanPham'],
                            'id'=>$cart_item['id'],
                            'soluong'=>$soluong+1,
                            'DonGia'=>$cart_item['DonGia'],
                            'HinhAnh'=>$cart_item['HinhAnh'],
                            'MaSanPham'=>$cart_item['MaSanPham']);
                        $found = true;

                    }else{  
                        //du lieu ko trung
                        $product[] =array('TenSanPham'=>$cart_item['TenSanPham'],'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],
                        'DonGia'=>$cart_item['DonGia'],'HinhAnh'=>$cart_item['HinhAnh'],'MaSanPham'=>$cart_item['MaSanPham']);
                    }
                }
                if($found == false){
                    //lien ket new product and product
                    $_SESSION['cart'] = array_merge($product, $new_product);
                }
                else{
                    $_SESSION['cart'] = $product;
                }
            }else{
                $_SESSION['cart'] =  $new_product;
            }
        }
        echo "<script>alert('Thêm sản phẩm thành công');
        window.location.href='./index-logined.php';
        </script>";
    }

     // Tăng số lượng sản phẩm
    if(isset($_GET['cong']) && isset($_SESSION['cart'])){
    $id = $_GET['cong'];
    $product = array();

    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id'] != $id){
            $product[] = $cart_item;
        }else{
            $tangsoluong = $cart_item['soluong'] + 1;
            if($tangsoluong <= 9){
                $cart_item['soluong'] = $tangsoluong;
            }
            $product[] = $cart_item;
        }
    }

    $_SESSION['cart'] = $product;

    header('Location: ./checkout.php');
}

// Giảm số lượng sản phẩm
if(isset($_GET['tru']) && isset($_SESSION['cart'])){
    $id = $_GET['tru'];
    $product = array();

    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id'] != $id){
            $product[] = $cart_item;
        }else{
            $tangsoluong = $cart_item['soluong'] - 1;
            if($tangsoluong >= 1){
                $cart_item['soluong'] = $tangsoluong;
            }
            $product[] = $cart_item;
        }
    }

    $_SESSION['cart'] = $product;

    header('Location: ./checkout.php');
}


    //Thêm sản phẩm yêu thích
    if(isset($_POST['btnAddToHeart'])){
        $id=$_GET['id'];
        $soluong=1;
        $sql="SELECT * FROM tbl_sanpham WHERE IdSanPham ='".$id."' LIMIT 1";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

        if($row){
            $new_product = array(array('TenSanPham'=>$row['TenSanPham'],
            'id'=>$id, 
            'soluong'=>$soluong,
            'DonGia'=>$row['DonGia'],
            'HinhAnh'=>$row['HinhAnh'],
            'MaSanPham'=>$row['MaSanPham']));
            //kiem tra sesion gio hang da ton tai
            if(isset($_SESSION['heart'])){
                $found = false;
                foreach($_SESSION['heart'] as $cart_item){
                    //neu du lieu truung
                    if($_cart_item['id']==$id){
                        $product[] =array('TenSanPham'=>$cart_item['TenSanPham'],
                            'id'=>$cart_item['id'],
                            'soluong'=>$soluong+1,
                            'DonGia'=>$cart_item['DonGia'],
                            'HinhAnh'=>$cart_item['HinhAnh'],
                            'MaSanPham'=>$cart_item['MaSanPham']);
                        $found = true;

                    }else{  
                        //du lieu ko trung
                        $product[] =array('TenSanPham'=>$cart_item['TenSanPham'],'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],
                        'DonGia'=>$cart_item['DonGia'],'HinhAnh'=>$cart_item['HinhAnh'],'MaSanPham'=>$cart_item['MaSanPham']);
                    }
                }
                if($found == false){
                    //lien ket new product and product
                    $_SESSION['heart'] = array_merge($product, $new_product);
                }
                else{
                    $_SESSION['heart'] = $product;
                }
            }else{
                $_SESSION['heart'] =  $new_product;
            }
        }
        echo "<script>alert('Bạn vừa thích một sản phẩm');
        window.location.href='./index-logined.php';
        </script>";
    }

    //Xóa yêu thích
        if(isset($_SESSION['heart']) && isset($_GET['xoa'])){
             $id=$_GET['xoa'];
             foreach($_SESSION['heart'] as $cart_item){

                 if($cart_item['id']!=$id)
                 {
                      $product[] =array('TenSanPham'=>$cart_item['TenSanPham'],'id'=>$cart_item['id'], 'soluong'=>$cart_item['soluong'],
                        'DonGia'=>$cart_item['DonGia'],'HinhAnh'=>$cart_item['HinhAnh'],'MaSanPham'=>$cart_item['MaSanPham']);
                 }
             $_SESSION['heart'] = $product;
                echo "<script>alert('Xóa sản phẩm thành công');
                window.location.href='./listHeart.php';
                </script>";
             }
         }
?>