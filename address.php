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
    <title>CHECKOUT</title>
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
                        <a href="#!" class="breadcrumbs__link breadcrumbs__link--current">CheckOut </a>
                        </li>
                    </ul>
                </div>

                <!-- CheckoutContent -->
                <div class="checkout-container">
                    <div class="row gy-xl-3">
                        <div class="col-8 col-xl-12 offset-2">
                            <!-- Modal: address new shipping address -->
                            <div class="modal modal__show" style="--content-width: 650px">
                                <div class="modal__content">
                                    <form action="" class="form">
                                        <h2 class="modal__heading">Add new shipping address</h2>
                                        <div class="modal__body">
                                            <div class="form__row">
                                                <div class="form__group">
                                                    <label for="name"
                                                        class="form__label form__label--small">Name</label>
                                                    <div class="form__text-input form__text-input--small">
                                                        <input type="text" name="name" id="name" placeholder="Name"
                                                            class="form__input" required minlength="2" />
                                                        <img src="./assets/icons/form-error.svg" alt=""
                                                            class="form__input-icon-error" />
                                                    </div>
                                                    <p class="form__error">Name must be at least 2 characters</p>
                                                </div>
                                                <div class="form__group">
                                                    <label for="phone"
                                                        class="form__label form__label--small">Phone</label>
                                                    <div class="form__text-input form__text-input--small">
                                                        <input type="tel" name="phone" id="phone" placeholder="Phone"
                                                            class="form__input" required minlength="10" />
                                                        <img src="./assets/icons/form-error.svg" alt=""
                                                            class="form__input-icon-error" />
                                                    </div>
                                                    <p class="form__error">Phone must be at least 10 characters</p>
                                                </div>
                                            </div>
                                            <div class="form__group">
                                                <label for="address"
                                                    class="form__label form__label--small">Address</label>
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
                                        <div class="modal__bottom">
                                            <button class="btn btn--small btn--text modal__btn ">
                                                Thoát
                                            </button>
                                            <button type="submit"
                                                class="btn btn--small btn--primary modal__btn btn--no-margin ">
                                                Đặt Hàng
                                            </button>
                                        </div>
                                    </form>
                                </div>
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


</body>

</html>