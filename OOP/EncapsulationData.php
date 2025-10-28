<table class="table w-50 mt-5 mx-auto">
        <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
    <?php
    if(isset($_POST['send'])){
        $code = $_POST["code"];
        $name = $_POST["name"];
        $price = $_POST["price"];
        $qty= $_POST["qty"];

        include "EncapsulationFormClass.php";
        $Product = new Store();
        //assign value
        $Product->setInput($code,$name,$qty,$price);
        //show value
        echo $Product->getCode();
        echo $Product->getName();
        echo $Product->getPrice();
        echo $Product->getQty();
        echo $Product->getTotal();
       

    }

    ?>
    
        </tbody>
    </table>