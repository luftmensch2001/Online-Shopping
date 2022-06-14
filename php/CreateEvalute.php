<?php 
    require_once('./DTO/EvaluteDTO.php');
    require_once('./DAO/Evalute.php');
    require_once('./DTO/ProductInBillDTO.php');
    require_once('./DAO/ProductInBill.php');

    $time = date("y-m-d");

    $idAccount = $_REQUEST['idAccount'];
    $idProduct = $_REQUEST['idProduct'];
    $star = $_REQUEST['star'];
    $comment = $_REQUEST['comment'];
    $idBill = $_REQUEST['idBill'];


    $evalute = new Evalute();
    $evalute->SetIdAccount($idAccount)->SetIdProduct($idProduct)->SetStar($star)->SetComment($comment)->SetTime($time);
    EvaluteDTO::getInstance()->CreateEvalute($evalute);

    $evalute = EvaluteDTO::getInstance()->GetNewestEvalute();
    $idEvalute = $evalute->GetId();
    $productInBill = ProductInBillDTO::getInstance()->GetProductInBill($idBill,$idProduct);
    $productInBill->SetIdEvalute($idEvalute);
    ProductInBillDTO::getInstance()->UpdateProductInBill($productInBill);
?>