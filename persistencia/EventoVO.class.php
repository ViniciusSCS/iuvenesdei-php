<?php


class EventoVO {
    public $idEvento;
    public $titulo;
    public $descricao;
    public $nome_imagem;
    
    function getIdEvento() {
        return $this->idEvento;
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
