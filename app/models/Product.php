<?php

namespace App\Models;
use App\Libraries\Connection;
class Product extends Connection {

    private $result = false;

    public function getResult()
    {
        return $this->result;
    }

    public function listProduct()
    {
      
        $query = "SELECT * FROM product";
        $result = $this->connect()->prepare($query);
        $result->execute();
        
        $products = $result->fetchAll(\PDO::FETCH_ASSOC);
        
        if ($products) {
            return $products;
        } else {
            return array(); 
        }
    }
    
    public function insertProduct($name)
    {
        $query = "INSERT INTO product (name, date) VALUES (:name, Now())";
        $query = $this->connect()->prepare($query);
        $query->bindParam(":name",$name);
        $query->execute();

        if($query->rowCount() > 0)
        {
            $this->result = true;
        }
    }

}