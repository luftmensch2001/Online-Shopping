<?php
require_once('./DAO/ImageProduct.php');
require_once('./DTO/ImageProductDTO.php');

$listBill = BillDTO::getInstance()->GetListBillByIdAccountSeller($idAccount);

for ($i = 0; $i < count($listBill); $i++) {
    $detailBill = DetailBillDTO::getInstance()->GetDetailBill($listBill[$i]->GetIdDetailBill());
    $state = $detailBill->GetState();
    $time = $listBill[$i]->GetTime();
    $totalPrice = $detailBill->GetTotalPrice();
    $discount = $detailBill->GetDiscount();
    $money  = $totalPrice - $discount;
    $listProductInBill = ProductInBillDTO::getInstance()->GetListProductInBill($listBill[$i]->GetId());
    $color = $listProductInBill[0]->GetColor();
    $product = ProductDTO::getInstance()->GetProduct($listProductInBill[0]->GetIdProduct());
    $imageProduct = ImageProductDTO::getInstance()->GetFirstImageProduct($product->GetId());
    $imageURL = $imageProduct->GetImageURL();
    $nameProduct = $product->GetNameProduct();
?>
    <a href="./OrderDetail-seller.php?idBill=<?php echo $listBill[$i]->GetId(); ?>">
        <div class="order__item">
            
            <div class="order__product-info" style="width: 30%">
                <img src="<?php echo $imageURL ?>" alt="" class="order__product-img">
                <p class="order__product-name"><?php echo $nameProduct ?></p>
            </div>
            <p class="order__type" style="width: 15% ; text-align: center;"><?php echo $color ?></p>
            <p class="order__count" style="width: 10%">2</p>
            <p class="order__date" style="width: 15%"><?php echo $time ?></p>
            <p class="order__price" style="width: 15%"><?php echo $money ?> VNĐ</p>
            <p class="order__status" style="width: 15%"><?php echo $state ?></p>
            <?php
            if (count($listProductInBill) > 1) {
                $countOther = count($listProductInBill) - 1;
            ?>
                <p class="order__remain">và <?php echo $countOther ?>sản phẩm khác</p>
            <?php
            }
            ?>
        </div>
    </a>
<?php
}
?>