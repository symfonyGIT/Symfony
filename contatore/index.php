<?php

class ContatoreAccessi
{
private $cont;

public function MiaClasse($v)
{ $this->cont = $v; }

public function stampa()
{ echo "Accessi : " . $this->cont; }

public function aumenta()
{ $this->cont++; }
}

$nomefile = "statistiche.txt";
$dimensione = filesize($nomefile);

if ($dimensione) // Se il file esiste e contiene più di un byte
{
$file = fopen($nomefile, "r"); // Apre il file in sola lettura
$content = file_get_contents($nomefile); // Legge il contenuto del file e lo memorizza in $content

$obj = unserialize($content); // Ricostruisce l'istanza deserializzando $content
$obj->aumenta(); // Incrementa il contatore di accessi
}
else
$obj = new ContatoreAccessi(1);

$file = fopen($nomefile, "w+"); // Riapre il file in scrittura azzerandone il contenuto

$ser = serialize($obj); // Serializza l'istanza
fwrite($file, $ser); // Memorizza l'istanza serializzata
fclose($file);

echo $obj->stampa();

?>