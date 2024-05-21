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

    $sql_danhmuc = "SELECT *FROM tbl_danhmuc";
    $danhmuc = mysqli_query($conn,$sql_danhmuc);
    $sql = "SELECT *From tbl_sanpham";                               
    $addToCart = mysqli_query($conn,$sql); 
    
    
     
    $count = 0;                
    if(isset($_SESSION['cart'])){                
    $count = count($_SESSION['cart']);                    
    }

    $countHeart =0;
    if(isset($_SESSION['heart'])){                
    $countHeart = count($_SESSION['heart']);                    
    }
    
?>
<div class="div">
    <div class="cps-container">
        <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
            <div class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                <div class="swiper-slide swiper-slide-active" style="width: 393.333px; margin-right: 10px;"><a
                        href="#"><img
                            src="https://cdn2.cellphones.com.vn/x/https://dashboard.cellphones.com.vn/storage/207x30_TopBanner_Homepage_01.2024_Mb_2-01133.svg"
                            alt="Top Banner Mobile dịch vụ bảo hành" loading="lazy"></a></div>
                <div class="swiper-slide swiper-slide-next" style="width: 393.333px; margin-right: 10px;"><a
                        href="#"><img
                            src="https://cdn2.cellphones.com.vn/x/https://dashboard.cellphones.com.vn/storage/207x30_TopBanner_Homepage_01.2024_Mb_2-02133.svg"
                            alt="TOP banner mobile sản phẩm chính hãng đầy đủ VAT" loading="lazy"></a></div>
                <div class="swiper-slide" style="width: 393.333px; margin-right: 10px;"><a href="#"><img
                            src="https://cdn2.cellphones.com.vn/x/https://dashboard.cellphones.com.vn/storage/207x30_TopBanner_Homepage_01.2024_Mb_2-03133.svg"
                            alt="TOP banner mobile giao nhanh miễn phí" loading="lazy"></a></div>
            </div>
            <div class="swiper-button-prev swiper-button-disabled" tabindex="-1" role="button"
                aria-label="Previous slide" aria-disabled="true"></div>
            <div class="swiper-button-next swiper-button-disabled" tabindex="-1" role="button" aria-label="Next slide"
                aria-disabled="true"></div><span class="swiper-notification" aria-live="assertive"
                aria-atomic="true"></span>
        </div>
    </div>
</div>
<div class="container">
    <div class="top-bar">
        <!-- More -->
        <button class="top-bar__more d-none d-lg-block js-toggle" toggle-target="#navbar">
            <img src="./assets/icons/more.svg" alt="" class="icon top-bar__more-icon" />
        </button>
        <!-- Logo -->
        <a href="./index-logined.php" class="logo top-bar__logo">
            <h1 class="logo__title top-bar__logo-title">MeiphoneS</h1>
            <img src="./assets/icons/logo.ico" alt="CellphoneS" class="logo__img top-bar__logo-img" />
        </a>

        <!-- Navbar -->
        <nav id="navbar" class="navbar hide">
            <button class="navbar__close-btn js-toggle" toggle-target="#navbar">
                <img src="./assets/icons/arrrow-left.svg" alt="" class="icon" />
            </button>

            <a href="./checkout.html" class="nav-btn d-none d-md-flex">
                <img src="./assets/icons/buy.svg" alt="" class="icon nav-bar__icon" />
                <span class="nav-btn__title">Card</span>
                <span class="nav-btn__qnt">3</span>
            </a>

            <a href="#!" class="nav-btn d-none d-md-flex">
                <img src="./assets/icons/heart.svg" alt="" class="icon nav-bar__icon" />
                <span class="nav-btn__title">Favorite</span>
                <span class="nav-btn__qnt">3</span>
            </a>
            <ul class="navbar__list">
                <li class="navbar__item">
                    <button class="navbar__link navbar__link--white js-toggle" toggle-target="#dropdown">
                        <img src="./assets/icons/document2.svg" alt="" class="icon-arrow icon navbar__arrow" />
                        DANH MỤC
                    </button>
                    <div class="dropdown hide" id="dropdown">
                        <div class="dropdown__inner">
                            <div class="top-menu">
                                <div class="top-menu__main">
                                    <!-- Menu Column -->
                                    <div class="menu-column">
                                        <div class="menu-column__icon d-lg-none">
                                            <img src="./assets/img/category/cate-1.1.svg" alt=""
                                                class="menu-column__icon-1" />
                                            <img src="./assets/img/category/cate-1.2.svg" alt=""
                                                class="menu-column__icon-2" />
                                        </div>
                                        <div class="menu-column__content">
                                            <h2 class="menu-column__heading d-lg-none">DANH MỤC</h2>
                                            <ul class="menu-column__list js-menu-list">
                                                <?php
                                                  while ($row_danhmuc = mysqli_fetch_array($danhmuc)) {?>
                                                <li class="menu-column__item">
                                                    <a href="#!"
                                                        class="menu-column__link"><?php echo $row_danhmuc["tendanhmuc"]; ?></a>
                                                    <div class="sub-menu">
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
                                                                            <a href="#!"
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
                                                                            <a href="#!" class="menu-column__link">Dưới
                                                                                10 triệu</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Từ 10
                                                                                - 20 triệu</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Từ 20
                                                                                - 25 triệu</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Từ 25
                                                                                triệu trở
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
                                                                            <a href="#!" class="menu-column__link">Đăng
                                                                                ký S-STUDENT</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Laptop giảm
                                                                                thêm
                                                                                400k</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Điện
                                                                                thoại giảm thêm
                                                                                5%
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Đồng
                                                                                hồ giảm thêm 5%
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Phụ
                                                                                kiện giảm thêm
                                                                                5%</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Hàng
                                                                                cũ giảm thêm
                                                                                5%</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Ưu
                                                                                đãi học viên Edu
                                                                                talk
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Học
                                                                                viện Teky</a>
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
                            </div>
                        </div>
                    </div>
                </li>
                <!-- Địa CHỉ -->
                <li class="navbar__item d-xl-none">
                    <a href="#!" class="navbar__link navbar__link--white ">
                        <img src="./assets/icons/location.svg" alt="" class="icon-arrow icon navbar__arrow" />
                        Xem giá tại <br>
                        Hồ Chí Minh
                        <img src="./assets/icons/arrow-down.svg" alt="" class="icon-arrow icon navbar__arrow" />
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Nabar-overlay -->
        <div class="navbar__overlay js-toggle" toggle-target="#navbar"></div>

        <!-- Action -->
        <div class="top-act">
            <form action="./search-logined.php" method="GET">
                <div class="top-act__group top-act__group--single d-md-none">
                    <input type="text" class="top-act__input" name="txtTop-act__search" placeholder="Bạn cần tìm gì?">
                    <button class="top-act__btn" type="submit">
                        <img src="./assets/icons/search.svg" alt="" class="icon top-act__icon" />
                    </button>
                </div>
            </form>

            <div class="top-act__group d-md-none">
                <div class="top-act__btn-wrap">
                    <button class="top-act__btn">
                        <img src="./assets/icons/heart.svg" alt="" class="icon top-act__icon" />
                        <span class="top-act__title">(<?php echo $countHeart; ?>)</span>
                    </button>
                    <!-- Dropdown -->
                    <div class="act-dropdown">
                        <div class="act-dropdown__inner">
                            <img src="./assets/icons/arrow-up.png" alt="" class="act-dropdown__arrow" />
                            <div class="act-dropdown__top">
                                <h2 class="act-dropdown__title">Bạn có (<?php echo $countHeart; ?>) sản phẩm</h2>
                            </div>
                            <div class="row row-cols-3 gx-2 act-dropdown__list">
                                <!-- Cart preview item 1 -->
                                <?php
                                    $count_Heart = 0;
                                     if(isset($_SESSION['heart']) && count($_SESSION['heart']) > 0){
                                        $tongtien = 0;
                                        foreach($_SESSION['heart'] as $cart_item){
                                            $thanhtien = $cart_item['soluong'] * $cart_item['DonGia'];
                                        ?>
                                <div class="col">
                                    <article class="cart-preview-item">
                                        <div class="cart-preview-item__img-wrap">
                                            <img src="./images/<?php echo $cart_item["HinhAnh"]; ?>" alt=""
                                                class="cart-preview-item__thumb">
                                        </div>
                                        <h3 class="cart-preview-item__title"><?php echo $cart_item["TenSanPham"]; ?>
                                        </h3>
                                        <p class="cart-preview-item__price">
                                            <?php echo number_format($thanhtien,'0','.','.'); ?>đ</p>
                                    </article>
                                </div>

                                <?php $count_Heart++;
                                          }
                                        }
                                    ?>
                            </div>
                            <div class="act-dropdown__separate"></div>
                            <div class="act-dropdown__checkout">
                                <a href="./listHeart.php"
                                    class="btn btn--primary btn--rounded act-dropdown__checkout-btn">
                                    Xem danh sách sản phẩm yêu thích
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="top-act__separate"></div>

                <div class="top-act__btn-wrap">
                    <a href="./checkout.php">
                        <button class="top-act__btn">
                            <img src="./assets/icons/buy.svg" alt="" class="icon top-act__icon" />
                            <span class="top-act__title">
                                (<?php echo $count; ?>)
                            </span>
                        </button>
                    </a>
                    <!-- Dropdown -->
                    <div class="act-dropdown">
                        <div class="act-dropdown__inner">
                            <img src="./assets/icons/arrow-up.png" alt="" class="act-dropdown__arrow">
                            <div class="act-dropdown__top">
                                <h2 class="act-dropdown__title">Bạn có (<?php echo $count; ?>) sản phẩm</h2>
                                <a href="./checkout.php" class="act-dropdown__view-all">Xem tất cả</a>
                            </div>
                            <div class="row row-cols-3 gx-2 act-dropdown__list">
                                <!-- Cart preview item 1 -->
                                <?php
                                    $count = 0;
                                     if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
                                        $tongtien = 0;
                                        foreach($_SESSION['cart'] as $cart_item){
                                            $thanhtien = $cart_item['soluong'] * $cart_item['DonGia'];
                                            $tongtien += $thanhtien;
                                  
                                        ?>
                                <div class="col">
                                    <article class="cart-preview-item">
                                        <div class="cart-preview-item__img-wrap">
                                            <img src="./images/<?php echo $cart_item["HinhAnh"]; ?>" alt=""
                                                class="cart-preview-item__thumb">
                                        </div>
                                        <h3 class="cart-preview-item__title"><?php echo $cart_item["TenSanPham"]; ?>
                                        </h3>
                                        <p class="cart-preview-item__price">
                                            <?php echo number_format($thanhtien,'0','.','.'); ?>đ</p>
                                    </article>
                                </div>

                                <?php $count++;
                                          }
                                        }else
                                        {
                                            $cart_item["soluong"] = 0;
                                            $tongtien = 0;
                                        }
                                    ?>
                            </div>
                            <div class="act-dropdown__bottom">
                                <div class="act-dropdown__row">
                                    <span class="act-dropdown__label">Tổng phụ</span>
                                    <span
                                        class="act-dropdown__value"><?php echo number_format($tongtien,'0','.','.'); ?>đ</span>
                                </div>
                                <div class="act-dropdown__row">
                                    <span class="act-dropdown__label">Nội ô long xuyên</span>
                                    <span class="act-dropdown__value">Miễn phí</span>
                                </div>
                                <div class="act-dropdown__row">
                                    <span class="act-dropdown__label">Phí giao hàng</span>
                                    <span class="act-dropdown__value">69.000đ</span>
                                </div>
                                <div class="act-dropdown__row act-dropdown__row--bold">
                                    <span class="act-dropdown__label">Tổng thanh toán</span>
                                    <span
                                        class="act-dropdown__value"><?php echo number_format($tongtien + 69000,'0','.','.'); ?>đ</span>
                                </div>
                            </div>
                            <div class="act-dropdown__checkout">
                                <a href="./checkout.php"
                                    class="btn btn--primary btn--rounded act-dropdown__checkout-btn">
                                    Thanh toán tất cả
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top-act__user">
                <a href="#!"><img src="./assets/img/avatar.jpg" alt="" class="top-act__avatar" /></a>
                <!-- Dropdown -->
                <div class="act-dropdown top-act__dropdown">
                    <div class="act-dropdown__inner user-menu">
                        <img src="./assets/icons/arrow-up.png" alt=""
                            class="act-dropdown__arrow top-act__dropdown-arrow" />

                        <div class="user-menu__top">
                            <img src="./assets/img/avatar.jpg" alt="" class="user-menu__avatar" />
                            <div>
                                <p class="user-menu__name">Hữu Sang</p>
                                <p>
                                    <?php     
                                if(isset($_SESSION['Email']))
                                         echo $_SESSION['Email']; ?>
                                </p>
                            </div>
                        </div>

                        <ul class="user-menu__list">
                            <li>
                                <a href="./profile.html" class="user-menu__link">Trang cá nhân</a>
                            </li>
                            <li>
                                <a href="./listHeart.php" class="user-menu__link">Danh sách yêu thích</a>
                            </li>
                            <li class="user-menu__separate">
                                <a href="#!" class="user-menu__link" id="switch-theme-btn">
                                    <span>Chế độ tối</span>
                                    <img src="./assets/icons/sun-dark.svg" alt="" class="icon user-menu__icon" />
                                </a>
                            </li>
                            <li>
                                <a href="#!" class="user-menu__link">Cài đặt</a>
                            </li>
                            <li class="user-menu__separate">
                                <a href="./logout.php" class="user-menu__link">Đăng xuất</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>