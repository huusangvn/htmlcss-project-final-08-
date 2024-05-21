<?php
    session_start();
    $severName = "localhost";
    $userName = "root";
    $password = "";
    $dataBase = "quanlybanhang";
    $conn = mysqli_connect($severName,$userName,$password,$dataBase);
    if (!$conn) {
        die("Lỗi kết nối: " . mysqli_connect_error());
    }
	// Lấy thông tin từ FORM
		if(isset($_POST["Login"])){
		$Email = $_POST['txtEmail'];
		$Password = $_POST['txtPassword'];
	}
	
	// Kiểm tra
	// if(trim($Email) == "")
	// 	echo("Tên đăng nhập không được bỏ trống!");
	// elseif(trim($Password) == "")
	// 	echo("Mật khẩu không được bỏ trống!");
	// else
	{
		// Mã hóa mật khẩu
		$Password = md5($Password);
		
		// Kiểm tra người dùng có tồn tại không
		$sql_kiemtra = "SELECT * from acc_khachhang WHERE Email = '$Email' AND MatKhau = '$Password'";	
		
		
		$danhsach = mysqli_query($conn,$sql_kiemtra);
		
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}
		
		$dong = $danhsach->fetch_array(MYSQLI_ASSOC);
		if($dong)
		{
			if($dong['TrangThai'] == 1)
			{
				// Đăng ký SESSION
				$_SESSION['Email'] = $Email;
				$_SESSION['IdKhachHang'] = $dong["IdKhachHang"];
				$_SESSION['toastMSB'] = "Thành Công";

				// Chuyển hướng về trang index.php
				echo "<script>
				alert('Đăng nhập thành công!');
				window.location.href='./index-logined.php';
				</script>";
	
			}
			else
			{
				echo "<script>
				alert('Người dùng đã bị khóa tài khoản!');
				window.location.href='./sign-in.html';
				</script>";
			}	
		
		}
		else
		{
			echo "<script>
				alert('Tên đăng nhập hoặc mật khẩu không chính xác!');
				window.location.href='./sign-in.html';
				</script>";
		}
	}
	
?>