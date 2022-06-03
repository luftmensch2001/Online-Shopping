<?php
error_reporting(E_ALL ^ E_NOTICE);
require_once('./Controller/Product.php');
require_once('./Model/ProductDTO.php');
require_once('./Controller/Color.php');
require_once('./Model/ColorDTO.php');
require_once('./Model/ImageProductDTO.php');
require_once('./Controller/ImageProduct.php');
require_once('./Model/ProductInCartDTO.php');
require_once('./Controller/ProductInCart.php');
if (isset($_POST['countProduct'])) {

    $countProduct = $_POST['countProduct'];
    $totalAll = 0;
    for ($i = 0; $i < $countProduct; $i++) {
        $index = $i + 1;
        if (isset($_POST['tick' . $index])) {
            $product = ProductDTO::getInstance()->GetProduct($_POST['id' . $index]);
            $nameProduct = $product->GetNameProduct();
            $price = $product->GetPrice();
            $count = $_POST['count' . $index];
            $total = $price * $count ;
            $totalAll += $total;
            $idProduct =$product->GetId();
            $imageProduct = ImageProductDTO::getInstance()->GetFirstImageProduct($idProduct);
            $imageURL = $imageProduct->GetImageURL();

?>
            <div class="cart__item">
                <div class="cart__product">
                    <img src="<?php echo $imageURL; ?>" alt="" class="cart__product-img">
                    <p class="cart__product-name"><?php echo $nameProduct; ?></p>
                </div>
                <p class=" cart__price"><?php echo $price; ?> VNĐ</p>
                <p class="order-count"><?php echo $count; ?></p>
                <p class="cart__money"><?php echo $total; ?> VNĐ</p>
            </div>
<?php
        }
    }
}
?>