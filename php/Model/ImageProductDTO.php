<?php
require_once('./Controller/Image.php');
require_once('DataProvider.php');
class ImageProduct{
    public static $_instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new ImageProduct();
        }

        return self::$_instance;
    }

    function GetProductInBill($id){
        $query = "Select * from ProductInBill where id='$id'" ;
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $imageProduct = new ImageProduct();
            $imageProduct->SetId($row["id"])
            ->SetIdProduct($row["idProduct"])
            ->SetImageURL($row["imageURL"]);
            return $imageProduct;
        } else
            return null;
    }
    function CreateProductInBill($imageProduct){
        $idProduct = $imageProduct->GetIdProduct();
        $imageURL = $imageProduct->GetImageURL();

        $query = "INSERT INTO ProductInBill (idProduct, imageURL)
        values('$idProduct', '$imageURL')";
         $result = DataProvider::getInstance()->Execute($query);
    
         return $result;
    }
    function UpdateProductInBill($imageProduct){
        $id = $imageProduct->GetId();
        $idProduct = $imageProduct->GetIdProduct();
        $imageURL = $imageProduct->GetImageURL();

        $query = "Update ProductInBill set 'idProduct'='$idProduct','imageURL'='$imageURL' 
         where id = '$id'";
         $result = DataProvider::getInstance()->Execute($query);
    
         return $result;
    }
}