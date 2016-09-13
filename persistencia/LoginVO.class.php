<?php

class LoginVO{
    private $idLogin;
    private $nome;
    private $usuario;
    private $senha;
    private $sexo;
    private $situacao;

    function getIdLogin() {
        return $this->idLogin;
    }

    function getNome() {
        return $this->nome;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getSenha() {
        return $this->senha;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getSituacao() {
        return $this->situacao;
    }

    function setIdLogin($idLogin) {
        $this->idLogin = $idLogin;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setSituacao($situacao) {
        $this->situacao = $situacao;
    }



    
}

