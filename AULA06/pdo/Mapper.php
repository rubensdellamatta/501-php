<?php 
require 'tableGateway.php';
require 'Usuarios.php';
class UsuariosMapper extends TableGateway
{
	protected $entity = 'Usuarios';
	protected $table  = 'tb_usuarios';
	public function buscarTarefasDoUsuario(string $onde){
		$sql = "SELECT * FROM {$this->table} LEFT JOIN tb_tarefas ON {$this->table}.id = tb_tarefas.idusuario";
		if ($onde) {
			$sql .= " WHERE {$onde}";
		}
		echo $sql;
		// $resultado = $this->con->query($sql);
		
		// while ($registro = $resultado->fetchObject($this->entity)) {
		// 	$colecao[] = $registro;
		// }
		// return $colecao;
	}
}
echo"<pre>";
$mapper = new UsuariosMapper();
// $usuarios = $mapper->buscarTodos();
// print_r($usuarios);
$tarefas = $mapper->buscarTarefasDoUsuario('tb_usuarios.id = 4');
print_r($tarefas);