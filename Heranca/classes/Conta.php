<?php
  require_once 'Usuario.php';

  class Conta extends Usuario {
    private $saldo;

    function __construct($nome, $cpf) {
      parent::__construct($nome, $cpf);
    }

    function getSaldo() {
      return $this->saldo;
    }

    function setSaldo($val) {
      $this->saldo = $val;
    }

    function deposito($val, $saldo) {
      $result = $saldo + $val;
      $this->saldo= $result;
      setcookie('saldo',$result);
    }

    function transferencia($val, $saldo) {
      $result = $saldo - $val;
      $this->saldo= $result;
      setcookie('saldo',$result);
    }

    function getNome() {
      echo parent::getNome();
    }
  }

?>