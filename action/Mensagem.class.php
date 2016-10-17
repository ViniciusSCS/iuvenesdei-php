<?php

class Mensagem {

    const msg001 = " Você está no Painel de Controle do ID";
    const msg002 = " Usuário ou senha inválidos";
    //Eventos
    const msg003 = " Cadastro de Evento realizado com <b>sucesso</b>";
    const msg004 = " <b>Falha</b> para cadastrar evento";


    public static function montar($texto, $tipo) {
        switch ($tipo) {
            case 0:
                $css = "msg-danger";
                break;
            case 1:
                $css = "msg-success";
                break;
            case 2:
                $css = "msg-warning";
                break;
        }
        return "<div class='alert alert-$css' id='mensagem'><i class='fa fa-flag fa-fw'></i>$texto</div>";
    }

}
