<?php 
class Conexao
{
	private static $user = 'lucas';
	private static $pass = '123';
	private static $dsn  = 'pgsql:host=localhost;dbname=aula05';
	private static $instance = null;
	private function __construct(){}
	private function __clone(){}
	public static function getInstance(){
		if (!self::$instance) {
			self::$instance = new PDO(self::$dsn,self::$user,self::$pass);
		}
		return self::$instance;
	}
}
var_dump(Conexao::getInstance());
var_dump(Conexao::getInstance());
var_dump(Conexao::getInstance());
// var_dump(new PDO('pgsql:host=localhost;dbname=aula05','lucas','123'));