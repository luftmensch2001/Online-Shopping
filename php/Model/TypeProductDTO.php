<?php
require_once('./Controller/Account.php');
require_once('TypeProduct.php');
class TypeProductDTO{
    public static $_instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new TypeProductDTO();
        }

        return self::$_instance;
    }

    function GetTypeProduct($id){
        $query = "SELECT * FROM TypeProduct Where id = '$id'";
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $typeProduct = new typeProduct();
            $typeProduct->SetId($row["id"])
            ->SetNameTypeProduct($row["nameProduct"]);
            return $typeProduct;
        } else
            return null;
    }
    function CreateTypeProduct($typeProduct){
        $nameProduct = $typeProduct->GetNameTypeProduct();

        $query = "INSERT INTO typeProduct(nameProduct) VALUES('$nameProduct')";
        $result = DataProvider::getInstance()->Execute($query);
    
        return $result;
    }
    function UpdateTypeProduct($typeProduct)
    {
        $id = $typeProduct->GetId();
        $nameProduct = $typeProduct->GetNameTypeProduct();
        $query = "UPDATE typeProduct SET nameTypeProduct='$nameProduct' WHERE id='$id'";
        $result = DataProvider::getInstance()->Execute($query);
    
        return $result;
    }
}