<?php

class TypeProduct{
    private $id;
    private $nameTypeProduct;

    function SetId($id){
        $this->id = $id;
        return $this;
    }
    function SetNameTypeProduct($nameTypeProduct){
        $this->nameTypeProduct = $nameTypeProduct;
        return $this;
    }

    function GetId(){
        return $this->id;
    }
    function GetNameTypeProduct(){
        return $this->nameTypeProduct;
    }
}