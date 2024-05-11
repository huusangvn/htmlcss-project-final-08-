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
            <ul class="navbar__list js-dropdown-list">
                <li class="navbar__item">
                    <a href="#!" class="navbar__link">
                        DANH MỤC
                        <img src="./assets/icons/arrow-down.svg" alt="" class="icon navbar__arrow" />
                    </a>

                    <div class="dropdown js-dropdown">
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
                                                                    <h2 class="menu-column__heading">TV & Video</h2>
                                                                    <ul class="menu-column__list">
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Shop
                                                                                all TVs</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">TVs
                                                                                by Size</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Smart
                                                                                TVs</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Roku
                                                                                TVs</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Streaming</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">TV
                                                                                Mounts & Accessories</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">DVD &
                                                                                Blu-Ray Players</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Menu-columns 1.2 -->
                                                            <div class="menu-column">
                                                                <div class="menu-column__icon">
                                                                    <img src="./assets/img/category/cate-3.1.svg" alt=""
                                                                        class="menu-column__icon-1" />
                                                                    <img src="./assets/img/category/cate-2.2.svg" alt=""
                                                                        class="menu-column__icon-2" />
                                                                </div>
                                                                <div class="menu-column__content">
                                                                    <h2 class="menu-column__heading">
                                                                        Wearable Technology
                                                                    </h2>
                                                                    <ul class="menu-column__list">
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Galaxy
                                                                                Watch</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Apple
                                                                                Watch</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Fitness
                                                                                Trackers</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Virtual
                                                                                Reality</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Headphones</a>
                                                                        </li>
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
                                                                    <h2 class="menu-column__heading">Computers</h2>
                                                                    <ul class="menu-column__list">
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Shop
                                                                                All Computers</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Laptops</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">PC
                                                                                Gaming</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Monitors</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Chromebook</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Printers &
                                                                                Ink</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Shop
                                                                                all TVs</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Computer
                                                                                Accessories</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Desktops</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Tax
                                                                                Software</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Computer
                                                                                Software</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">PC
                                                                                Finder</a>
                                                                        </li>
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
                                                                    <h2 class="menu-column__heading">Savings</h2>
                                                                    <ul class="menu-column__list">
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Tech
                                                                                Savings</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Overstock
                                                                                Savings</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Tech
                                                                                Rollbacks</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <!-- Menu-columns 3.2 -->
                                                            <div class="menu-column">
                                                                <div class="menu-column__icon">
                                                                    <img src="./assets/img/category/cate-6.1.svg" alt=""
                                                                        class="menu-column__icon-1" />
                                                                    <img src="./assets/img/category/cate-6.2.svg" alt=""
                                                                        class="menu-column__icon-2" />
                                                                </div>
                                                                <div class="menu-column__content">
                                                                    <h2 class="menu-column__heading">Cell Phones
                                                                    </h2>
                                                                    <ul class="menu-column__list">
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Wireless
                                                                                Deals</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">5G
                                                                                Phones
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Prepaid
                                                                                Phones
                                                                                & Plans
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Refurbished
                                                                                Phones</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">iPhone
                                                                                Accessories</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!" class="menu-column__link">Cases
                                                                                & Screen Protectors
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Walmart
                                                                                Protection Plan</a>
                                                                        </li>
                                                                        <li class="menu-column__item">
                                                                            <a href="#!"
                                                                                class="menu-column__link">Unlocked
                                                                                Phones</a>
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
                <li class="navbar__item">
                    <a href="#!" class="navbar__link">Grocery <img src="./assets/icons/arrow-down.svg" alt=""
                            class="icon navbar__arrow" /></a>
                    <div class="dropdown">
                        <div class="dropdown__inner">
                            <div class="top-menu">
                                <div class="sub-menu sub-menu--not-main">
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
                                                <h2 class="menu-column__heading">TV & Video</h2>
                                                <ul class="menu-column__list">
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Shop all TVs</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">TVs by Size</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Smart TVs</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Roku TVs</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Streaming</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">TV Mounts &
                                                            Accessories</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">DVD & Blu-Ray Players</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Menu-columns 1.2 -->
                                        <div class="menu-column">
                                            <div class="menu-column__icon">
                                                <img src="./assets/img/category/cate-3.1.svg" alt=""
                                                    class="menu-column__icon-1" />
                                                <img src="./assets/img/category/cate-2.2.svg" alt=""
                                                    class="menu-column__icon-2" />
                                            </div>
                                            <div class="menu-column__content">
                                                <h2 class="menu-column__heading">Wearable Technology</h2>
                                                <ul class="menu-column__list">
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Galaxy Watch</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Apple Watch</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Fitness Trackers</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Virtual Reality</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Headphones</a>
                                                    </li>
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
                                                <h2 class="menu-column__heading">Computers</h2>
                                                <ul class="menu-column__list">
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Shop All Computers</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Laptops</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">PC Gaming</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Monitors</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Chromebook</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Printers & Ink</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Shop all TVs</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Computer Accessories</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Desktops</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Tax Software</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Computer Software</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">PC Finder</a>
                                                    </li>
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
                                                <h2 class="menu-column__heading">Savings</h2>
                                                <ul class="menu-column__list">
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Tech Savings</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Overstock Savings</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Tech Rollbacks</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Menu-columns 3.2 -->
                                        <div class="menu-column">
                                            <div class="menu-column__icon">
                                                <img src="./assets/img/category/cate-6.1.svg" alt=""
                                                    class="menu-column__icon-1" />
                                                <img src="./assets/img/category/cate-6.2.svg" alt=""
                                                    class="menu-column__icon-2" />
                                            </div>
                                            <div class="menu-column__content">
                                                <h2 class="menu-column__heading">Cell Phones</h2>
                                                <ul class="menu-column__list">
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Wireless Deals</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">5G Phones </a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Prepaid Phones & Plans
                                                        </a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Refurbished Phones</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">iPhone Accessories</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Cases & Screen Protectors
                                                        </a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Walmart Protection
                                                            Plan</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Unlocked Phones</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- sub-menu__column 4-->
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
                                                <h2 class="menu-column__heading">TV & Video</h2>
                                                <ul class="menu-column__list">
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Shop all TVs</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">TVs by Size</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Smart TVs</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Roku TVs</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Streaming</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">TV Mounts &
                                                            Accessories</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">DVD & Blu-Ray Players</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- Menu-columns 1.2 -->
                                        <div class="menu-column">
                                            <div class="menu-column__icon">
                                                <img src="./assets/img/category/cate-3.1.svg" alt=""
                                                    class="menu-column__icon-1" />
                                                <img src="./assets/img/category/cate-2.2.svg" alt=""
                                                    class="menu-column__icon-2" />
                                            </div>
                                            <div class="menu-column__content">
                                                <h2 class="menu-column__heading">Wearable Technology</h2>
                                                <ul class="menu-column__list">
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Galaxy Watch</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Apple Watch</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Fitness Trackers</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Virtual Reality</a>
                                                    </li>
                                                    <li class="menu-column__item">
                                                        <a href="#!" class="menu-column__link">Headphones</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="navbar__item">
                    <a href="#!" class="navbar__link">Beauty <img src="./assets/icons/arrow-down.svg" alt=""
                            class="icon navbar__arrow" /></a>
                </li>
            </ul>
        </nav>
        <!-- Nabar-overlay -->
        <div class="navbar__overlay js-toggle" toggle-target="#navbar"></div>

        <!-- Action -->
        <div class="top-act">
            <a href="./sign-in.html" class="btn btn--text d-md-none">Sign In</a>
            <a href="./sign-up.html" class="top-act__sign-up btn btn--primary ">Sign Up</a>
        </div>
    </div>
</div>