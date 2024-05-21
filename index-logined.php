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
     $sql_danhmuc = "SELECT *FROM tbl_danhmuc";
    $danhmuc = mysqli_query($conn,$sql_danhmuc);    
?>
<!DOCTYPE html>
<html lang="en" class="d" class="htm">

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
    load("#header", "./templates/header-logined.php");
    </script>
    <div class="container home">
        <!-- Slideshow -->
        <div class="banner d-lg-none">
            <div class="row banner__row">
                <div class="col-2">
                    <div class="menu-column__content">
                        <div class="menu-column__content menu-column__content--inner">
                            <ul class="menu-column__list js-menu-list menu-column__list--styles">
                                <?php
                                while ($row_danhmuc = mysqli_fetch_array($danhmuc)) {?>
                                <li class="menu-column__item menu-column__item--current">
                                    <a href="./product-category.php?id=<?php echo $row_danhmuc["id"]; ?>"
                                        class="menu-column__link">
                                        <?php echo $row_danhmuc["tendanhmuc"]; ?>
                                    </a>
                                    <div class="sub-menu banner__sub-menu">
                                        <!-- sub-menu__column 1-->
                                        <div class="sub-menu__column">
                                            <!-- Menu-column 1.1 -->
                                            <div class="menu-column">
                                                <div class="menu-column__icon">
                                                    <img src="./assets/img/category/cate-2.1.svg" alt=""
                                                        class="menu-column__icon-1" />
                                                    <img src="./assets/img/category/cate-2.2.svg" alt=""
                                                        class="menu-column__icon-2" />
                                                </div>
                                                <div class="menu-column__content">
                                                    <h2 class="menu-column__heading">Nhà sản xuất</h2>
                                                    <ul class="menu-column__list">
                                                        <?php
                                                                        $sql_nsx = "SELECT * FROM tbl_nhasanxuat";
                                                                        $result_nsx = mysqli_query($conn,$sql_nsx);
                                                                        while($row_nsx = mysqli_fetch_array($result_nsx)) {?>
                                                        <li class="menu-column__item">
                                                            <a href="./product-category.php?id=<?php echo $row_nsx["IdNhaSanXuat"]; ?>"
                                                                class="menu-column__link"><?php echo $row_nsx["TenNhaSanXuat"]; ?></a>
                                                        </li>
                                                        <?php
                                                                        }
                                                                        ?>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sub-menu__column 2 -->
                                        <div class="sub-menu__column">
                                            <!-- Menu-column 2.1 -->
                                            <div class="menu-column">
                                                <div class="menu-column__icon">
                                                    <img src="./assets/img/category/cate-4.1.svg" alt=""
                                                        class="menu-column__icon-1" />
                                                    <img src="./assets/img/category/cate-4.2.svg" alt=""
                                                        class="menu-column__icon-2" />
                                                </div>
                                                <div class="menu-column__content">
                                                    <h2 class="menu-column__heading">Sản phẩm</h2>
                                                    <ul class="menu-column__list">
                                                        <?php
                                                            $sql_danhmuc = "SELECT * FROM tbl_danhmuc";
                                                            $result_danhmuc = mysqli_query($conn,$sql_danhmuc);
                                                            while($row_danhmuc = mysqli_fetch_array($result_danhmuc)) {?>
                                                        <li class="menu-column__item">
                                                            <a href="#!"
                                                                class="menu-column__link"><?php echo $row_danhmuc["tendanhmuc"]; ?></a>
                                                        </li>
                                                        <?php
                                                        }
                                                        ?>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Sub-menu__column 3 -->
                                        <div class="sub-menu__column">
                                            <!-- Menu-column 3.1 -->
                                            <div class="menu-column">
                                                <div class="menu-column__icon">
                                                    <img src="./assets/img/category/cate-5.1.svg" alt=""
                                                        class="menu-column__icon-1" />
                                                    <img src="./assets/img/category/cate-5.2.svg" alt=""
                                                        class="menu-column__icon-2" />
                                                </div>
                                                <div class="menu-column__content">
                                                    <h2 class="menu-column__heading">Mức giá</h2>
                                                    <ul class="menu-column__list">
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Dưới 10 triệu</a>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Từ 10 - 20 triệu</a>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Từ 20 - 25 triệu</a>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Từ 25 triệu trở
                                                                lên</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- Menu-columns 3.2 -->
                                            <div class="menu-column d-xxl-none">
                                                <div class="menu-column__icon">
                                                    <img src="./assets/img/category/cate-6.1.svg" alt=""
                                                        class="menu-column__icon-1" />
                                                    <img src="./assets/img/category/cate-6.2.svg" alt=""
                                                        class="menu-column__icon-2" />
                                                </div>
                                                <div class="menu-column__content ">
                                                    <h2 class="menu-column__heading">Ưu đãi sinh viên
                                                    </h2>
                                                    <ul class="menu-column__list">
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Đăng ký S-STUDENT</a>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Laptop giảm thêm
                                                                400k</a>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Điện thoại giảm thêm
                                                                5%
                                                            </a>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Đồng hồ giảm thêm 5%
                                                            </a>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Phụ kiện giảm thêm
                                                                5%</a>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Hàng cũ giảm thêm
                                                                5%</a>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Ưu đãi học viên Edu
                                                                talk
                                                            </a>
                                                        </li>
                                                        <li class="menu-column__item">
                                                            <a href="#!" class="menu-column__link">Học viện Teky</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <?php
                                                  }
                                            ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-7">
                    <div class="slideshow">
                        <div class="slideshow__inner">
                            <div class="slideshow__item">

                                <a href="#!" class="slideshow__link">
                                    <picture>
                                        <source media="(max-width: 767.98px)" srcset="images/thumb0.webp" />
                                        <img src="images/thumb0.webp" alt="" id="slideshow" class="slideshow__img">
                                    </picture>
                                </a>
                            </div>
                            <div class="row row-cols-4 ">
                                <div class="col">
                                    <div class="banner__info">
                                        <button onclick="slideshow(1)">
                                            <div>
                                                MỪNG KHAI TRƯƠNG<br>
                                                Ưu đãi hấp dẫn
                                            </div>
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="banner__info">
                                        <button onclick="slideshow(2)">
                                            <div>IPHONE 15 SERIES<br>Deal hời mua ngay</div>
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="banner__info">
                                        <button onclick="slideshow(3)">
                                            <div>GALAXY S24 SERIES<br>Giá tốt chốt ngay</div>
                                        </button>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="banner__info">
                                        <button onclick="slideshow(4)">
                                            <div>IPAD PRO M4 2024<br>Đăng ký nhận tin</div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="banner-right">

                        <a href="#!" class="banner-right__item button__link">
                            <img src="./images/right-baner-1.webp" alt="" class="banner-right__img">
                        </a>

                        <a href="#!" class="banner-right__item button__link">
                            <img src="./images/right-baner-2.webp" alt="" class="banner-right__img">
                        </a>

                        <a href="#!" class="banner-right__item button__link">
                            <img src="./images/right-baner-3.webp" alt="" class="banner-right__img">
                        </a>
                    </div>
                </div>
            </div>

        </div>
        <section class="home__container home__container--special-desk-update">
            <a href="./sign-in.html"><img src="./assets/img/product/smember-30-special-desk-update.gif" alt=""
                    class="home__container--special-desk-update__img"></a>
        </section>
        <!-- Browse Categories -->
        <section class="home__container home__container--hot-sale d-lg-none">
            <div class="home__row">
                <img src="./assets/img/product/hot-sale-cuoi-tuan-20-03-2024.gif" alt="">
            </div>
            <div class="home__cate row row-cols-5 row-cols-md-1 gx-2">
                <!-- Category Item-1 -->
                <?php
                    $count=0;
                     $sql = "select *
                    from tbl_sanpham A, tbl_nhasanxuat B, tbl_danhmuc C
                    where A.IdNhaSanXuat = B.IdNhaSanXuat and c.id = A.IddanhMuc and c.tendanhmuc = 'LAPTOP' ORDER by `IdSanPham` DESC";
                    $sanpham = mysqli_query($conn, $sql);
                    while ($row_sp = mysqli_fetch_assoc($sanpham)) {?>

                <div class="col">
                    <article class="product-card">
                        <div class="product-card__img-wrap">
                            <a href="./product-detail-logined.php?id=<?php echo $row_sp["IdSanPham"]; ?>"><img
                                    src="./images/<?php echo $row_sp["HinhAnh"]; ?>" alt=""
                                    class="product-card__thumb" /></a>
                            <button class="product-card__liked-btn">
                                <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                            </button>
                            <div class="product-card__percent">
                                <img src="./assets/icons/precent.svg" alt="" class="product-card__percent-icon">
                            </div>
                            <div class="product-card__percent-quantity">
                                Giảm <?php echo $row_sp["TiLeGiamGia"]; ?> %
                            </div>
                        </div>
                        <h3 class="product-card__title">
                            <a href="./product-detail-logined.php"><?php echo $row_sp["TenSanPham"]; ?></a>
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
                $count++;
                if(    $count==5){
                    break;
                }
                    }
                ?>
            </div>
        </section>
        <!-- Browse Products -->
        <section class="home__container">
            <div class="home__row">
                <h2 class="home__heading">LAPTOP</h2>
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
                <!-- Prooduct Card 1 -->
                <?php
                    $count=0;
                    $sql = "select *
                    from tbl_sanpham A, tbl_nhasanxuat B, tbl_danhmuc C
                    where A.IdNhaSanXuat = B.IdNhaSanXuat and c.id = A.IddanhMuc and c.tendanhmuc = 'LAPTOP' ORDER by `IdSanPham` DESC";
                    $sanpham = mysqli_query($conn, $sql);
                    while ($row_sp = mysqli_fetch_assoc($sanpham)) {?>
                <div class="col">
                    <article class="product-card">
                        <div class="product-card__img-wrap">
                            <a href="./product-detail-logined.php?id=<?php echo $row_sp["IdSanPham"]; ?>"><img
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
                            <a href="./product-detail-logined.php"><?php echo $row_sp["TenSanPham"]; ?></a>
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
                $count++;
                if( $count==5){
                    break;
                }
         
                    }
                ?>
            </div>
        </section>


        <!-- 222222222222 -->
        <section class="home__container">
            <div class="home__row">
                <h2 class="home__heading">ĐIỆN THOẠI</h2>
            </div>
            <div class="row row-cols-5 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-2">
                <!-- Prooduct Card 1 -->
                <?php
                    $count=0;
                     $sql = "select *
                    from tbl_sanpham A, tbl_nhasanxuat B, tbl_danhmuc C
                    where A.IdNhaSanXuat = B.IdNhaSanXuat and c.id = A.IddanhMuc and c.tendanhmuc = 'Điện thoại' ORDER by `IdSanPham` DESC";
                    $sanpham = mysqli_query($conn, $sql);
                    while ($row_sp = mysqli_fetch_assoc($sanpham)) {?>

                <div class="col">
                    <article class="product-card">
                        <div class="product-card__img-wrap">
                            <a href="./product-detail-logined.php?id=<?php echo $row_sp["IdSanPham"]; ?>"><img
                                    src="./images/<?php echo $row_sp["HinhAnh"]; ?>" alt=""
                                    class="product-card__thumb" /></a>
                            <button class="product-card__liked-btn">
                                <img src="./assets/icons/heart.svg" alt="" class="like-btn__icon icon" />
                            </button>
                            <div class="product-card__percent">
                                <img src="./assets/icons/precent.svg" alt="" class="product-card__percent-icon">
                            </div>
                            <div class="product-card__percent-quantity">
                                Giảm <?php echo $row_sp["TiLeGiamGia"]; ?> %
                            </div>
                        </div>
                        <h3 class="product-card__title">
                            <a href="./product-detail-logined.php"><?php echo $row_sp["TenSanPham"]; ?></a>
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
                $count++;
                if(    $count==5){
                    break;
                }
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

    <div class="loader">
        <div class="dot-spinner">
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
            <div class="dot-spinner__dot"></div>
        </div>
    </div>

    <!-- Modal: address new shipping address -->
    <?php
    $sql = "SELECT *FROM acc_khachhang";
    $khachhang = mysqli_query($conn, $sql);
    $row_khachhang = mysqli_fetch_assoc($khachhang);
    ?>
    <div id="add-new-address" class="modal show d-none" style="--content-width: 650px">
        <form action="./update-info.php?id=<?php $row_khachhang["IdKhachHang"]; ?>" class="form">
            <div class="modal__content">
                <form action="" class="form">
                    <h2 class="modal__heading">Cập nhật thông tin</h2>
                    <div class="modal__body">
                        <div class="form">
                            <div class="form__group">
                                <label for="email" class="form__label form__label--small">Email</label>
                                <div class="form__text-input form__text-input--small">
                                    <input type="email" name="email" id="email" placeholder="email" class="form__input"
                                        readonly value="<?php echo $_SESSION["Email"]; ?>" />
                                    <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                </div>
                                <p class="form__error">Name must be at least 2 characters</p>
                            </div>
                            <div class="form__group">
                                <label for="name" class="form__label form__label--small">Họ và tên</label>
                                <div class="form__text-input form__text-input--small">
                                    <input type="text" name="name" id="name" placeholder="Name" class="form__input"
                                        required minlength="2" />
                                    <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                </div>
                                <p class="form__error">Name must be at least 2 characters</p>
                            </div>
                            <div class="form__group">
                                <label for="phone" class="form__label form__label--small">Số Điện Thoại</label>
                                <div class="form__text-input form__text-input--small">
                                    <input type="tel" name="phone" id="phone" placeholder="Phone" class="form__input"
                                        required minlength="10" />
                                    <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                                </div>
                                <p class="form__error">Phone must be at least 10 characters</p>
                            </div>
                        </div>
                        <div class="form__group d-none">
                            <label for="address" class="form__label form__label--small">Hinh Ảnh</label>
                            <div class="form__text-input form__text-input--small">
                                <input type="file" name="phone" id="phone" placeholder="Phone" class="form__input"
                                    required />
                                <img src="./assets/icons/form-error.svg" alt="" class="form__input-icon-error" />
                            </div>
                            <p class="form__error">Address not empty</p>
                        </div>
                    </div>
                    <div class="modal__bottom">
                        <button class="btn btn--small btn--text modal__btn js-toggle" toggle-target="#add-new-address">
                            Thoát
                        </button>
                        <button type="submit" class="btn btn--small btn--primary modal__btn btn--no-margin ">
                            Cập nhật
                        </button>
                    </div>
                </form>
            </div>
            <div class="modal__overlay"></div>
        </form>
    </div>
    <script>
    window.addEventListener("load", () => {
        const loader = document.querySelector(".loader");

        setTimeout(() => {
            loader.classList.add("loader--hidden");
            loader.addEventListener("transitionend", () => {
                loader.parentNode.removeChild(loader);
            });
        }, 1000);
    });

    window.addEventListener("scroll", () => {
        const toTop = document.querySelector(".to-top");
        if (window.scrollY < 100) {
            toTop.classList.remove("active");
        } else {
            toTop.classList.add("active");
        }
    });

    var hinhanh = [];
    var j = 0;
    var imgTag = document.getElementById("slideshow");
    var imgList = [
        "images/thumb0.webp",
        "images/thumb1.webp",
        "images/thumb2.webp",
        "images/thumb3.webp",
        "images/thumb4.webp",
    ];
    i = 0;

    function ChangeImg_auto() {
        imgTag.setAttribute("src", imgList[i]);
        i++;
        if (i == imgList.length) i = 0;
    }

    setInterval(ChangeImg_auto, 2000);

    function loading() {
        for (let i = 0; i < 5; i++) {
            hinhanh[i] = new Image();
            hinhanh[i].src = "images/thumb" + i + ".webp";
        }
        loadtitle();
    }

    function slideshow(x) {
        switch (x) {
            case 1:
                j = 0;
                break;
            case 2:
                if (j > 0) j--;
                break;
            case 3:
                if (j < hinhanh.length - 1) j++;
                break;
            case 4:
                j = hinhanh.length - 1;
                break;
            default:
                break;
        }
        document.getElementById("slideshow").src = hinhanh[j].src;
        loadtitle();
    }

    function loadtitle() {
        var k = j + 1;
        document.getElementById("title").innerHTML = k + "/" + hinhanh.length;
    }
    </script>
</body>

</html>