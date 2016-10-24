<?php

class AlbumVO {

    public $idAlbum;
    public $idLogin;
    public $titulo;
    public $capa;

    function getIdAlbum() {
        return $this->idAlbum;
    }

    function getIdLogin() {
        return $this->idLogin;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getCapa() {
        return $this->capa;
    }

    function setIdAlbum($idAlbum) {
        $this->idAlbum = $idAlbum;
    }

    function setIdLogin($idLogin) {
        $this->idLogin = $idLogin;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setCapa($capa) {
        $this->capa = $capa;
    }

}
