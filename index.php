<?php

require 'persistencia/Conexao.class.php';
require 'persistencia/ComentsDAO.class.php';
require 'persistencia/ComentsVO.class.php';

$comentsDAO = new ComentsDAO;
$formComents = $comentsDAO->buscarComents();
$total = count($formComents);

require './utilitarios/proprios/sessao/header.php';
require './utilitarios/proprios/sessao/menu.php';
require './utilitarios/proprios/sessao/home.php';
require './utilitarios/proprios/sessao/eventos.php';
require './utilitarios/proprios/sessao/album.php';
require './utilitarios/proprios/sessao/coments.php';
require './utilitarios/proprios/sessao/sobreNos.php';
require './utilitarios/proprios/sessao/oracao.php';
require './utilitarios/proprios/sessao/endereco.php';
require './utilitarios/proprios/sessao/footer.php';
