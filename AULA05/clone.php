<?php 
class Aluno
{
	private function __clone(){
		echo "Estou clonando";
	}
}
$a = new Aluno();
$b = clone $a;