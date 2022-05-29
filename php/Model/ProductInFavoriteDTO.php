<?php
require_once('./Controller/ProductInFavorite.php');
require_once('DataProvider.php');
class ProductInFavoriteDTO{
    public static $_instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new ProductInFavoriteDTO();
        }

        return self::$_instance;
    }

    function GetProductInFavorite($id){
        $query = "Select * from ProductInFavorite where id='$id'" ;
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
    function CreateProductInFavorite($productInBill){
        $idProduct = $productInBill->GetIdProduct();
        $count = $productInBill->GetCount();

        $query = "INSERT INTO ProductInFavorite (idProduct, 'count')
        values('$idProduct', '$count')";
         $result = DataProvider::getInstance()->Execute($query);
    
         return $result;
    }
    function UpdateProductInFavorite($productInBill){
        $id = $productInBill->GetId();
        $idProduct = $productInBill->GetIdProduct();
        $count = $productInBill->GetCount();

        $query = "Update ProductInFavorite set 'idProduct'='$idProduct','count'='$count' 
         where 'id'=$id'";
         $result = DataProvider::getInstance()->Execute($query);
    
         return $result;
    }
}