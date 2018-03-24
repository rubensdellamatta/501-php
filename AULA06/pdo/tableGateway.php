<?php 
require 'conexao.php';
abstract class TableGateway
{
	private $con;
	public function __construct(){
		$this->con = Conexao::getInstance();
	}
	// $dados = ['nome' => 'Lucas','email' => 'lucas@lucas.com'];
	// $this->table = 'tb_usuarios';
	public function inserir( array $dados){
		//$campos =['nome','email'];
		//$valores=['Lucas','lucas@lucas.com'];
		foreach ($dados as $campo => $valor) {
			$campos[] = $campo;
			$valores[] = "'$valor'";
		}
		// $campos = "nome,email";
		$campos = implode(',', $campos);
		// $valores = "Lucas,lucas@lucas.com";
		$valores= implode(',', $valores);
		//$sql = "INSERT INTO tb_usuarios(nome,email) VALUES(Lucas,lucas@lucas.com)";
		$sql = "INSERT INTO {$this->table}({$campos}) VALUES({$valores})";
		echo $sql;
		$this->con->exec($sql);
	}
	// $dados = ['nome' => 'Lucas','email' => 'lucas@lucas.com'];
	// $this->table = 'tb_usuarios';
	// $onde = 'id = 1';
	public function atualizar(array $dados, string $onde){
		//$sets =['nome = Lucas','email = lucas@lucas.com'];
		foreach ($dados as $campo => $valor) {
			$sets[] = "{$campo} = '{$valor}'";
		}
		// $sets = 'nome=Lucas,email=lucas@lucas.com';
		$sets = implode(',', $sets);
		//$sql = "UPDATE tb_usuarios SET nome=Lucas,email=lucas@lucas.com WHERE id = 1 ";
		$sql = "UPDATE {$this->table} SET {$sets} WHERE {$onde}";
		echo $sql;
		$this->con->exec($sql);
	}
	// $this->table = tb_usuarios;
	// $onde = id = 1;
	public function deletar( string $onde){
		// DELETE FROM tb_usuarios WHERE id = 1;
		$sql = "DELETE FROM {$this->table} WHERE {$onde}";
		echo $sql;
		$this->con->exec($sql);
	}
	// $this->table = tb_usuarios;
	// $onde = id = 4;
	public function buscar(string $onde){
		// SELECT * FROM tb_usuarios WHERE id = 4
		$sql = "SELECT * FROM {$this->table} WHERE {$onde}";
		echo $sql;
		$resultado = $this->con->query($sql);
		$registro = $resultado->fetchObject($this->entity);
		return $registro;
	}
	// $this->table = tb_usuarios;
	// $onde = nome like '%lucas%';
	public function buscarTodos(string $onde = null){
		// SELECT * FROM tb_usuarios WHERE id = 4
		$sql = "SELECT * FROM {$this->table}";
		if ($onde) {
			$sql .= " WHERE {$onde}";
		}
		echo $sql;
		$resultado = $this->con->query($sql);
		
		while ($registro = $resultado->fetchObject($this->entity)) {
			$colecao[] = $registro;
		}
		return $colecao;
	}	
}
// echo "<pre>";
// $table = new TableGateway();
// $dados = [
// 	'nome' => 'Lucas José',
// 	'email'=> 'lujose@gmail.com',
// 	'senha'=> md5('123')
// ];
// $table->inserir('tb_usuarios',$dados);
// $dados = [
// 		'nome' => 'José da Silva'
// 	];
// $onde = 'id = 7';
// // $table->atualizar('tb_usuarios',$dados,$onde);
// $onde = 'id = 1';
// // $table->deletar('tb_usuarios',$onde);
// $onde = 'id = 4';
// // $usuario = $table->buscar('tb_usuarios',$onde);
// // print_r($usuario);
// $onde = "nome like '%Lu%'";
// $usuarios = $table->buscarTodos('tb_usuarios',$onde);
// print_r($usuarios);