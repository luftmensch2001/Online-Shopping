<?php
require_once('./Controller/Color.php');
require_once('DataProvider.php');
class ColorDTO{
    public static $_instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new ColorDTO();
        }

        return self::$_instance;
    }

    function GetProductInBill($id){
        $query = "Select * from ProductInBill where id='$id'" ;
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $color = new Color();
            $color->SetId($row["id"])
            ->SetIdProduct($row["idProduct"])
            ->SetNameColor($row["nameColor"]);
            return $color;
        } else
            return null;
    }
    function CreateProductInBill($color){
        $idProduct = $color->GetIdProduct();
        $nameColor = $color->GetNameColor();

        $query = "INSERT INTO ProductInBill (idProduct, nameColor)
        values('$idProduct', '$nameColor')";
         $result = DataProvider::getInstance()->Execute($query);
    
         return $result;
    }
    function UpdateProductInBill($color){
        $id = $color->GetId();
        $idProduct = $color->GetIdProduct();
        $nameColor = $color->GetNameColor();

        $query = "Update ProductInBill set 'idProduct'='$idProduct','nameColor'='$nameColor' 
         where id = '$id'";
         $result = DataProvider::getInstance()->Execute($query);
    
         return $result;
    }
}