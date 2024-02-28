<?php
namespace App\Models;

class Produto{
    protected $pd;

    public function __construct(PDO $db){
        $this->db = $db;
    }
}
?>