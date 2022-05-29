<?php
require_once('./Controller/Product.php');
require_once('./Controller/Color.php');
require_once('./Controller/ImageProduct.php');
require_once('./Model/ProductDTO.php');
require_once('./Model/ColorDTO.php');
require_once('./Model/ImageProductDTO.php');
error_reporting(E_ALL ^ E_NOTICE);
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$idAccount = $_SESSION['idAccount'];
if ($idAccount == null || $idAccount == -1) {
    header("Location:Login.php");
} else {
    if (isset($_POST['nameProduct'])) {

        /*  $nameProduct = $_POST['nameProduct'];
        $price = $_POST['price'];
        $decribe = $_POST['decribe'];

        echo "$nameProduct++$price++$decribe";

        $product = new Product();
        $product->SetNameProduct($nameProduct)->SetPrice($price)->SetDecribe($decribe)->SetIdAccount($idAccount);

        if (ProductDTO::getInstance()->CreateProduct($product))
            echo "<script>alert('thanh cong')</script>";
        else
            echo "<script>alert('that bai')</script>";*/
        $countImage = $_POST['indexImage'];
        //echo $countImage."br";
        $countImage = 1;
        
        /*for ($i = 0; $i < $countImage; $i++) {
            $index = "image" . $i;
            $imageURL = $_POST["$index"];
            if (isset($_POST["$index"])) {
                $imageProduct = new ImageProduct();
                $imageProduct->SetImageURL($imageURL);
                echo $imageProduct->GetImageURL();
                $imageProduct->SetIdProduct(1);
                if (ImageProductDTO::getInstance()->CreateImageProduct($imageProduct)) {
                    echo "<script>alert('thanh cong')</script>";
                } else {
                    echo "<script>alert('that bai')</script>";
                }
            }
        }*/
    }
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
    <link rel="stylesheet" href="../assets/css/addProduct.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Thêm sản phẩm</title>
</head>

<body>
<table>
<?php 


    foreach ($_POST as $key => $value) {
        echo "<tr>";
        echo "<td>";
        echo $key;
        echo "</td>";
        echo "<td>";
        echo $value;
        echo "</td>";
        echo "</tr>";
    }


?>
</table>
    <div id="header">
        <!-- Logo -->
        <a href="index.php" class="header__logo-link">
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
                    <a href="profile.php" class="header__user-dropdown-item" style="border-radius: 12px 12px 0px 0px;">Tài Khoản</a> <br>
                    <a href="yourStore.php" class="header__user-dropdown-item">Cửa Hàng Của Bạn</a> <br>
                    <li class="header__user-dropdown-item">Đơn Mua</li>
                    <li class="header__user-dropdown-item">Đơn Bán</li>
                    <a href="logout.php" class="header__user-dropdown-item" style="border-radius: 0px 0px 12px 12px;">Đăng xuất</a>
                </ul>
            </div>
        </div>
    </div>
    <div class="body">
        <form action="#" method="post" name="form" class="grid block" onsubmit=" return IsSubmit()">
            <h1 class="block__title">THÊM SẢN PHẨM</h1>
            <div class="add__container">
                <input id="nameProduct" type="text" name="nameProduct" class="add__input" placeholder="Tên sản phẩm" value="<?php echo $nameProduct; ?>">
                <select name="" id="" class="add__select">
                    <option disabled selected>Chọn danh mục sản phẩm</option>
                    <option selected>Thời trang nam</option>
                    <option>Thời trang nữ</option>
                    <option>Điện thoại</option>
                    <option>Laptop</option>
                    <option>Thiết bị điện tử</option>
                    <option>Giày nam</option>
                    <option>Giày nữ</option>
                    <option>Sách</option>
                    <option>Đồng hồ</option>
                    <option>Dụng cụ gia đình</option>
                    <option>Trang sức</option>
                    <option>Làm đẹp</option>
                    <option>Nhà bếp</option>
                    <option>Sức khoẻ</option>
                    <option>Cho bé</option>
                    <option>Khác</option>
                </select>
                <input id="price" name="price" value="<?php echo $price; ?>" type="number" class="add__input" placeholder="Giá" style="width: 40%; margin-left: auto; margin-right: 0">
                <textarea id="decribe" class="add__textarea" name="decribe" id="" cols="30" rows="20" placeholder="Mô tả chi tiết sản phẩm"><?php echo $decribe; ?></textarea>
                <!--<p class="add__label">Hình ảnh</p> -->
                <p class="add__label">Hình ảnh</p>
                <br>
                <input type="file" id="image-input" accept="image/jpeg, image/png, image/jpg" multiple></input>

                <div id="listImage" class="add__img-container">
                    <input id="indexImage" type="hidden" name="indexImage" value="0">
                    <!-- <div class="add__img-item">
                        <img src="../assets/images/products/aokhoackakinam.jpg" id="testitem" alt="" class="add__img-image">
                        <button class="add__img-delete">
                            <i class="fa-solid fa-xmark"></i>
                        </button>
                    </div> -->
                </div>
                <div>
                    </img>
                    <p class="add__label">Phân loại hàng</p>
                    <input id="addColorInput" type="text" class="add__input" placeholder="Nhập tên phân loại hàng" style="width: 300px; margin-left: 30px; margin-top: 6px;">
                    <input type="hidden" value="" id="typeButton" name="typeButton" value="???">

                    <button id="addColorButton" class="add__button">+</button>
                    <input id="indexColor" type="hidden" name="indexColor" value="0">
                    <div id="listColor" class="add__type-container">
                        <!-- <div class="add__type-item">
                            <p class="add__type-name">Màu trắng</p>
                            <button class="add__type-delete">
                                <i class="fa-solid fa-xmark"></i>
                            </button>
                        </div> -->
                    </div>
                    <div class="add__buttons">
                        <button id="submitButton" class="add__submit-button"><i class="fa-solid fa-check" style="margin-right: 5px;"></i>Hoàn tất</button>
                        <button id="cancelButton" class="add__submit-button" style="background-color: var(--red-color);">Huỷ</button>
                    </div>
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
        <script src="../assets/js/addProduct.js"></script>
</body>