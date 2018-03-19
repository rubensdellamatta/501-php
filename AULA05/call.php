<?php 
class Aluno
{
	public function __call($metodo, array $parametros){
		echo $metodo;
		echo "<br>";
		print_r($parametros);
		echo "<hr>";
	}
}
$a = new Aluno();
$a->getNome();
$a->setNome('4linux');