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

    function GetProductInCartByIdAccountAndIdProduct($productInCart)
    {
        $idProduct = $productInCart->GetIdProduct();
        $idAccount = $productInCart->GetIdAccount();
        $query = "SELECT * FROM productInCart where idProduct='$idProduct' and idAccount='$idAccount'";
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $productInCart = new ProductInCart();
            $productInCart
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
            $productInCart
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
        $idProduct = $productInCart->GetIdProduct();
        $count = $productInCart->GetCount();
        $color = $productInCart->GetColor();
        $idAccount = $productInCart->GetIdAccount();

        $query = "Update ProductInCart set count='$count' ,color='$color'  where idAccount='$idAccount' and idProduct='$idProduct'";

        $result = DataProvider::getInstance()->Execute($query);
        echo $query;
        return $result;
    }
    function isExistProductInCart($productInCart)
    {
        $idProduct = $productInCart->GetIdProduct();
        $idAccount = $productInCart->GetIdAccount();
        $color = $productInCart->GetColor();
        $query = "SELECT * FROM productInCart where idProduct='$idProduct' and idAccount='$idAccount' and color='$color'";
        $result = DataProvider::getInstance()->Execute($query);
        $row = mysqli_num_rows($result);
        if ($row > 0)
          return true;
        else
          return false;
    }
    function DeleteProductInCart($idAccount, $idProduct,$color)
    {
        $query = "DELETE FROM `productincart` WHERE idAccount='$idAccount' and idProduct='$idProduct' and color='$color'";
        echo "<br>".$query."<br>";
        $result = DataProvider::getInstance()->Execute($query);
        return $result;
    }
}
