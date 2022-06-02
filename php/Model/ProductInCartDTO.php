<?php
require_once('./Controller/ProductInCart.php');
require_once('DataProvider.php');
class ProductInCartDTO
{
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

    function GetProductInCart($id)
    {
        $query = "Select * from ProductInCart where id='$id'";
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $productInCart = new ProductInCart();
            $productInCart->SetId($row["id"])
                ->SetIdProduct($row["idProduct"])
                ->SetCount($row["count"])
                ->SetColor($row["color"])
                ->SetIdAccount($row["idAccount"]);
            return $productInCart;
        } else
            return null;
    }
    function GetListProductInCart($idAccount)
    {
        $query = "Select * from ProductInCart where idAccount='$idAccount'";
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        $listProductInCart = array();
        while ($row = $result->fetch_assoc()){
            $productInCart = new ProductInCart();
            $productInCart->SetId($row["id"])
                ->SetIdProduct($row["idProduct"])
                ->SetCount($row["count"])
                ->SetColor($row["color"])
                ->SetIdAccount($row["idAccount"]);
            array_push($listProductInCart, $productInCart);
        }
        return $listProductInCart;
    }
    function CreateProductInCart($productInCart)
    {
        $idProduct = $productInCart->GetIdProduct();
        $count = $productInCart->GetCount();
        $color = $productInCart->GetColor();
        $idAccount = $productInCart->GetIdAccount();

        $query = "INSERT INTO ProductInCart (idProduct, count,color,idAccount)
        values('$idProduct', '$count','$color','$idAccount')";
        echo $query;
        $result = DataProvider::getInstance()->Execute($query);
        
        return $result;
    }
    function UpdateProductInCart($productInCart)
    {
        $id = $productInCart->GetId();
        $idProduct = $productInCart->GetIdProduct();
        $count = $productInCart->GetCount();
        $color = $productInCart->GetColor();
        $idAccount = $productInCart->GetIdAccount();

        $query = "Update ProductInCart set 'idProduct'='$idProduct','count'='$count' ,'color'='$color','idAccount'='$idAccount'
         where 'id'=$id'";

        $result = DataProvider::getInstance()->Execute($query);

        return $result;
    }
}
