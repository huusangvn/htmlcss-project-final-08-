<?php
	// Hủy SESSION
	unset($_SESSION['Email']);
	
	// Chuyển hướng về trang index.php
	echo "<script>
    alert('Bạn có chắc muốn thoát');
    window.location.href = './index.php';
    </script>";
?>