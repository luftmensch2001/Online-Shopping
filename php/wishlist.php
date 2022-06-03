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
    <title>Sản phẩm yêu thích</title>
</head>

<body style="background-color: var(--background-gray-color)">
    <?php include("./View/Header.php"); ?>
    <div class="body">
        <div class="grid block">
            <h1 class="block__title">SẢN PHẨM YÊU THÍCH</h1>
            <div class="cart__container">
                <div class="cart__heading">
                    <p class="cart__heading-name" style="width: 50%; text-align: center;">Sản Phẩm</p>
                    <p class="cart__heading-name" style="width: 25%; text-align: center;">Đơn Giá</p>
                    <p class="cart__heading-name" style="width: 25%; text-align: center;"></p>
                </div>
                <div class="cart__products">
                    <div class="cart__item">
                        <div class="cart__product">
                            <input class="cart__product-check" type="checkbox" name="" id="">
                            <img src="../assets/images/products/noicom.jpg" alt="" class="cart__product-img">
                            <p class="cart__product-name">GIÀY SNEAKER THỂ THAO CHẠY BỘ CAO CẤP PHIÊN BẢN GIỚI HẠN MÙA HÈ</p>
                        </div>
                        <p class=" wishlist__price">350.000 VNĐ</p>
                        <div class="wishlist__advanced">
                            <button class="wishlist__button">Thêm vào Giỏ hàng</button>
                            <button class="wishlist__button-2">Xoá</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="payment-bar grid">
        <div style="display: flex; align-items: center;">
            <input class="payment-bar__checkbox" type="checkbox" name="" id="">
            <p class="payment-bar__text">Chọn tất cả</p>
        </div>
        <div style="display: flex; align-items: center;">
            <button class="payment-bar__button">
                <lord-icon src="https://cdn.lordicon.com/aoggitwj.json" trigger="loop" colors="primary:#ffffff" delay="2000" style="width:25px;height:25px; margin-right: 2px;">
                </lord-icon>
                Thêm vào Giỏ hàng
            </button>
            <button class="payment-bar__button payment-bar__button-2" style="background-color: var(--red-color);">
                <lord-icon src="https://cdn.lordicon.com/dovoajyj.json" trigger="loop" colors="primary:#ffffff" delay="2000" style="width:25px;height:25px; margin-right: 2px;">
                </lord-icon>
                Xoá
            </button>
        </div>
    </div>
    <?php include("./View/Footer.php") ?>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
</body>

</html>