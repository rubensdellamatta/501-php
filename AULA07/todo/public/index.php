<?php 
require '../config/config.php';
require '../autoload.php';
use Lib\Db\Conexao;
use Model\Entity\Usuarios;
use Model\Mapper\UsuariosMapper;
echo "<pre>";
echo DSN  . "<br>";
var_dump(Conexao::getInstance());
echo "<hr>";
$users = (new UsuariosMapper())->findAll();
print_r($users);

$dados = [
	'nome' => 'Rubens Della Matta' ,
	'email' => 'rubens@paterno.com.br',
	'senha' => md5 ('123')
];

(new UsuariosMapper)->insert($dados);


