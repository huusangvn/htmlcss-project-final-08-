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
    $sql = "SELECT *From tbl_sanpham";                               
    $checkOut = mysqli_query($conn,$sql);                                                        
?>

<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thanh Toán</title>
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
    <main class="checkout-page">
        <div class="container">
            <div class="checkout-container">
                <!-- Search bar -->
                <div class="search-bar d-none d-md-flex">
                    <input type="text" placeholder="Search for item" class="search-bar__input" />
                    <button class="search-bar__submit">
                        <img src="./assets/icons/search.svg" alt="" class="icon search-bar__icon" />
                    </button>
                </div>
                <!-- Breadcrumbs -->
                <div class="checkout-container ">
                    <!-- Breadcrumbs -->
                    <ul class="breadcrumbs checkout-page__breadcrumbs">
                        <li>
                            <a href="./" class="breadcrumbs__link">Trang Chủ
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="./" class="breadcrumbs__link">Chi tiết giỏ hàng
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="breadcrumbs__link breadcrumbs__link--current">Địa chỉ và đặt hàng</a>
                        </li>
                    </ul>
                </div>

                <!-- CheckoutContent -->
                <form action="./bill.php" method="POST">
                    <div class="checkout-container">
                        <div class="row gy-xl-3">
                            <div class="col-8 col-xl-12">
                                <div class="cart-info">
                                    <div class="user-address__top">
                                        <div>
                                            <h2 class="user-address__title">Địa chỉ giao hàng</h2>
                                            <p class="user-address__desc">Chúng tôi nên giao hàng cho bạn ở đâu?</p>
                                        </div>
                                        <button
                                            class="user-address__btn btn btn--primary btn--rounded btn--small js-toggle"
                                            toggle-target="#add-new-address">
                                            <img src="./assets/icons/plus.svg" alt="" />
                                            Thêm địa chỉ giao hàng
                                        </button>
                                    </div>
                                    <!-- Modal: address n`ew shipping address -->
                                    <div class="modal modal hide" id="add-new-address" style="--content-width: 650px">
                                        <div class="modal__content">
                                            <h2 class="modal__heading">Địa chỉ giao hàng</h2>
                                            <div class="modal__body">
                                                <div class="form__group">
                                                    <label for="email"
                                                        class="form__label form__label--small">Email</label>
                                                    <div class="form__text-input form__text-input--small">
                                                        <input type="email" name="email" id="email" value="<?php if(isset($_SESSION["Email"])){
                                                                    echo $_SESSION["Email"];
                                                                    }?>" class="form__input" required minlength="2" />
                                                        <img src="./assets/icons/form-error.svg" alt=""
                                                            class="form__input-icon-error" />
                                                    </div>
                                                    <p class="form__error">Name must be at least 2 characters</p>
                                                </div>
                                                <div class="form__row">

                                                    <div class="form__group">
                                                        <label for="name" class="form__label form__label--small">Họ
                                                            và
                                                            tên</label>
                                                        <div class="form__text-input form__text-input--small">
                                                            <input type="text" name="name" id="name" placeholder="Name"
                                                                class="form__input" required minlength="2" />
                                                            <img src="./assets/icons/form-error.svg" alt=""
                                                                class="form__input-icon-error" />
                                                        </div>
                                                        <p class="form__error">Name must be at least 2 characters
                                                        </p>
                                                    </div>
                                                    <div class="form__group">
                                                        <label for="phone" class="form__label form__label--small">Số
                                                            điện thoại</label>
                                                        <div class="form__text-input form__text-input--small">
                                                            <input type="tel" name="phone" id="phone"
                                                                placeholder="Phone" class="form__input" required
                                                                minlength="10" />
                                                            <img src="./assets/icons/form-error.svg" alt=""
                                                                class="form__input-icon-error" />
                                                        </div>
                                                        <p class="form__error">Phone must be at least 10 characters
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="form__group">
                                                    <label for="address" class="form__label form__label--small">Địa
                                                        chỉ</label>
                                                    <div class="form__text-area">
                                                        <textarea name="address" id="address"
                                                            placeholder="Address (Area and street)"
                                                            class="form__text-area-input" required></textarea>
                                                        <img src="./assets/icons/form-error.svg" alt=""
                                                            class="form__input-icon-error" />
                                                    </div>
                                                    <p class="form__error">Địa chỉ không được để trống</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="cart-info__list">
                                        <!-- Cart item -->
                                        <?php
                                        $count = 0;
                                         if(isset($_SESSION['cart']) && count($_SESSION['cart']) > 0){
                                            $tongtien = 0;
                                            foreach($_SESSION['cart'] as $cart_item){
                                                $thanhtien = $cart_item['soluong'] * $cart_item['DonGia'];
                                                $tongtien += $thanhtien;
                                      
                                            ?>
                                        <article class="cart-item">
                                            <a href="./product-detail.html">
                                                <img src="./images/<?php echo $cart_item["HinhAnh"]; ?>" alt=""
                                                    class="cart-item__thumb">
                                            </a>
                                            <div class="cart-item__content">
                                                <div class="cart-item__content-left">
                                                    <h3 class="cart-item__title">
                                                        <a href="./product-detail.html">
                                                            <?php echo $cart_item["TenSanPham"]; ?>
                                                        </a>
                                                    </h3>
                                                    <p class="cart-item__price-warp">
                                                        <?php echo number_format($thanhtien,'0','.','.'); ?>đ | <span
                                                            class="cart-item__status">In Stock</span>
                                                    </p>
                                                </div>
                                                <div class=" cart-item__content-right">
                                                    <p class="cart-item__total-price">
                                                        <?php echo number_format($thanhtien,'0','.','.'); ?>đ</p>
                                                </div>
                                            </div>
                                        </article>

                                        <?php $count++;
                                              }
                                            }else
                                            {
                                                $cart_item["soluong"] = 0;
                                                $tongtien = 0;
                                            }
                                        ?>
                                    </div>
                                    <div class="cart-info__bottom d-md-none">
                                        <div class="row">
                                            <div class="col-8 col-xxl-7 ">
                                                <div class="cart-info__continue">
                                                    <a href="./index-logined.php" class="cart-info__continue-link">
                                                        <img src="./assets/icons/arrow-down-2.svg" alt=""
                                                            class="icon cart-info__continue-icon">
                                                        Tiếp tục mua sắm
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-xl-12">
                                <div class="cart-info">
                                    <div class="cart-info__row d-none">
                                        <span>Tổng sản phẩm <span class="cart-info__sub-label"></span></span>
                                        <span><?php echo $count + $cart_item["soluong"]; ?></span>
                                    </div>
                                    <div class="cart-info__row">
                                        <span>Giá <span class="cart-info__sub-label">(Tổng )</span></span>
                                        <span><?php echo number_format($tongtien,'0','.','.'); ?>đ</span>
                                    </div>
                                    <div class="cart-info__row">
                                        <span>Phí giao hàng</span>
                                        <span>69.000đ</span>
                                    </div>
                                    <div class="cart-info__separate"></div>
                                    <div class="cart-info__row">
                                        <button name="submitcart" type="submit"
                                            class="btn btn--primary btn--rounded cart-info__next-btn">Đặt
                                            hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer id="footer" class="footer"></footer>
    <script>
    load("#footer", "./templates/footer.php");
    </script>

</body>

</html>