<?php
require_once('./Controller/ProductInCart.php');
require_once('DataProvider.php');
class ProductInCartDTO{
    public static $_instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new ProductInCartDTO();
        }

        return self::$_instance;
    }

    function GetProductInCart($id){
        $query = "Select * from ProductInCart where id='$id'" ;
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $productInBill = new ProductInBill();
            $productInBill->SetId($row["id"])
            ->SetIdProduct($row["idProduct"])
            ->SetCount($row["count"]);
            return $productInBill;
        } else
            return null;
    }
    function CreateProductInCart($productInBill){
        $idProduct = $productInBill->GetIdProduct();
        $count = $productInBill->GetCount();

        $query = "INSERT INTO ProductInCart (idProduct, 'count')
        values('$idProduct', '$count')";
         $result = DataProvider::getInstance()->Execute($query);
    
         return $result;
    }
    function UpdateProductInCart($productInBill){
        $id = $productInBill->GetId();
        $idProduct = $productInBill->GetIdProduct();
        $count = $productInBill->GetCount();

        $query = "Update ProductInCart set 'idProduct'='$idProduct','count'='$count' 
         where 'id'=$id'";
         $result = DataProvider::getInstance()->Execute($query);
    
         return $result;
    }
}