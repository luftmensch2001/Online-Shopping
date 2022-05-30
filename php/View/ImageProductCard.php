<?php
require_once('./Controller/ImageProduct.php');
require_once('./Model/ImageProductDTO.php');

$length = count($imageProducts);

echo "<script> 
const indexImage = document.querySelector('#indexImage'); 
indexImage.value = $length;
</script>";
$i = 0;
foreach ($imageProducts as $imageProduct) {
?>
    <div class="add__img-item">
        <img src="../assets/images/products/.<?php echo "$imageProduct->GetImageUrl()" ?>" id="testitem" alt="" class="add__img-image">
        <button class="add__img-delete">
            <i class="fa-solid fa-xmark"></i>
        </button>
        <input type="hidden" name="hiddenURL" value="<?php echo "$i";?>">
    </div>
<?php
    $i++;
}
?>