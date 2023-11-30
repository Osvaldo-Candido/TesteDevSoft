<?php

namespace App\Libraries;

abstract class Connection {

    public function connect()
    {

        try {
            $conn = new \PDO('mysql:host='.HOST.'; dbname='.DATABASE.';',''.USER.'',''.PASSWORD);
            return $conn;
        } catch (\PDOException $th) {
            print 'ERRO '.$th->getMessage();
        }
       
    }
}