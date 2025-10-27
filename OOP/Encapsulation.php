<?Php
 class Phone{
    //propoties, dataMember
    public $name;
    public $price;
    public $qty;
    public $total;
     //set 
     function set_name($Name){
        $this->name= $Name;
     }

     function set_price($Price){
        $this->price = $Price;
     }

     function set_qty($Qty){
        $this->qty=$Qty;
     }
     //get
     function get_name(){
        return $this->name;
     }

    function get_price(){
        return $this->price;
    }
    function get_qty(){
        return $this->qty;
    }
    function total(){
        return $this->price * $this->qty;
    }



 }

//obj
 $iphone = new Phone();
 //set value to objet
 $iphone->set_name("Iphone 12");
 
 echo "Name:". $iphone->get_name() ."<br>";
 $iphone->set_price(190);
  echo "Price:".  $iphone->get_price() ."<br>";
 $iphone->set_qty(2);
  echo  "Qty:".  $iphone->get_qty() ."<br>";
  echo "Total:". $iphone->total();    

 // get 

 echo "Name:". $iphone->get_name() ."<br>";





$samsung = new Phone();

 




?>