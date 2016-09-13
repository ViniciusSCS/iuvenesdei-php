<?php
require 'persistencia/Conexao.class.php';
require 'persistencia/ComentsDAO.php';
require 'persistencia/ComentsVO.php';

$comentsDAO = new ComentsDAO();
$formComents = $comentsDAO->buscarComents();
$total = count($formComents);


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

