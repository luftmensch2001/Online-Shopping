<?php
require_once('./Controller/ProductInBill.php');
require_once('DataProvider.php');
class ProductInBillDTO{
    public static $_instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new ProductInBillDTO();
        }

        return self::$_instance;
    }

    function GetProductInBill($id){
        $query = "Select * from ProductInBill where id='$id'" ;
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $productInBill = new ProductInBill();
            $productInBill->SetId($row["id"])
            ->SetIdProduct($row["idProduct"])
            ->SetCount($row["count"])
            ->SetIdEvalute($row["idEvalute"]);
            return $productInBill;
        } else
            return null;
    }
    function CreateProductInBill($productInBill){
        $idProduct = $productInBill->GetIdProduct();
        $count = $productInBill->GetCount();
        $idEvalute = $productInBill->GetIdEvalute();

        $query = "INSERT INTO ProductInBill (idProduct, 'count', 'idEvalute')
        values('$idProduct', '$count', '$idEvalute')";
         $result = DataProvider::getInstance()->Execute($query);
    
         return $result;
    }
    function UpdateProductInBill($productInBill){
        $id = $productInBill->GetId();
        $idProduct = $productInBill->GetIdProduct();
        $count = $productInBill->GetCount();
        $idEvalute = $productInBill->GetIdEvalute();

        $query = "Update ProductInBill set 'idProduct'='$idProduct','count'='$count',idEvalute='$idEvalute'
         where 'id'=$id'";
         $result = DataProvider::getInstance()->Execute($query);
    
         return $result;
    }
}