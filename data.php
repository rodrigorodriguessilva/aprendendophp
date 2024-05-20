<?php
$raw = '22. 11. 1923';
$start = DateTime::createFromFormat('d. m. Y', $raw);
var_dump($raw);
$teste = 1;
var_dump($teste);
echo "Data de inicio: " . $start->format('d-m-Y') . "<br>";

// cria uma cópia de $start e adiciona um mês e 6 dias
$end = clone $start;
$end->add(new DateInterval('P1M6D'));

$diff = $end->diff($start);
echo "Diferença: " . $diff->format('%m mês, %d dias (total: %a dias)') . "\n";
// Diferença: 1 mês, 6 dias (total: 37 dias)

?>