<?php

class FotosVO {

    public $idFotos;
    public $idAlbum;
    public $fotos;

    function getIdFotos() {
        return $this->idFotos;
    }

    function getIdAlbum() {
        return $this->idAlbum;
    }

    function getFotos() {
        return $this->fotos;
    }

    function setIdFotos($idFotos) {
        $this->idFotos = $idFotos;
    }

    function setIdAlbum($idAlbum) {
        $this->idAlbum = $idAlbum;
    }

    function setFotos($fotos) {
        $this->fotos = $fotos;
    }

}
