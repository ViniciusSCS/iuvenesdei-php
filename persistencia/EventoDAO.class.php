<?php


class EventoDAO {
    
    public $con;

    public function __construct() {
        $this->con = new Conexao();
    }
    
}
