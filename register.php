<?php
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
		$RePassword = $_POST['txtRePassword'];
	}
if($Password != $RePassword){
	echo "<script>
	alert('Mật khẩu nhập lại không đúng, vui lòng kiểm tra lại!');
	window.location.href = 'sign-up.html';
	</script>";
}
else{
			// Kiểm tra người dùng đã tồn tại chưa
			$sql_kiemtra = "SELECT * FROM acc_khachhang WHERE Email = '$Email'";

			$danhsach = mysqli_query($conn,$sql_kiemtra);

			if($danhsach)
			{
				// Mã hóa mật khẩu
				$Password = md5($Password);
				$sql_them = "INSERT INTO `acc_khachhang`(`Email`, `MatKhau`,`TrangThai`)
				VALUES ('$Email','$Password','1')";
				$themnd = mysqli_query($conn,$sql_them);

				if($themnd){
					echo "<script>
					alert('Đăng ký thành công!');
					window.location.href = 'sign-in.html';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Đăng ký không thành công!');
					window.location.href = 'sign-up.html';
					</script>";
				}
			}	
			else
			{
				echo "
				<script>
					alert('Người dùng với tên đăng nhập đã được sử dụng!');
					window.location.href = 'sign-up.html';
				</script>";
			}
}
?>