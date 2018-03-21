<?php
require 'conexao.php';
class Usuario
{
	private $id;
	private $nome;
	private $email;
	private $senha;
	public function __construct(string $nome,string $email,string $senha){
		$this->nome = $nome;
		$this->email = $email;
		$this->senha = md5($senha);
	}
	public function salvar(){
		try {
			$con = Conexao::getInstance();
			$con->beginTransaction();
			$sql = "INSERT INTO tb_usuarios (nome,email,senha) VALUES(:nome,:email,:senha)";
			
			$stmt = $con->prepare($sql);
			// Uma forma de fazer o prepareStatements
			$stmt->bindValue(":nome",$this->nome);
			$stmt->bindValue(":email",$this->email);
			$stmt->bindValue(":senha",$this->senha);
			$stmt->execute();
			// Outra forma de fazer o prepareStatements
			// $dados = [
			// 	':nome' => $this->nome,
			// 	':email'   => $this->email,
			// 	':senha'   => $this->senha
			// ];									
			// $stmt->execute($dados);
			$con->commit();			
		} catch (PDOException $e) {
			$con->rollback();
			echo 'Erro:' . $e->getMessage();
		}
	}
}
$usuario = new Usuario('Lucas Marques','lucas@lucas.com.br','123');
$usuario->salvar();


