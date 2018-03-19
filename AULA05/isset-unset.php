<?php 
class Aluno
{
	public function __isset($name){
		echo $name . " está setado?"; 
	}
	public function __unset($name){
		echo "apagando " . $name;
	}
}
$a = new Aluno();
var_dump(isset($a->nome));
unset($a->nome);