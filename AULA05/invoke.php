<?php 
class Aluno
{
	public function __invoke(){
		echo "Function: <br>";
		$params = func_get_args();
		print_r($params);
	}
}
$a = new Aluno();
$a('ola','oi');