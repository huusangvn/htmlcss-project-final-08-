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
               
?>
<div class="container">
    <div class="top-bar">
        <!-- More -->
        <button class="top-bar__more d-none d-lg-block js-toggle" toggle-target="#navbar">
            <img src="./assets/icons/more.svg" alt="" class="icon top-bar__more-icon" />
        </button>
        <!-- Logo -->
        <a href="./" class="logo top-bar__logo">
            <h1 class="logo__title top-bar__logo-title">MeiphoneS</h1>
            <img src="./assets/icons/logo.ico" alt="CellphoneS" class="logo__img top-bar__logo-img" />
        </a>

        <!-- Navbar -->
        <nav id="navbar" class="navbar hide">
            <button class="navbar__close-btn js-toggle" toggle-target="#navbar">
                <img src="./assets/icons/arrrow-left.svg" alt="" class="icon" />
            </button>

            <a href="./checkout.php" class="nav-btn d-none d-md-flex">
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
            <form action="./search.php" method="GET">
                <div class="top-act__group top-act__group--single d-md-none">
                    <input type="text" class="top-act__input" name="txtTop-act__search" placeholder="Bạn cần tìm gì?">
                    <button class="top-act__btn" type="submit">
                        <img src="./assets/icons/search.svg" alt="" class="icon top-act__icon" />
                    </button>
                </div>
            </form>
            <a href="./sign-in.html" class="btn btn--text d-md-none">Đăng nhập</a>
            <a href="./sign-up.html" class="top-act__sign-up btn btn--primary ">Đăng ký</a>
        </div>
    </div>
</div>