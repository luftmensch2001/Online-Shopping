<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
error_reporting(E_ALL ^ E_NOTICE);
$idAccount = $_SESSION['idAccount'];
if ($idAccount != null&& $idAccount !=-1) {
    //echo "<h1>Đăng nhập thành công id = $idAccount</h1><br>";
    //$_SESSION['idAccount'] = $idAccount;    
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Trang chủ</title>
    <link href="https://trial.chatcompose.com/static/trial/all/global/export/css/main.5b1bd1fd.css" rel="stylesheet">    <script async type="text/javascript" src="https://trial.chatcompose.com/static/trial/all/global/export/js/main.a7059cb5.js?user=trial_turtle&lang=VI" user="trial_turtle" lang="VI"></script>  
</head>

<body>
    <div id="header">
        <!-- Logo -->
        <a href="https://facebook.com" class="header__logo-link">
            <img class="header__logo-img" src="../assets/images/other/logo.png" alt="logo">
        </a>

        <!-- Search -->
        <div class="search-bar">
            <input class="search-bar__text" type="text" placeholder="Tìm kiếm sản phẩm">
            <img class="search-bar__icon" src="../assets/icons/search.png">
        </div>

        <!-- Advanced -->
        <div class="header__advanced">
            <i class="header__advanced-icon fa-solid fa-cart-shopping"></i>
            <i class="header__advanced-icon fa-solid fa-heart"></i>
            <div class="header__user">
                <i class="header__advanced-icon fa-solid fa-user"></i>
                <ul class="header__user-dropdown">
                    <a href="profile.php" class="header__user-dropdown-item" style="border-radius: 12px 12px 0px 0px;">Tài Khoản</a>
                    <li class="header__user-dropdown-item">Cửa Hàng Của Bạn</li>
                    <li class="header__user-dropdown-item">Đơn Mua</li>
                    <li class="header__user-dropdown-item">Đơn Bán</li>
                    <a href="logout.php" class="header__user-dropdown-item" style="border-radius: 0px 0px 12px 12px;">Đăng xuất</a>
                </ul>
            </div>
        </div>
    </div>

    <div class="body">
        <div class="catalog grid block">
            <h1 class="block__title">DANH MỤC SẢN PHẨM</h1>
            <div class="catalog__list">
                <div class="catalog__item">
                    <img src="../assets/images/catalog/thoitrangnam.png" alt="" class="catalog__image">
                    <p class="catalog__title">Thời trang nam</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/smartphone.png" alt="" class="catalog__image">
                    <p class="catalog__title">Điện thoại</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/laptop.png" alt="" class="catalog__image">
                    <p class="catalog__title">Laptop</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/thietbidientu.png" alt="" class="catalog__image">
                    <p class="catalog__title">Thiết bị điện tử</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/giaynam.png" alt="" class="catalog__image">
                    <p class="catalog__title">Giày nam</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/sach.png" alt="" class="catalog__image">
                    <p class="catalog__title">Sách</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/dongho.png" alt="" class="catalog__image">
                    <p class="catalog__title">Đồng hồ</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/dungcugiadinh.png" alt="" class="catalog__image">
                    <p class="catalog__title">Dụng cụ gia đình</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/thoitrangnu.png" alt="" class="catalog__image">
                    <p class="catalog__title">Thời trang nữ</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/trangsuc.png" alt="" class="catalog__image">
                    <p class="catalog__title">Trang sức</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/lamdep.png" alt="" class="catalog__image">
                    <p class="catalog__title">Làm đẹp</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/nhabep.png" alt="" class="catalog__image">
                    <p class="catalog__title">Nhà bếp</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/giaynu.png" alt="" class="catalog__image">
                    <p class="catalog__title">Giày nữ</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/suckhoe.png" alt="" class="catalog__image">
                    <p class="catalog__title">Sức khoẻ</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/embe.png" alt="" class="catalog__image">
                    <p class="catalog__title">Cho bé</p>
                </div>
                <div class="catalog__item">
                    <img src="../assets/images/catalog/other.png" alt="" class="catalog__image">
                    <p class="catalog__title">Khác</p>
                </div>
            </div>
        </div>

        <div class="best-seller-product grid block">
            <h1 class="block__title">SẢN PHẨM ĐANG HOT</h1>
            <div class="product-card-list">
                <div class="product-card-item">
                    <img src="../assets/images/products/giaysneaker.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Giày sneaker thể thao chạy bộ chính hãng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/aokhoackakinam.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Áo khoác kaki nam chất vải dày dặn form ôm</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/ip13prm.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">iPhone 13 Pro Max - Chính hãng VN/A</p>
                    <p class="product-card-price">31.000.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/noicom.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Nồi cơm điện Sun House - Chính hãng bảo hành 12 tháng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/giaysneaker.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Giày sneaker thể thao chạy bộ chính hãng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/aokhoackakinam.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Áo khoác kaki nam chất vải dày dặn form ôm</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/ip13prm.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">iPhone 13 Pro Max - Chính hãng VN/A</p>
                    <p class="product-card-price">31.000.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/noicom.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Nồi cơm điện Sun House - Chính hãng bảo hành 12 tháng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>

                <button class="see-more-button">Xem thêm</button>
            </div>
        </div>
        <div class="recommend-product grid block">
            <h1 class="block__title">GỢI Ý CHO BẠN</h1>
            <div class="product-card-list">
                <div class="product-card-item">
                    <img src="../assets/images/products/giaysneaker.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Giày sneaker thể thao chạy bộ chính hãng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/aokhoackakinam.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Áo khoác kaki nam chất vải dày dặn form ôm</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/ip13prm.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">iPhone 13 Pro Max - Chính hãng VN/A</p>
                    <p class="product-card-price">31.000.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/noicom.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Nồi cơm điện Sun House - Chính hãng bảo hành 12 tháng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/giaysneaker.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Giày sneaker thể thao chạy bộ chính hãng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/aokhoackakinam.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Áo khoác kaki nam chất vải dày dặn form ôm</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/ip13prm.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">iPhone 13 Pro Max - Chính hãng VN/A</p>
                    <p class="product-card-price">31.000.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/noicom.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Nồi cơm điện Sun House - Chính hãng bảo hành 12 tháng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/giaysneaker.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Giày sneaker thể thao chạy bộ chính hãng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/aokhoackakinam.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Áo khoác kaki nam chất vải dày dặn form ôm</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/ip13prm.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">iPhone 13 Pro Max - Chính hãng VN/A</p>
                    <p class="product-card-price">31.000.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/noicom.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Nồi cơm điện Sun House - Chính hãng bảo hành 12 tháng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/giaysneaker.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Giày sneaker thể thao chạy bộ chính hãng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/aokhoackakinam.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Áo khoác kaki nam chất vải dày dặn form ôm</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/ip13prm.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">iPhone 13 Pro Max - Chính hãng VN/A</p>
                    <p class="product-card-price">31.000.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>
                <div class="product-card-item">
                    <img src="../assets/images/products/noicom.jpg" alt="" class="product-card-image">
                    <p class="product-card-name">Nồi cơm điện Sun House - Chính hãng bảo hành 12 tháng</p>
                    <p class="product-card-price">290.000 VNĐ</p>
                    <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                </div>

                <button class="see-more-button">Xem thêm</button>
            </div>
        </div>
    </div>

    <div id="footer">
        <div class="footer__menu-container">
            <div class="footer__column">
                <span class="footer__title">Tiện ích</span>
                <ul class="footer__list">
                    <li class="footer__item"><a href="#" class="footer__link">Đăng nhập</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Tra cứu đơn hàng</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Đến giỏ hàng</a></li>
                </ul>
            </div>
            <div class="footer__column">
                <span class="footer__title">Về chúng tôi</span>
                <ul class="footer__list">
                    <li class="footer__item"><a href="#" class="footer__link">Chính sách mua hàng</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Chính sách bảo mật</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Tuyển dụng</a></li>
                </ul>
            </div>
            <div class="footer__column">
                <span class="footer__title">Trợ giúp</span>
                <ul class="footer__list">
                    <li class="footer__item"><a href="#" class="footer__link">Câu hỏi thường gặp</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Phản hồi</a></li>
                    <li class="footer__item"><a href="#" class="footer__link">Hotline</a></li>
                </ul>
            </div>
            <div class="footer__column">
                <span class="footer__title">Mạng xã hội</span>
                <div class="footer__social">
                    <a href="#" class="footer__social-link">
                        <i class="footer__social-icon fab fa-facebook-square"></i>
                    </a>
                    <a href="#" class="footer__social-link">
                        <i class="footer__social-icon fab fa-instagram-square"></i>
                    </a>
                    <a href="#" class="footer__social-link">
                        <i class="footer__social-icon fab fa-twitter-square"></i>
                    </a>
                    <a href="#" class="footer__social-link">
                        <i class="footer__social-icon fab fa-youtube-square"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="footer__copyright">
            <p>Copyright © 2022 UIT. All rights reserved.</p>
        </div>
    </div>
    </div>

</body>

</html>