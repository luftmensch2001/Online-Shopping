<?php

class Evalute{
    private $id;
    private $idAccount;
    private $star;
    private $idProduct;

    function SetId( $id ){
        $this->id = $id;
        return $this;
    }
    function GetId( $id ){
        return $this->id;
    }

    function SetIdAccount( $idAccount ){
        $this->idAccount = $idAccount;
        return $this;
    }
    function GetIdAccount( $idAccount ){
        return $this->idAccount;
    }

    function SetStar( $star ){
        $this->star = $star;
        return $this;
    }
    function GetStar( $star ){
        return $this->star;
    }

    function SetIdProduct( $idProduct ){
        $this->idProduct = $idProduct;
        return $this;
    }
    function GetIdProduct(){
        return $this->idProduct;
    }
}