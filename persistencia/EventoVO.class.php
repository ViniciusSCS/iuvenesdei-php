<?php


class EventoVO {
    public $idEvento;
    public $idLogin;
    public $titulo;
    public $descricao;
    public $nome_imagem;
            
    function getIdEvento() {
        return $this->idEvento;
    }
            
    function getIdLogin() {
        return $this->idLogin;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getNome_imagem() {
        return $this->nome_imagem;
    }

    function setIdEvento($idEvento) {
        $this->idEvento = $idEvento;
    }

    function setIdLogin($idLogin) {
        $this->idLogin = $idLogin;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setNome_imagem($nome_imagem) {
        $this->nome_imagem = $nome_imagem;
    }


}
