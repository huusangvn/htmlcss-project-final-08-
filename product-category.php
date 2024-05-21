<?php
    //require_once "../config/connect.php";
    $severName = "localhost";
    $userName = "root";
    $password = "";
    $dataBase = "quanlybanhang";
    $conn = mysqli_connect($severName,$userName,$password,$dataBase);
    if (!$conn) {
        die("Lỗi kết nối: " . mysqli_connect_error());
    }
    $id = $_GET["id"];
    $sql1 =  "select * from tbl_danhmuc where id='" . $id . "'"; 
		$danhsach1 = mysqli_query($conn,$sql1);
		$row1 = $danhsach1->fetch_array(MYSQLI_ASSOC);
    
        $sql2 =  "select * from tbl_sanpham where IdDanhMuc='" . $id . "' ORDER by `IdSanPham` "; 
		
		$danhsach = mysqli_query($conn,$sql2);
		
		//Nếu kết quả kết nối không được thì xuất báo lỗi và thoát
		if (!$danhsach) {
			die("Không thể thực hiện câu lệnh SQL: " . $connect->connect_error);
			exit();
		}

    
?>
<!DOCTYPE html>
<html lang="en" class="d">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MeiphoneS | Điện thoại, laptop, phụ kiện chính hãng</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="76x76" href="./assets/favicon/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png" />
    <link rel="manifest" href="./assets/favicon/site.webmanifest" />
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5" />
    <meta name="msapplication-TileColor" content="#da532c" />
    <meta name="theme-color" content="#ffffff" />
    <!-- Font -->
    <link rel="stylesheet" href="./assets/font/stylesheet.css" />

    <!-- Styles -->
    <link rel="stylesheet" href="./assets/css/main.css" />

    <!-- Scripts -->
    <script src="./assets/js/scripts.js"></script>
</head>

<body>
    <!-- Header -->
    <header id="header" class="header"></header>
    <script>
    load("#header", "./templates/header.php");
    </script>
    <div class="container home">
        <!-- Browse Products -->
        <section class="home__container">
            <div class="home__row">
                <h2 class="home__heading">Danh sách sản phẩm</h2>
                <div class="filter-wrap">
                    <button class="filter-btn js-toggle" toggle-target="#home-filter">
                        LỌC
                        <img src="./assets/icons/filter.svg" alt="" class="icon filter-btn__icon" />
                    </button>

                    <div id="home-filter" class="filter hide">
                        <img src="./assets/icons/arrow-up.png" alt="" class="filter__arrow" />
                        <h3 class="filter__heading">Lọc</h3>
                        <form action="" class="filter__form form">
                            <div class="filter__row filter__content">
                                <!-- Filter column 1 -->
                                <div class="filter__col">
                                    <label for="" class="form__label">Giá</label>
                                    <div class="filter__form-group">
                                        <div class="filter__form-slider" style="--min-value: 10%; --max-value: 60%">
                                        </div>
                                    </div>
                                    <div class="filter__form--group filter__form-group--horizontal">
                                        <div>
                                            <label for="" class="form__label form__label--small">Thấp Nhất
                                            </label>
                                            <div class="filter__form-text-input filter__form-text-input--small">
                                                <input type="text" class="filter__form-input" value="$30.00" />
                                            </div>
                                        </div>
                                        <div>
                                            <label for="" class="form__label form__label--small">Lớn Nhât
                                            </label>
                                            <div class="filter__form-text-input filter__form-text-input--small">
                                                <input type="text" class="filter__form-input" value="$100.00" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="filter__separate"></div>

                                <!-- Filter column 2 -->
                                <div class="filter__col">
                                    <label for="" class="form__label">Size/Weight</label>
                                    <div class="filter__form-group">
                                        <div class="form__select-wrap">
                                            <div class="form__select" style="--width: 157px">
                                                500g
                                                <img src="./assets/icons/select-arrow.svg " alt=""
                                                    class="icon form__select-arrow" />
                                            </div>
                                            <div class="form__select">
                                                gam
                                                <img src="./assets/icons/select-arrow.svg" alt=""
                                                    class="icon form__select-arrow" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="filter__form-group">
                                        <div class="form__tags">
                                            <button class="form__tag">Small</button>
                                            <button class="form__tag">Medium</button>
                                            <button class="form__tag">Large</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="filter__separate"></div>

                                <!-- Filter column 3  -->
                                <div class="filter__col">
                                    <label for="" class="form__label">THƯƠNG HIỆU</label>
                                    <div class="filter__form-group">
                                        <div class="filter__form-text-input">
                                            <input type="text" class="filter__form-input"
                                                placeholder="Tìm kiếm thương hiệu" />
                                            <img src="./assets/icons/search.svg" alt=""
                                                class="icon filter__form-input-icon" />
                                        </div>
                                    </div>
                                    <div class="filter__form-group">
                                        <div class="form__tags">
                                            <button class="form__tag">LAPTOP</button>
                                            <button class="form__tag">ĐIỆN THOẠI</button>
                                            <button class="form__tag">ĐỒNG HỒ</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="filter__row filter__footer">
                                <button class="btn btn--text filter__cancel js-toggle" toggle-target="#home-filter">
                                    Hủy Bỏ
                                </button>
                                <button class="btn btn--primary filter__submit js-toggle" toggle-target="#home-filter">
                                    Xem Kết Quả
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row row-cols-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-2">
                <!-- Prooduct Card -->
                <?php
                    $sql = "select *
                    from tbl_sanpham A, tbl_nhasanxuat B, tbl_danhmuc C
                    where A.IdNhaSanXuat = B.IdNhaSanXuat and c.id = A.IddanhMuc and c.tendanhmuc = 'LAPTOP' ORDER by `IdSanPham` DESC";
                    while ($row_sp = mysqli_fetch_assoc($danhsach)) {?>
                <div class="col">
                    <article class="product-card">
                        <div class="product-card__img-wrap">
                            <a href="./product-detail.php?id=<?php echo $row_sp["IdSanPham"]; ?>"><img
                                    src="./images/<?php echo $row_sp["HinhAnh"]; ?>" alt=""
                                    class="product-card__thumb" /></a>
                            <button class="product-card__liked-btn">
                                <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                            </button>
                            <div class="product-card__percent">
                                <img src="./assets/icons/precent.svg" alt="" class="product-card__percent-icon">
                            </div>
                            <div class="product-card__percent-quantity">
                                Giảm <?php echo $row_sp["TiLeGiamGia"]; ?>%
                            </div>
                        </div>
                        <h3 class="product-card__title">
                            <a href="./product-detail.php"><?php echo $row_sp["TenSanPham"]; ?></a>
                        </h3>
                        <p class="product-card__brand">
                            Không phí chuyển đổi khi trả góp 0% qua thẻ tín dụng kỳ hạn 3-6 tháng
                        </p>
                        <div class="product-card__row">
                            <span
                                class="product-card__price"><?php echo number_format($row_sp["DonGia"], 0, '.', '.'); ?><span
                                    class="product-card__price-up"><u>đ</u></span></span>
                            <img src="./assets/icons/star.svg" alt="" class="product-card__star" />
                            <span class="product-card__score">4.3</span>
                        </div>
                    </article>
                </div>
                <?php
                    }
                ?>
            </div>
        </section>


    </div>

    <!-- Footer -->
    <footer id="footer" class="footer"></footer>
    <script>
    load("#footer", "./templates/footer.php");
    </script>

    <a href="#" class="to-top">
        <img src="./assets/icons/arrow-down-2.svg" alt="" class="backtop__arrow">
    </a>
</body>

</html>