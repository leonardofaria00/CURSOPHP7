<?php

class usuario {

    private $idusuario;
    private $loginusuario;
    private $senhausuario;
    private $dtcadastro;

    function getIdusuario() {
        return $this->idusuario;
    }

    function getLoginusuario() {
        return $this->loginusuario;
    }

    function getSenhausuario() {
        return $this->senhausuario;
    }

    function getDtcadastro() {
        return $this->dtcadastro;
    }

    function setIdusuario($value) {
        $this->idusuario = $value;
    }

    function setLoginusuario($value) {
        $this->loginusuario = $value;
    }

    function setSenhausuario($value) {
        $this->senhausuario = $value;
    }

    function setDtcadastro($value) {
        $this->dtcadastro = $value;
    }

    public function loadById($id) {
        $sql = new Sql(); //Chamando a Class SQL que contém a conexão e as passagens de patametros
        $result = $sql->select("SELECT * FROM tbusuario WHERE idusuario = :ID", array(":ID" => $id));

        if (isset($result[0])) {
            $row = $result[0];
            $this->setIdusuario($row['idusuario']);
            $this->setLoginusuario($row['loginusuario']);
            $this->setSenhausuario($row['senhausuario']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }//if
    }//loadById

    public static function listaUsuarios() {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tbusuario ORDER BY loginusuario");
    }//listaUsuarios

    public static function search($login) {
        $sql = new Sql();
        return $sql->select("SELECT * FROM tbusuario WHERE loginusuario LIKE :SEARCH ORDER BY loginusuario", array(":SEARCH" => "%" . $login . "%"));
    }//search

    public function __toString() {
        return json_encode(array(
            "idusuario" => $this->getIdusuario() . "<br>",
            "loginusuario" => $this->getLoginusuario() . "<br>",
            "senhausuario" => $this->getSenhausuario() . "<br>",
            "dtcadastro" => $this->getDtcadastro()->format("d/m/Y H:i:s")));
    }//__toString
}//class