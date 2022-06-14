<?php
require_once('./DAO/Product.php');
require_once('./DTO/ProductDTO.php');
require_once('./DAO/Color.php');
require_once('./DTO/ColorDTO.php');
require_once('./DTO/ImageProductDTO.php');
require_once('./DAO/ImageProduct.php');
require_once('./DTO/ProductInCartDTO.php');
require_once('./DAO/ProductInCart.php');
require_once('./DTO/EvaluteDTO.php');
require_once('./DAO/Evalute.php');
require_once('./DTO/AccountDTO.php');
require_once('./DAO/Account.php');
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
error_reporting(E_ALL ^ E_NOTICE);
if (!isset($_GET['idProduct'])) {
    header("Location:index.php");
} else {
    $id = $_GET['idProduct'];
    $idProduct = $_GET['idProduct'];
    $product = ProductDTO::getInstance()->GetProduct($id);
    $nameProduct = $product->GetNameProduct();
    $price = $product->GetPrice();
    $countSold = $product->GetCountSold();
    $countStar = $product->GetCountStar();
    $decribe = $product->GetDecribe();
    if (isset($_POST["hiddenURL"])) {
        $hiddenURL = $_POST["hiddenURL"];
        if ($hiddenURL == "cart.php") {
            $productInCart = new ProductInCart();
            $count = $_POST['count'];
            $color = $_POST['color'];
            echo $count . "<br>";
            echo $color . "<br>";
            $idAccount = $_SESSION['idAccount'];
            if ($idAccount == null || $idAccount == -1)
                header("Location:login.php");
            $productInCart->SetIdProduct($id)->SetCount($count)->SetColor($color)->SetIdAccount($idAccount);
            if (ProductInCartDTO::getInstance()->IsExistProductInCart($productInCart))
            {
                $productInCartOld = ProductInCartDTO::getInstance()->GetProductInCartByIdAccountAndIdProduct($productInCart);
                $productInCartOld->SetCount($productInCart->GetCount()+$productInCartOld->GetCount());
                print_r($productInCartOld);
                if (ProductInCartDTO::getInstance()->UpdateProductInCart($productInCartOld))
                    header("Location:cart.php");
            } else
            if (ProductInCartDTO::getInstance()->CreateProductInCart($productInCart)) {
                header("Location:cart.php");
            } else
                echo "fail";
        }
    }
}
?>
<?php
$listImageProduct = ImageProductDTO::getInstance()->GetListImageProductByIdProduct($id);
$countImage = count($listImageProduct);
for ($i = 1; $i <= $countImage; $i++) {
    $idname = "image" . $i;
    $imageURL = $listImageProduct[$i - 1]->GetImageURL();
?>
    <input type="hidden" id="<?php echo $idname; ?>" value="<?php echo $imageURL; ?>">
<?php
}
$index = 1;
$firstImage = $listImageProduct[0]->GetImageURL();
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
    <link rel="stylesheet" href="../assets/css/productDetail.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Chi tiết sản phẩm</title>
</head>

<body>
    <?php include("./View/Header.php"); ?>
    <div class="body">
        <div class="grid block product-detail__container">
            <div class="product-detail__wrapper">
                <div class="product-detail__general">
                    <form id="form" action="" onsubmit="return CheckButton()" method="post">
                        <input type="hidden" name="typeButton" id="typeButton" value="buttonAddToCart">
                        <input type="hidden" name="hiddenURL" id="hiddenURL" value="a.php">
                        <input type="hidden" name="idProduct" id="idProduct" value="<?php echo $id; ?>">
                        <table>
                            <colgroup>
                                <col span="1" style="width: 45%;">
                                <col span="1" style="width: 28%;">
                                <col span="1" style="width: 27%;">
                            </colgroup>

                            <tbody>
                                <tr>
                                    <td rowspan="6">
                                        <img id="imageProduct" src="<?php echo $firstImage; ?>" alt="" class="product-detail__img">
                                    </td>
                                    <td colspan="2" style="padding-left: 30px;">
                                        <h1 class="product__detail-name"><?php echo $nameProduct; ?></h1>
                                    </td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td colspan="2">
                                        <p class="product-detail__general-info" style="padding-left: 30px;">
                                            <?php echo $countStar ?>
                                            <img src="../assets/images/stars/5.png" alt="" style="height:30px; vertical-align: middle; transform: translateY(-2px);">
                                        </p>
                                        <p class="product-detail__general-info" style="border-left: 1px solid rgba(0, 0, 0, 0.5); margin-left: 10px; padding: 0 10px;">
                                            168 lượt đánh giá
                                        </p>
                                        <p class="product-detail__general-info" style="border-left: 1px solid rgba(0, 0, 0, 0.5); margin-left: 10px; padding: 0 10px;">
                                            <?php echo $countSold ?> lượt mua
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <p class="product-detail__price"><?php echo number_format($price); ?> VNĐ</p>
                                    </td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td>
                                        <p class="product-detail__button-label" style="padding-left: 30px;">Chọn phân loại hàng:</p>
                                    </td>
                                    <td>
                                        <p class="product-detail__button-label">Số lượng: </p>
                                    </td>
                                </tr>
                                <tr style="height: 40px;">
                                    <td>
                                        <select id="color" name="color" class="product-detail__select-box">
                                            <?php
                                            $listColor = ColorDTO::getInstance()->GetListColor($id);
                                            $countColor = count($listColor);
                                            for ($i = 0; $i < $countColor; $i++) {
                                                $value = $listColor[$i]->GetNameColor();
                                            ?>
                                                <option><?php echo $value; ?></option>
                                            <?php
                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td>
                                        <input name="count" class="product-detail__count-box" type="number" name="" id="" value="1" min="1">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding-left: 30px; vertical-align: top;">
                                        <button id="btAddToCart" class="product-detail__button" style="width: 90%;"><i class="product-detail__icon fa-solid fa-cart-shopping"></i>Thêm vào giỏ hàng</button>
                                    </td>
                                    <td style="vertical-align: top;">
                                        <button id="btAddToWish" class="product-detail__button" style="background-color: var(--orange-color);"><i class="product-detail__icon fa-solid fa-heart"></i>Yêu thích</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="product-detail__trans-img-container">
                                            <button id="buttonPreImage" class="product-detail__trans-img">Ảnh trước</button>
                                            <p id="indexImage">1</p>
                                            <p>/</p>
                                            <p id="countImage"><?php echo $countImage; ?></p>
                                            <button id="buttonNextImage" class="product-detail__trans-img">Ảnh sau</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>


                        </table>
                    </form>
                </div>
                <div class="product-detail__desciption">
                    <h1 class="product-detail__title">MÔ TẢ SẢN PHẨM</h1>
                    <p class="product-detail__description-content">
                        <?php echo $decribe; ?>
                    </p>
                </div>

                <div class="product-detail__desciption">
                    <h1 class="product-detail__title">
                        ĐÁNH GIÁ
                        <span class="star-count"><?php echo $countStar; ?> / 5</span>
                        <img src="../assets/images/stars/5.png" alt="" style="height: 30px; transform: translateY(9px);">
                    </h1>
                    <div class="review__container">
                        <?php include("./View/EvaluteInProductDetail.php")?>
                        <div class="paging-wrapper">
                            <div class="paging paging-review">
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
        <div class="recommend-product grid block">
            <h1 class="block__title">CÓ THỂ BẠN MUỐN MUA</h1>
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
    </div>
    <?php include("./View/Footer.php") ?>
    <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
    <script src="../assets/js/productDetail.js"></script>
</body>

</html>