<?php 
class Aluno
{
	private $nome = '4linux';
	public function __toString(){
		return 'olá, eu sou o ' . $this->nome;
	}
}
$a = new Aluno();
echo $a;