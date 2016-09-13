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
//        //parent -- faz relaçao com a classe pai (PDO)
//        //__construct método criado automaticamente quando estanciamos uma classe
//        //mysql:host=localhost;dbname=bd_newsletter driver de conexão com o banco de dados
//        //root -- usuário do banco de dados
//        // "" -- local para colocar senha do banco de dados
//        parent::__construct(
//                'mysql:host=localhost;'
//                . 'dbname=iuvenesd_iuvenesdei','iuvenesd_iuvenesdei', 'vynce@!92');
//    }
//
//}
