<?php
require_once('./Controller/Account.php');
require_once('./Model/AccountDTO.php');
error_reporting(E_ALL ^ E_NOTICE);
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$idAccount = $_SESSION['idAccount'];
if ($idAccount == null || $idAccount == -1)
    header("Location:login.php");
else {
    
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
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Giỏ hàng</title>
</head>

<body style="background-color: var(--background-gray-color)">
    <div id="header">
        <!-- Logo -->
        <a href="https://facebook.com" class="header__logo-link">
            <img class="header__logo-img" src="../assets/images/other/logo.png" alt="logo">
        </a>

        <!-- Search -->
        <div class="search-bar">
            <input class="search-bar__text" type="text" placeholder="Tìm kiếm sản phẩm">
            <!-- <img class="search-bar__icon" src="../assets/icons/search.png"> -->
            <lord-icon src="https://cdn.lordicon.com/pvbutfdk.json" trigger="loop-on-hover" class="search-bar__icon">
            </lord-icon>
        </div>

        <!-- Advanced -->
        <div class="header__advanced">
            <lord-icon src="https://cdn.lordicon.com/aoggitwj.json" trigger="loop-on-hover" colors="primary:#ffffff" class="header__advanced-icon">
            </lord-icon>
            <lord-icon src="https://cdn.lordicon.com/kkcllwsu.json" trigger="loop-on-hover" colors="primary:#ffffff" class="header__advanced-icon">
            </lord-icon>
            <div class="header__user">
                <lord-icon src="https://cdn.lordicon.com/dklbhvrt.json" trigger="loop-on-hover" colors="primary:#ffffff" class="header__advanced-icon">
                </lord-icon>
                <ul class="header__user-dropdown">
                    <li class="header__user-dropdown-item" style="border-radius: 12px 12px 0px 0px;">Tài Khoản</li>
                    <li class="header__user-dropdown-item">Cửa Hàng Của Bạn</li>
                    <li class="header__user-dropdown-item">Đơn Mua</li>
                    <li class="header__user-dropdown-item">Đơn Bán</li>
                    <li class="header__user-dropdown-item" style="border-radius: 0px 0px 12px 12px;">Đăng xuất</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="body">
        <form>
            <?php include("./View/ProductAndCart.php");?>
            <div class="payment-bar grid">
                <div style="display: flex; align-items: center;">
                    <input class="payment-bar__checkbox" type="checkbox" name="" id="tickAll">
                    <p class="payment-bar__text">Chọn tất cả</p>
                </div>
                <p class="payment-bar__text-total">Tổng thanh toán:</p> <p id="total" style="color:red" class="payment-bar__text-total">0 VNĐ</p>
                <div style="display: flex; align-items: center;">
                    <button class="payment-bar__button">
                        <lord-icon src="https://cdn.lordicon.com/hjeefwhm.json" trigger="loop" colors="primary:#ffffff" delay="2000" style="width:25px;height:25px; margin-right: 2px;">
                        </lord-icon>
                        Thanh Toán
                    </button>
                    <button class="payment-bar__button payment-bar__button-2" style="background-color: var(--red-color);">
                        <lord-icon src="https://cdn.lordicon.com/dovoajyj.json" trigger="loop" colors="primary:#ffffff" delay="2000" style="width:25px;height:25px; margin-right: 2px;">
                        </lord-icon>
                        Xoá
                    </button>
                </div>
            </div>
        </form>
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
        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
        <script src="../assets/js/productAndCart.js"></script>
</body>

</html>