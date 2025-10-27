<?php
class Store{
    public $code,$qty,$name,$price;
    public function setInput($code,$name,$qty,$price){
        $this->code = $code;
        $this->name=$name;
        $this->qty=$qty;
        $this->price=$price;
     

    }

    public function getCode(){
        return $this->code;
    }
    public function getName(){
        return $this->name;
    }
    public function getQty(){
        return $this->qty;
    }
    public function getPrice(){
        return $this->price;
    }

    public function getTotal(){
        return $this->price * $this->qty;
    }
}





?>