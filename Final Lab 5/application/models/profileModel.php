<?php 

class profileModel extends database {

    public function addproduct($product){

        if($this->Query("INSERT INTO product(name, buyingPrice, sellingPrice,displayable) VALUES (?,?,?,?)", $product)){
            return true;
        }

    }

    public function getData(){

        if($this->Query("SELECT * FROM product")){

            $data = $this->fetchAll();
            return $data;

        }

    }

    public function edit_data($id){

        if($this->Query("SELECT * FROM product WHERE id = ?", [$id])){

            $row = $this->fetch();
            return $row;

        }

    }

    public function updateproduct($updateData){

        if($this->Query("UPDATE product SET name = ? , buyingPrice = ? ,sellingPrice = ?, displayable = ? WHERE id = ?", $updateData)){

            return true;

        }

    }

    public function deleteproduct($id){

        if($this->Query("DELETE FROM product WHERE id = ? ", [$id])){
            return true;
        }

    }

}


?>