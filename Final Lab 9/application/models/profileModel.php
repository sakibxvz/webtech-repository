<?php 

class profileModel extends database {

     public function getTicket(){
        if($this->Query("SELECT * FROM ticket")){

            $data = $this->fetchAll();
            return $data;

        }
    }

    public function getCardData(){

        if($this->Query("SELECT * FROM orders")){

            $data = $this->fetchAll();
            return $data;

        }

    }

    public function getData(){

        if($this->Query("SELECT * FROM orders")){

            $data = $this->fetchAll();
            return $data;

        }

    }
    public function getCustomerData(){

        if($this->Query("SELECT * FROM orders")){

            $data = $this->fetchAll();
            return $data;

        }

    }

    public function getOrder($id){
       

        if($this->Query("SELECT * FROM orders WHERE order_id = ? ", [$id])){

            $row = $this->fetch();
            return $row;


        }
        

    }

    public function addOrder($order){

        if($this->Query("INSERT INTO orders (customer_frist_name, customer_last_name, address, order_item, order_quantity, order_price, order_date, order_cancled, delivery_shipped, delivery_done, delivery_status) VALUES (?,?,?,?,?,?,?,?,?,?,?)", $order)){
            return true;
        }

    }


    public function edit_data($id){
       

        if($this->Query("SELECT * FROM orders WHERE order_id = ? ", [$id])){

            $row = $this->fetch();
            return $row;


        }
        

    }

    public function updateOrder($updateData){

        if($this->Query("UPDATE orders SET order_id = ?,customer_frist_name = ? , customer_last_name = ? , address = ? , order_item = ? , order_quantity = ? , order_price = ? , order_date = ? , order_cancled = ? , delivery_shipped = ? , delivery_done = ? , delivery_status = ?   WHERE order_id = ? ", $updateData)){
            return true;
        }

    }

    public function deleteOrder($id){

        if($this->Query("DELETE FROM orders WHERE order_id = ? ", [$id])){
            return true;
        }

    }

    public function getAccountData($id) {
        if($this->Query("SELECT * FROM users WHERE id = ? ", [$id])){

            $row = $this->fetch();
            return $row;


        }
    }
    public function updateAccountdata($accountData){

        if($this->Query("UPDATE `users` SET `fullName` = ?, `email` = ? WHERE `users`.`id` = ?", $accountData)){
            return true;
        }

    }
    public function updateAccountPassData($accountPassData){

        if($this->Query("UPDATE `users` SET `password` = ? WHERE `users`.`id` = ?", $accountData)){
            return true;
        }

    }

}


?>