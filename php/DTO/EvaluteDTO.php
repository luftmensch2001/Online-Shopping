<?php
require_once('./DAO/Evalute.php');
require_once('DataProvider.php');
class EvaluteDTO
{
    public static $_instance = null;
    private function __construct()
    {
    }
    public static function getInstance()
    {
        if (self::$_instance == null) {
            self::$_instance = new EvaluteDTO();
        }

        return self::$_instance;
    }

    function GetEvalute($id)
    {
        $query = "SELECT * FROM Evalute Where id = '$id'";
        $result = DataProvider::getInstance()->Execute($query);

        $row = mysqli_num_rows($result);
        if ($row > 0) {
            $row = $result->fetch_assoc();
            $evalute = new Evalute();
            $evalute->SetId($row["id"])
                ->SetIdAccount($row["idAccount"])
                ->SetStar($row["star"])
                ->SetIdProduct($row["idProduct"]);
            return $evalute;
        } else
            return null;
    }

    function CreateEvalute($evalute)
    {
        $id = $evalute->GetId();
        $idAccount = $evalute->GetIdAccount();
        $star = $evalute->GetStar();
        $idProduct = $evalute->GetIdProduct();

        $query = "Insert into Evalute (idAccount, star, idProduct) values('$idAccount','$star','$idProduct')";

        $result = DataProvider::getInstance()->Execute($query);

        return $result;
    }
    function UpdateEvalute($evalute)
    {
        $id = $evalute->GetId();
        $idAccount = $evalute->GetIdAccount();
        $star = $evalute->GetStar();
        $idProduct = $evalute->GetIdProduct();

        $query = "Update evalute Set idAccount='$idAccount',star = '$star',idProduct = '$idProduct' where id='$id'";

        $result = DataProvider::getInstance()->Execute($query);

        return $result;
    }

}
