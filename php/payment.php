<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/global.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/cart.css">
    <link rel="stylesheet" href="../assets/css/payment.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Đặt hàng</title>
</head>

<body style="background-color: var(--background-gray-color)">
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
    <?php include("./View/Header.php"); ?>
    <div class="body">
        <div class="grid block" style="padding-bottom: 20px; margin-bottom: 40px;">
            <h1 class="block__title">XÁC NHẬN ĐẶT HÀNG</h1>
            <div class="cart__container">
                <div class="cart__heading">
                    <p class="cart__heading-name" style="width: 50%; text-align: center;">Sản Phẩm</p>
                    <p class="cart__heading-name" style="width: 20%; text-align: center;">Đơn Giá</p>
                    <p class="cart__heading-name" style="width: 10%; text-align: center;">Số Lượng</p>
                    <p class="cart__heading-name" style="width: 20%; text-align: center;">Thành Tiền</p>
                </div>
                <div class="cart__products">
                    <?php include("./View/productInPayMent.php") ?>


                    <table style="margin-left: auto; margin-right: 0;">
                        <tr>
                            <td>
                                <div class="use-cent">
                                    <input type="checkbox" name="" id="" style="width: 20px; height: 20px; cursor: pointer; transform: translateY(-2px);">
                                    <p class="use-cent__text">Sử dụng Xu để giảm giá</p>
                                </div>
                            </td>
                            <td>
                                <input type="text" name="" id="" class="use-cent__input" placeholder="Nhập số Xu">
                                <button class="use-cent__button">Áp dụng</button>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <p style="font-size: 1.4rem; font-weight:500; color: var(--text-color); text-align: left; margin-left: 30px; opacity: 0.8; margin-top: 5px;">
                                    Số dư Xu: 34.100
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="order-total">Tổng tiền hàng:</p>
                            </td>
                            <td>
                                <p class="order-total money-column"><?php echo $totalAll; ?> VNĐ</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="order-total">Giảm giá:</p>
                            </td>
                            <td>
                                <p class="order-total money-column">5.500 VNĐ</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p class="order-total">Thành tiền:</p>
                            </td>
                            <td>
                                <p class="order-total money-column">2.444.500 VNĐ</p>
                            </td>
                        </tr>
                    </table>

                </div>
                <div class="payment__info-container">
                    <h1 class="payment__title">ĐỊA CHỈ NHẬN HÀNG</h1>
                    <form action="" class="payment__info-wrapper">
                        <input class="payment__input-text" type="text" name="" id="" placeholder="Họ và tên" required>
                        <input class="payment__input-text" type="text" name="" id="" placeholder="Số điện thoại" required>
                        <select class="payment__select">
                            <option>Chọn tỉnh / thành phố</option>
                        </select>
                        <select class="payment__select">
                            <option>Chọn quận / huyện</option>
                        </select>
                        <select class="payment__select">
                            <option>Chọn phường / xã</option>
                        </select>
                        <input class="payment__input-text" type="text" name="" id="" placeholder="Số nhà, tên đường" required>
                        <div class="payment__buttons-wrapper">
                            <input class="payment__button" type="submit" value="Xác nhận đặt hàng">
                            <button type="button" class="payment__button" style="background-color: var(--red-color);">
                                <i class="fa-solid fa-reply" style="margin-right: 3px;"></i>
                                Quay lại Giỏ hàng
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include("./View/Footer.php") ?>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
</body>

</html>