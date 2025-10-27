<?php
class Bank{
    public $account;
    public $deposit;
    public $windrw;
    public $balance=0;

    //set 

    function set_account($a){
        $this->account=$a;
    }

    function set_windrw($w){
        $this->windrw=$w;
    }
    
    function set_deposit($d){
        $this->deposit=$d;
    }

    function get_account(){
        return $this->account;
    }
    function get_deposit(){
        return $this->deposit;
    }
    function get_windrw(){
        return $this->windrw;
    }
    function get_balance(){
        if($this->windrw==0 && $this->deposit==0){
            return $this->balance;
        
        }else if($this->windrw>0){
            if($this->balance >= $this->windrw){
                return $this->balance -=$this->windrw;
            }else{
                return  "អ្នកអស់លុយហើយ";
            }
            
        }else if($this->deposit>0 ){
            return $this->balance +=$this->deposit;
    }   }
}


$luyme= new Bank();
$luyme->set_account(101);
echo "Your account:".$luyme->get_account() ."<br>";
echo "Your balance:". $luyme->get_balance() ."$<br>";
$luyme->set_deposit(100);
echo "You deposit:". $luyme->get_deposit() ."<br>";
echo "Your balance:". $luyme->get_balance() ."$<br>";
$luyme->set_windrw(50);
echo "You withdraw:". $luyme->get_windrw()."<br>";
echo "Your balance:". $luyme->get_balance() ."$<br>";





?>