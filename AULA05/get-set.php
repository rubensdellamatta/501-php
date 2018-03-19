<?php 
class Aluno
{
	private $atributos = [];
	public function __set($prop,$value){
		$this->atributos[$prop] = $value; 
	}
	public function __get($prop){
		return $this->atributos[$prop];
	}
}
echo "<pre>";
$aluno = new Aluno();
print_r($aluno);
echo '<hr>';
$aluno->nome = "Lucas";
$aluno->email = "lucas@lucas.com";
print_r($aluno);
echo '<hr>';
echo $aluno->nome;