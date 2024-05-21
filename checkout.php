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
    <title>Chi tiết giỏ hàng</title>
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
                            <a href="./" class="breadcrumbs__link">Home
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <a href="#!" class="breadcrumbs__link breadcrumbs__link--current">Chi tiết giỏ hàng</a>
                        </li>
                    </ul>
                </div>

                <!-- CheckoutContent -->
                <div class="checkout-container">
                    <div class="row gy-xl-3">
                        <div class="col-8 col-xl-12">
                            <div class="cart-info">
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
                                                <div class="cart-item__ctrl cart-item__ctrl--md-block">
                                                    <div class="cart-item__input">
                                                        <a
                                                            href="./addTocart-logined.php?tru=<?php echo $cart_item['id']; ?>">
                                                            <button class="cart-item__input-btn">
                                                                <img class="icon" src="./assets/icons/minus.svg" alt="">
                                                            </button></a>
                                                        <span><?php echo $cart_item[    'soluong']; ?></span>
                                                        <a
                                                            href="./addTocart-logined.php?cong=<?php echo $cart_item['id']; ?>">
                                                            <button class="cart-item__input-btn">
                                                                <img class="icon" src="./assets/icons/plus.svg" alt="">
                                                            </button>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=" cart-item__content-right">
                                                <p class="cart-item__total-price">
                                                    <?php echo number_format($thanhtien,'0','.','.'); ?>đ</p>
                                                <div class="cart-item__ctrl ">
                                                    <button class="cart-item__ctrl-btn" name="btnAddToHeart">
                                                        <img src="./assets/icons/heart-2.svg" alt="">
                                                        Yêu thích
                                                    </button>
                                                    <a
                                                        href="./addTocart-logined.php?xoa=<?php echo $cart_item["id"]; ?>">
                                                        <button class="cart-item__ctrl-btn">
                                                            <img src="./assets/icons/trash.svg" alt="">
                                                            Xóa
                                                        </button></a>
                                                </div>
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
                                        <div class="col-4 col-xxl-5 ">
                                            <div class="cart-info__row">
                                                <span>Tổng phụ:</span>
                                                <span><?php echo number_format($tongtien,'0','.','.'); ?>đ</span>
                                            </div>
                                            <div class="cart-info__row">
                                                <span>Phí giao hàng:</span>
                                                <span>69.000đ</span>
                                            </div>
                                            <div class="cart-info__separate"></div>
                                            <div class="cart-info__row cart-info__row--bold">
                                                <span>Tổng cộng:</span>
                                                <span><?php echo number_format($tongtien + 69000,'0','.','.'); ?>đ</span>
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
                                    <span>Tổng thanh toán</span>
                                    <span><?php echo number_format($tongtien + 69000,'0','.','.'); ?>đ</span>
                                </div>
                                <a href="./shippding-logined.php"
                                    class="btn btn--primary btn--rounded cart-info__next-btn">Tiếp tục thanh
                                    toán</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer id="footer" class="footer"></footer>
    <script>
    load("#footer", "./templates/footer.php");
    </script>

    <!-- Dialog / Modal -->
    <div class="dialog hide" id="delete-confirm">
        <div class="dialog__content">
            <div class="dialog__text">
                Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet.
            </div>
            <div class="dialog__bottom">
                <button class="btn btn--small btn-text dialog-btn js-toggle"
                    toggle-target="#delete-confirm">Cancel</button>
                <button class="btn btn--small btn--primary dialog__btn btn--no-margin js-toggle"
                    toggle-target="#delete-confirm">Confirm</button>
            </div>

        </div>
        <div class="dialog__overlay js-toggle" toggle-target="#delete-confirm"></div>
    </div>
</body>

</html>