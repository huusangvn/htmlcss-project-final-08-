<?php
    //Thêm 
    $id = $_GET['id'];

    //Sửa 
     //---- xử lý sửa
    // Lấy thông tin từ FORM
	$HoVaTen = $_POST['name'];
	$IdNhaSanXuat = $_POST['IdNhaSanXuat'];
	$SoDienThoai = $_POST['phone'];
	// Kiểm tra
	if(trim($HoVaTen) != "")
	{	
		$sql = "update	acc_khachhang
				SET		HoVaTen = '$HoVaTen',
						SoDienThoai = '$SoDienThoai',
				WHERE	IdKhachHang = $id";
		
		$danhsach = mysqli_query($conn,$sql);
        echo "<script>alert('Cập nhật thành công');</script>";
        header("Location: index-logined.php");
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}else{
            echo("Chỉnh sửa bài viết thành công!");
        }
	}
?>