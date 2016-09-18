<?php

require 'persistencia/Conexao.class.php';
require 'persistencia/ComentsDAO.class.php';
require 'persistencia/ComentsVO.class.php';
//require 'persistencia/EventoDAO.class.php';
//require 'persistencia/EventoVO.class.php';

$comentsDAO = new ComentsDAO();
$formComents = $comentsDAO->buscarComents();
$total = count($formComents);




//$eventoDAO = new EventoDAO;
//$formEvento = $eventoDAO->buscaEvento();
//$qnt = count($formEvento);


include_once './utilitarios/proprios/sessao/header.php';
include_once './utilitarios/proprios/sessao/menu.php';
include_once './utilitarios/proprios/sessao/home.php';
include_once './utilitarios/proprios/sessao/eventos.php';
include_once './utilitarios/proprios/sessao/album.php';
include_once './utilitarios/proprios/sessao/coments.php';
include_once './utilitarios/proprios/sessao/sobreNos.php';
include_once './utilitarios/proprios/sessao/oracao.php';
include_once './utilitarios/proprios/sessao/endereco.php';
include_once './utilitarios/proprios/sessao/footer.php';

