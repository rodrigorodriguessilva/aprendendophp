<?php

class cliente{
 
    private $nome;
    private $saldo;
    public function confirmarrecebimento(){
      echo  "<br/>Confirmado o recebimento";
    }   


    public function __construct($nomer){
      $this->nome = $nomer;

    }







    public function pagarconta($valor){
      echo "<br/>Foi pago o valor de R$ ".$valor;
    } 

  
    public function getNome(){
        return $this->nome;
    }

    public function setSaldo($saldor){
        $this->saldo = $saldor;
    }

    public function getSaldo(){
        return $this->saldo;
    }

    
    

}   
?>