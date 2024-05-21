<?php

    // require_once "../config/connect.php";
    $severName = "localhost";
    $userName = "root";
    $password = "";
    $dataBase = "quanlybanhang";
    $conn = mysqli_connect($severName,$userName,$password,$dataBase);
    if (!$conn) {
        die("Lỗi kết nối: " . mysqli_connect_error());
    }
    $id = intval($_GET['id']);
    $sql = "SELECT sp.*,nsx.* FROM tbl_sanpham sp JOIN tbl_nhasanxuat nsx ON sp.IdNhaSanXuat = nsx.IdNhaSanXuat WHERE sp.IdSanPham = $id";
    $sanpham = mysqli_query($conn, $sql);
    $row_sp = mysqli_fetch_array($sanpham);

    
    $totalAmount = floatval($row_sp["DonGia"]); // Chuyển đổi giá trị sang dạng số thực
    $discountAmount = floatval($row_sp["TiLeGiamGia"]); // Chuyển đổi giá trị sang dạng số thực

    $discountAmounted = ($totalAmount * $discountAmount) / 100;
    $discountedTotal = $totalAmount - $discountAmounted;
    $result = $discountedTotal;

    $formattedDiscountAmount = number_format($result, 0, '.', '.');


    // Danh sách các đường dẫn đến hình ảnh
$imagePaths = [
  './images/Laptop Acer Aspire 3 A315-58-53S6 NX.AM0SV.005.webp',
  '/images/Laptop ASUS TUF GAMING F15 FX506HF-HN014W.webp',
  '/images/Laptop ASUS TUF Gaming F15 FX507ZC4-HN074W.webp',
  '/images/Laptop ASUS TUF Gaming A15 FA507NU-LP131W.webp',
  // Thêm các đường dẫn hình ảnh khác vào đây
];
?>
<!DOCTYPE html>
<html lang="en" class="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MeiphoneS | Điện thoại, laptop, phụ kiện chính hãng</title>
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
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
    <main class="product-page">
        <div class="container">
            <div class="product-container">
                <!-- Search bar -->
                <div class="search-bar d-none d-md-flex">
                    <input type="text" placeholder="Search for item" class="search-bar__input" />
                    <button class="search-bar__submit">
                        <img src="./assets/icons/search.svg" alt="" class="icon search-bar__icon" />
                    </button>
                </div>
                <!-- Breadcrumbs -->
                <div class="product-container">
                    <!-- Breadcrumbs -->
                    <ul class="breadcrumbs">
                        <li>
                            <a href="#!" class="breadcrumbs__link">Trang chủ
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                        <li>
                            <a href="#!" class="breadcrumbs__link">Chi tiết sản phẩm
                                <img src="./assets/icons/arrow-right.svg" alt="" />
                            </a>
                        </li>
                    </ul>
                </div>

                <!--Product info -->
                <div class="product-container prod-info-container">
                    <div class="row">
                        <div class="col-5 col-xl-12">
                            <div class="prod-review">
                                <div class="prod-review__list">
                                    <div class="prod-review__item">
                                        <img src="./images/<?php echo $row_sp["HinhAnh"]; ?>" alt=""
                                            class="prod-review__img" />
                                    </div>
                                    <div class="prod-review__item">
                                        <img src="./assets/img/product/item-2.png" alt="" class="prod-review__img" />
                                    </div>
                                    <div class="prod-review__item">
                                        <img src="./assets/img/product/item-3.png" alt="" class="prod-review__img" />
                                    </div>
                                    <div class="prod-review__item">
                                        <img src="./assets/img/product/item-4.png" alt="" class="prod-review__img" />
                                    </div>
                                </div>
                                <div class="prod-review__thumbs">
                                    <?php foreach ($imagePaths as $imagePath): ?>
                                    <img src="./<?php echo $imagePath; ?>" alt="" class="prod-review__thumb-img " />
                                    <!-- prod-review__thumb-img--current -->
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-7 col-xl-12">
                            <form action="./addTocart.php?id=<?php echo $row_sp["IdSanPham"]; ?>" method="POST"
                                class="form">
                                <img src="./assets/img/product/iPhone-product-banner-v1.webp" alt=""
                                    class="form__banner d-lg-none">
                                <section class="prod-info">
                                    <h1 class="prod-info__heading">
                                        <?php echo $row_sp["TenSanPham"]; ?>
                                    </h1>
                                    <div class="row">
                                        <div class="col-5 col-xxl-6 col-xl-12">
                                            <div class="prod-prop">
                                                <img src="./assets/icons/star.svg" alt="" class="prod-prop__icon" />
                                                <h4 class="prod-prop__title">(3.5) 1100 reviews</h4>
                                            </div>
                                            <label for="" class="form__label prod-info__label">Chọn Dung Lượng</label>
                                            <div class="filter__form-group">
                                                <div class="form__select-wrap">
                                                    <div class="form__select" style="--width: 146px">
                                                        8GB
                                                        <img src="./assets/icons/select-arrow.svg " alt=""
                                                            class="icon form__select-arrow" />
                                                    </div>
                                                    <div class="form__select">
                                                        DDR4
                                                        <img src="./assets/icons/select-arrow.svg" alt=""
                                                            class="icon form__select-arrow" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="filter__form-group">
                                                <div class="form__tags">
                                                    <button class="form__tag prod-info__tag">Xanh</button>
                                                    <button class="form__tag prod-info__tag">Đen</button>
                                                    <button class="form__tag prod-info__tag">Trắng</button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-7 col-xxl-6 col-xl-12">
                                            <div class="prod-props">
                                                <div class="prod-prop">
                                                    <img src="./assets/icons/document.svg" alt=""
                                                        class="icon prod-prop__icon" />
                                                    <h4 class="prod-prop__title">Compare</h4>
                                                </div>
                                                <div class="prod-prop">
                                                    <img src="./assets/icons/buy.svg" alt=""
                                                        class="icon prod-prop__icon" />
                                                    <div>
                                                        <h4 class="prod-prop__title">Giao Hàng</h4>
                                                        <h4 class="prod-prop__desc">Từ 99.000đ trong 1-3 ngày</h4>
                                                    </div>
                                                </div>
                                                <div class="prod-prop">
                                                    <img src="./assets/icons/bag.svg" alt=""
                                                        class="icon prod-prop__icon" />
                                                    <div>
                                                        <h4 class="prod-prop__title">Đặt Hàng</h4>
                                                        <h4 class="prod-prop__desc">Trong số 2 cửa hàng, hôm nay</h4>
                                                    </div>
                                                </div>
                                                <div class="prod-info__card">
                                                    <div class="prod-info__row">
                                                        <span
                                                            class="prod-info__price"><?php echo number_format($row_sp["DonGia"], 0, '.', '.'); ?>đ</span>
                                                        <span class="prod-info__tax">
                                                            <?php echo $discountAmount; ?>%</span>
                                                    </div>
                                                    <p class="prod-info__total-price">
                                                        <?php echo $formattedDiscountAmount; ?>đ
                                                    </p>
                                                    <div class="prod-info__row">
                                                        <button name="btnAddToCart"
                                                            class="btn btn--primary prod-info__add-to-card ">
                                                            Thêm Vào Giỏ
                                                        </button>
                                                        <button class="like-btn prod-info__liked-btn">
                                                            <img src="./assets/icons/heart.svg" alt=""
                                                                class="like-btn__icon icon" />
                                                            <img src="./assets/icons/heart-red.svg" alt=""
                                                                class="like-btn__icon--liked" />
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Product content -->
                <div class="product-container">
                    <div class="product-tab js-tabs">
                        <ul class="product-tab__list">
                            <li class="product-tab__item product-tab__item--current">Thông tin sản phẩm</li>
                            <li class="product-tab__item">Đánh Giá (1100)</li>
                            <li class="product-tab__item">Sản Phẩm Liên Quan</li>
                        </ul>
                        <div class="product-tab__contents">
                            <div class="product-tab__content product-tab__content--current">
                                <div class="row">
                                    <div class="col-8 col-xl-10 col-lg-12">
                                        <div class="text-content product-tab__text-content">
                                            <h2>Đặc Điểm Nổi Bậc</h2>
                                            <p>
                                                <?php echo $row_sp["CauHinh"]; ?>
                                            </p>
                                            <h3><?php echo $row_sp["TenSanPham"]; ?></h3>
                                            <p>
                                                <?php echo $row_sp["MoTa"]; ?>
                                            </p>
                                            <p>
                                                <img src="./images/<?php echo $row_sp["HinhAnh"]; ?>" alt="" />
                                                <em>Một sản phẩm đến từ nhà sản xuất của
                                                    <strong><?php echo $row_sp["TenNhaSanXuat"]; ?></strong></em>
                                            </p>
                                            <blockquote>
                                                <p>
                                                    <?php echo $row_sp["CauHinh"]; ?>
                                                </p>
                                            </blockquote>

                                            <hr />

                                            <p>
                                                <?php echo $row_sp["MoTa"]; ?>
                                            </p>
                                            <h2>Thiết kế với mặt lưng kim loại</h2>
                                            <p>
                                                TCL Tab 10 Gen 2 LTE có vẻ ngoài trông khá thanh lịch với mặt lưng và
                                                màn hình được làm theo dạng phẳng, một cách tạo hình quen thuộc so với
                                                mặt bằng chung máy tính bảng có trên thị trường trong năm 2023. Điểm
                                                nhấn chính ở máy có lẽ là nằm ở phần mặt lưng, vị trí này được làm từ
                                                chất liệu kim loại mặc dù đây chỉ là sản phẩm giá rẻ.


                                            </p>
                                            <p>
                                                <img src="./images/<?php echo $row_sp["HinhAnh"]; ?>" alt=""
                                                    name="img" />
                                            </p>
                                            <p>
                                                Mặt lưng của máy tính bảng được làm nhám nhẹ, cho khả năng chống bám dấu
                                                vân tay tốt, giúp hạn chế tình trạng dính bẩn khi cầm nắm sử dụng trong
                                                thời gian dài. Ngoài ra, mặt lưng kim loại còn mang đến hiệu quả cho
                                                việc tản nhiệt nhờ đặc tính dẫn nhiệt tốt. Điều này giúp máy vận hành
                                                một cách ổn định hơn, tránh tổn hại đến linh kiện.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-4"></div>
                                </div>
                            </div>
                            <div class="product-tab__content">
                                <div class="product-content">
                                    <h2 class="product-content__heading">What our customers are saying</h2>
                                    <div class="row row-cols-3 gx-lg-2 row-cols-md-1 gy-md-3">
                                        <div class="col">
                                            <!-- Review card 1 -->
                                            <div class="review-card">
                                                <div class="review-card__content">
                                                    <img src="./assets/img/avatar/avatar-1.png" alt=""
                                                        class="review-card__avatar" />
                                                    <div class="review-card__info">
                                                        <h4 class="review-card__title">Jakir Hussen</h4>
                                                        <p class="review-card__desc">
                                                            Great product, I love this Coffee Beans
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-card__rating">
                                                    <img src="./assets/icons/star.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star-half.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star-blank.svg" alt=""
                                                        class="review-card__star" />
                                                    <span class="review-card__rating-title">(3.5) Review</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Review card 2 -->
                                        <div class="col">
                                            <div class="review-card">
                                                <div class="review-card__content">
                                                    <img src="./assets/img/avatar/avatar-2.png" alt=""
                                                        class="review-card__avatar" />
                                                    <div class="review-card__info">
                                                        <h4 class="review-card__title">Jubed Ahmed</h4>
                                                        <p class="review-card__desc">
                                                            Awesome Coffee, I love this Coffee Beans
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-card__rating">
                                                    <img src="./assets/icons/star.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star-half.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star-blank.svg" alt=""
                                                        class="review-card__star" />
                                                    <span class="review-card__rating-title">(3.5) Review</span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Review card 3 -->
                                        <div class="col">
                                            <div class="review-card">
                                                <div class="review-card__content">
                                                    <img src="./assets/img/avatar/avatar-3.png" alt=""
                                                        class="review-card__avatar" />
                                                    <div class="review-card__info">
                                                        <h4 class="review-card__title">Delwar Hussain</h4>
                                                        <p class="review-card__desc">
                                                            Great product, I like this Coffee Beans
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="review-card__rating">
                                                    <img src="./assets/icons/star.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star-half.svg" alt=""
                                                        class="review-card__star" />
                                                    <img src="./assets/icons/star-blank.svg" alt=""
                                                        class="review-card__star" />
                                                    <span class="review-card__rating-title">(3.5) Review</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-tab__content">
                            <div class="row row-cols-6 row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-sm-1 g-2">
                                <?php
                     $sql = "select *
                    from tbl_sanpham A, tbl_nhasanxuat B
                    where A.IdNhaSanXuat = B.IdNhaSanXuat ORDER by `IdSanPham` DESC";
                    $sanpham = mysqli_query($conn, $sql);
                    $count = 0;
                    while ($row_sp = mysqli_fetch_assoc($sanpham)) {?>
                                <div class="col">
                                    <article class="product-card">
                                        <div class="product-card__img-wrap">
                                            <a href="./product-detail.php?id=<?php echo $row_sp["IdSanPham"]; ?>"><img
                                                    src="./images/<?php echo $row_sp["HinhAnh"]; ?>" alt=""
                                                    class="product-card__thumb" /></a>
                                            <button class="product-card__liked-btn">
                                                <img src="./assets/icons/heart.svg" alt=""
                                                    class="like-btn__icon icon" />
                                            </button>
                                            <div class="product-card__percent">
                                                <img src="./assets/icons/precent.svg" alt=""
                                                    class="product-card__percent-icon">
                                            </div>
                                            <div class="product-card__percent-quantity">
                                                Giảm <?php echo $row_sp["TiLeGiamGia"]; ?> %
                                            </div>
                                        </div>
                                        <h3 class="product-card__title">
                                            <a href="./product-detail.html"><?php echo $row_sp["TenSanPham"]; ?></a>
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
                            if ($count == 6) {
                                     break;
                           }
                    }
                ?>
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
    <a href="#" class="to-top">
        <img src="./assets/icons/arrow-down-2.svg" alt="" class="backtop__arrow">
    </a>
</body>

</html>