<?php
namespace App\Models;

class Info{
    protected $pd;

    public function __construct(\PDO $db){
        $this->db = $db;
    }
    public function getInfo(){
        $query = "select titulo, descricao from tb_info";
        return $this->db->query($query)->fetchAll();
    }
}
?>