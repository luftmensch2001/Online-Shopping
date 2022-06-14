<?php
require_once('./DAO/ImageProduct.php');
require_once('./DTO/ImageProductDTO.php');
$listProductInBill = ProductInBillDTO::getInstance()->GetListProductInBill($bill->GetId());
for ($i = 0; $i < count($listProductInBill); $i++) {
    $count = $listProductInBill[$i]->GetCount();
    $idBill = $listProductInBill[$i]->GetIdBill();
    $idProduct = $listProductInBill[$i]->GetIdProduct();
    $product = ProductDTO::getInstance()->GetProduct($idProduct);
    $price = $product->GetPrice();
    $nameProduct = $product->GetNameProduct();
    $imageProduct = ImageProductDTO::getInstance()->GetFirstImageProduct($product->GetId());
    $imageURL = $imageProduct->GetImageURL();
    $color = $listProductInBill[$i]->GetColor();
    $idEvalute = $listProductInBill[$i]->GetIdEvalute();
    if ($idEvalute!=0)
    {
        $displayEvalute = "none";
    }
    
?>
    <div class="order__item">
        <div class="order__product-info" style="width: 35%">
            <img src="<?php echo $imageURL; ?>" alt="" class="order__product-img">
            <p class="order__product-name"><?php echo $nameProduct; ?></p>
        </div>
        <p class="order__type" style="width: 15%; text-align: center;"><?php echo $color; ?></p>
        <p class="order__price" style="width: 15%"><?php echo $price; ?> VNĐ</p>
        <p class="order__count" style="width: 10%"><?php echo $count; ?></p>
        <p class="order__price" style="width: 15%"><?php echo $price*$count;?> VNĐ</p>
        <button class="order-detail__review-button" style="display:<?php echo $displayEvalute; ?>" onclick="showReviewModal(<?php echo $idProduct?>,<?php echo $idBill?>)">Đánh giá</button>
    </div>
<?php
}
?>