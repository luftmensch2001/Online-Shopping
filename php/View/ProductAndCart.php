<?php
require_once('./Controller/Product.php');
require_once('./Model/ProductDTO.php');
require_once('./Controller/Color.php');
require_once('./Model/ColorDTO.php');
require_once('./Model/ImageProductDTO.php');
require_once('./Controller/ImageProduct.php');
require_once('./Model/ProductInCartDTO.php');
require_once('./Controller/ProductInCart.php');

$productInCart = new ProductInCart();

$listProductInCart = ProductInCartDTO::getInstance()->GetListProductInCart($idAccount);
$countProduct = count($listProductInCart);
?>




<input type="hidden" name="countProduct" id="countProduct" value="<?php echo $countProduct; ?>" />;
<div class="grid block">
    <h1 class="block__title">GIỎ HÀNG</h1>
    <div class="cart__container">
        <div class="cart__heading">
            <p class="cart__heading-name" style="width: 50%; text-align: center;">Sản Phẩm</p>
            <p class="cart__heading-name" style="width: 20%; text-align: center;">Đơn Giá</p>
            <p class="cart__heading-name" style="width: 10%; text-align: center;">Số Lượng</p>
            <p class="cart__heading-name" style="width: 20%; text-align: center;">Thành Tiền</p>
        </div>
        <div class="cart__products">
            <?php 
                for ($i = 0; $i <$countProduct;$i++)
                {
                    $count = $listProductInCart[$i]->GetCount();
                    $idProduct = $listProductInCart[$i]->GetIdProduct();
                    $product = ProductDTO::getInstance()->GetProduct($idProduct);
                    $nameProduct = $product->GetNameProduct();
                    $price = $product->GetPrice();
                    $imageProduct = ImageProductDTO::getInstance()->GetFirstImageProduct($idProduct);
                    $imageURL = $imageProduct->GetImageURL();
            ?>
            <div class="cart__item" id="product<?php echo $i+1;?>">
                <div class="cart__product">
                    <input class="cart__product-check" type="checkbox" name="" id="">
                    <img src="<?php echo $imageURL; ?>" alt="" class="cart__product-img">
                    <p class="cart__product-name"><?php echo $nameProduct; ?></p>
                </div>
                <p class=" cart__price"><?php echo $price; ?></p>
                <input type="number" class="cart__count" id="countProduct" value="<?php echo $count; ?>">
                <p class="cart__money" id="totalPriceProduct">700.000 VNĐ</p>
            </div>
            <?php 
                }
            ?>
            </div>

        </div>
    </div>
</div>