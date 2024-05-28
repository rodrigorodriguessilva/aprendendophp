<?php
include("cliente.php");


$Rodrigo = new Cliente("Rodrigo");
$Rodrigo-> setSaldo(100);
//$tempCliente->confirmarrecebimento();
//$tempCliente->pagarconta(30);

echo "<br/>Nome do Cliente : ".$Rodrigo->getNome();
echo "<br/>saldo : ".$Rodrigo->getSaldo();


$Fernando = new Cliente("Fernando");
$Fernando -> setSaldo(200);

echo "<br/>Nome do Cliente : ".$Fernando->getNome();
echo "<br/>saldo : ".$Fernando->getSaldo();


$Ronaldo = new Cliente("Ronaldo");


?>