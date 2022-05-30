<?php
error_reporting(E_ALL ^ E_NOTICE);
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$idAccount = $_SESSION['idAccount'];
if ($idAccount == null || $idAccount == -1) {
    header("Location:Login.php");
} else {
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
    <link rel="stylesheet" href="../assets/css/catalog.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Cửa hàng của bạn</title>
</head>
<body>
    <div id="header">
        <!-- Logo -->
        <a href="index.php" class="header__logo-link">
            <img class="header__logo-img"  src="../assets/images/other/logo.png" alt="logo">
        </a>

        <!-- Search -->
        <div class="search-bar">
            <input class="search-bar__text" type="text" placeholder="Tìm kiếm sản phẩm">
            <!-- <img class="search-bar__icon" src="../assets/icons/search.png"> -->
            <lord-icon 
                src="https://cdn.lordicon.com/pvbutfdk.json"
                trigger="loop-on-hover"
                class="search-bar__icon">
            </lord-icon>
        </div>

        <!-- Advanced -->
        <div class="header__advanced">
            <lord-icon
                src="https://cdn.lordicon.com/aoggitwj.json"
                trigger="loop-on-hover"
                colors="primary:#ffffff"
                class="header__advanced-icon">
            </lord-icon>
            <lord-icon
                src="https://cdn.lordicon.com/kkcllwsu.json"
                trigger="loop-on-hover"
                colors="primary:#ffffff"
                class="header__advanced-icon">
            </lord-icon>
            <div class="header__user">
                <lord-icon
                    src="https://cdn.lordicon.com/dklbhvrt.json"
                    trigger="loop-on-hover"
                    colors="primary:#ffffff"
                    class="header__advanced-icon">
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
        

        <div class="products grid block">
            <h1 class="products__title">CỬA HÀNG CỦA BẠN</h1>
            <div class="grid products__container" style="margin-bottom: 60px;">
                <div class="products__filter">
                    <h2 class="product__filter__name">BỘ LỌC TÌM KIẾM</h2>

                    <div class="products__filter-zone">
                        <h2 class="products__filter-title">Theo Giá</h2>
                        <form action="" class="products__fiter-form">
                            <input type="radio" name="price-base" id="price-base">Dưới 200K<br>
                            <input type="radio" name="price-base" id="price-base">Từ 200K đến 500K<br>
                            <input type="radio" name="price-base" id="price-base">Từ 500K đến 1Tr<br>
                            <input type="radio" name="price-base" id="price-base">Từ 1Tr đến 5Tr<br>
                            <input type="radio" name="price-base" id="price-base">Trên 5Tr<br>
                            <input type="radio" name="price-base" id="price-base">Tuỳ chỉnh<br>
                            <input type="text" name="" id="" placeholder="Từ" style="width:110px; height:35px; transform: none; cursor: text;" class="products__price-filter"><span style="padding: 0 5px;">-</span>
                            <input type="text" name="" id="" placeholder="Đến"style="width:110px; height:35px; transform: none; cursor: text;" class="products__price-filter">
                            <input class="products__price-filter-apply" type="submit" value="ÁP DỤNG">
                        </form>
                    </div>

                    <div class="products__filter-zone">
                        <h2 class="products__filter-title">Theo Số lượng đã bán</h2>
                        <form action="" class="products__fiter-form">
                            <input type="radio" name="count-base" id="price-base">Trên 100 sản phẩm<br>
                            <input type="radio" name="count-base" id="price-base">Trên 300 sản phẩm<br>
                            <input type="radio" name="count-base" id="price-base">Trên 500 sản phẩm<br>
                            <input type="radio" name="count-base" id="price-base">Trên 1000 sản phẩm<br>
                            <input type="radio" name="count-base" id="price-base">Trên 3000 sản phẩm   
                        </form>
                    </div>

                    <div class="products__filter-zone">
                        <h2 class="products__filter-title">Theo Đánh giá</h2>
                        <div class="products__filter-vote-item">
                            <img src="../assets/images/stars/1.png" alt="" class="products__filter-vote-img">
                            <span>trở lên</span>
                        </div>
                        <div class="products__filter-vote-item">
                            <img src="../assets/images/stars/2.png" alt="" class="products__filter-vote-img">
                            <span>trở lên</span>
                        </div>
                        <div class="products__filter-vote-item">
                            <img src="../assets/images/stars/3.png" alt="" class="products__filter-vote-img">
                            <span>trở lên</span>
                        </div>
                        <div class="products__filter-vote-item">
                            <img src="../assets/images/stars/4.png" alt="" class="products__filter-vote-img">
                            <span>trở lên</span>
                        </div>
                        <div class="products__filter-vote-item">
                            <img src="../assets/images/stars/5.png" alt="" class="products__filter-vote-img">
                            <span>trở lên</span>
                        </div>
                    </div>
                </div>

                <div class="products__list">
                    <div class="products__sort">
                        <h2>Sắp xếp theo</h2>
                        <button class="products__sort-button products__sort-selected js-latest-button" onclick="ClickLatestButton()">Mới nhất</button>
                        <button class="products__sort-button js-best-seller-button" onclick="ClickBestSellButton()">Bán chạy nhất</button>
                        <select class="products__sort-button">
                            <option value="" disabled selected>Theo giá</option>
                            <option>Từ thấp đến cao</option>
                            <option>Từ cao đến thấp</option>
                            <option>Không</option>
                        </select>
                        <a href="addProduct.php">
                        <button class="products__add-button"">Thêm sản phẩm</button>
                        </a>
                    </div>
                    <div class="product-card-list">
                        <div class="product-card-item-3">
                            <img src="../assets/images/products/giaysneaker.jpg" alt="" class="product-card-image">
                            <p class="product-card-name">Giày sneaker thể thao chạy bộ chính hãng</p>
                            <p class="product-card-price">290.000 VNĐ</p>
                            <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                        </div>
                        <div class="product-card-item-3">
                            <img src="../assets/images/products/aokhoackakinam.jpg" alt="" class="product-card-image">
                            <p class="product-card-name">Áo khoác kaki nam chất vải dày dặn form ôm</p>
                            <p class="product-card-price">290.000 VNĐ</p>
                            <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                        </div>
                        <div class="product-card-item-3">
                            <img src="../assets/images/products/ip13prm.jpg" alt="" class="product-card-image">
                            <p class="product-card-name">iPhone 13 Pro Max - Chính hãng VN/A</p>
                            <p class="product-card-price">31.000.000 VNĐ</p>
                            <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                        </div>
                        <div class="product-card-item-3">
                            <img src="../assets/images/products/noicom.jpg" alt="" class="product-card-image">
                            <p class="product-card-name">Nồi cơm điện Sun House - Chính hãng bảo hành 12 tháng</p>
                            <p class="product-card-price">290.000 VNĐ</p>
                            <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                        </div>
                        <div class="product-card-item-3">
                            <img src="../assets/images/products/giaysneaker.jpg" alt="" class="product-card-image">
                            <p class="product-card-name">Giày sneaker thể thao chạy bộ chính hãng</p>
                            <p class="product-card-price">290.000 VNĐ</p>
                            <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                        </div>
                        <div class="product-card-item-3">
                            <img src="../assets/images/products/aokhoackakinam.jpg" alt="" class="product-card-image">
                            <p class="product-card-name">Áo khoác kaki nam chất vải dày dặn form ôm</p>
                            <p class="product-card-price">290.000 VNĐ</p>
                            <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                        </div>
                        <div class="product-card-item-3">
                            <img src="../assets/images/products/ip13prm.jpg" alt="" class="product-card-image">
                            <p class="product-card-name">iPhone 13 Pro Max - Chính hãng VN/A</p>
                            <p class="product-card-price">31.000.000 VNĐ</p>
                            <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                        </div>
                        <div class="product-card-item-3">
                            <img src="../assets/images/products/noicom.jpg" alt="" class="product-card-image">
                            <p class="product-card-name">Nồi cơm điện Sun House - Chính hãng bảo hành 12 tháng</p>
                            <p class="product-card-price">290.000 VNĐ</p>
                            <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                        </div>          
                        <div class="product-card-item-3">
                            <img src="../assets/images/products/noicom.jpg" alt="" class="product-card-image">
                            <p class="product-card-name">Nồi cơm điện Sun House - Chính hãng bảo hành 12 tháng</p>
                            <p class="product-card-price">290.000 VNĐ</p>
                            <p class="product-card-sold">Đã bán 1,3k sản phẩm</p>
                        </div>                
                        <div class="paging">
                            <button class="paging__trans">Trang đầu</button>
                            <button class="paging__trans"><i class="fa-solid fa-arrow-left"></i></button>
                            <button class="paging__page-number">1</button>
                            <button class="paging__page-number paging__current">2</button>
                            <button class="paging__page-number">3</button>
                            <button class="paging__page-number">4</button>
                            <button class="paging__trans"><i class="fa-solid fa-arrow-right"></i></button>
                            <button class="paging__trans">Trang cuối</button> <br>
                            <p>Đang ở trang 2 trong tổng số 7 trang</p>
                        </div>
                    </div>
                </div>
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
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script>
        const latestButton = document.querySelector(".js-latest-button");
        console.log("latestButton: ", latestButton);
        const bestButton = document.querySelector(".js-best-seller-button");
        function ClickLatestButton() {
            if (latestButton.classList.contains("products__sort-selected"))
            {
                latestButton.classList.remove("products__sort-selected");
            } else
            {
                latestButton.classList.add("products__sort-selected");
            }
        }
        function ClickBestSellButton() {
            if (bestButton.classList.contains("products__sort-selected"))
            {
                bestButton.classList.remove("products__sort-selected");
            } else
            {
                bestButton.classList.add("products__sort-selected");
            }
        }
    </script>
</body>
</html>