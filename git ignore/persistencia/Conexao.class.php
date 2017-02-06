<?php

//use PDO;

class Conexao extends PDO {

    public function __construct() {
        parent::__construct(
                'mysql:host=localhost;'
                . 'dbname=iuvenesd_iuvenesdei','root', '');
    }

}


//class Conexao extends PDO {
//
//    public function __construct() {
//        
//        parent::__construct(
//                'mysql:host=localhost;'
//                . 'dbname=iuvenesd_iuvenesdei','iuvenesd', 'vynce@!92');
//    }
//
//}
