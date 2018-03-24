<?php 

namespace Lib\TableGateway;

use PDO;
use Lib\Db\Conexao;

abstract class TableGateway
{
	private $con;

	public function __construct(){
		$this->con = Conexao::getInstance();
	}

	public function insert( array $data){

		foreach ($data as $key => $value) {
			$keys[] = $key;
			$values[] = "'$value'";
		}

		$keys = implode(',', $keys);
		$values= implode(',', $values);

		$sql = "INSERT INTO {$this->table}({$keys}) VALUES({$values})";

		$this->con->exec($sql);
	}

	public function update(array $data, string $where){
		foreach ($data as $key => $value) {
			$sets[] = "{$key} = '{$value}'";
		}

		$sets = implode(',', $sets);

		$sql = "UPDATE {$this->table} SET {$sets} WHERE {$where}";

		$this->con->exec($sql);
	}

	public function delete( string $where){

		$sql = "DELETE FROM {$this->table} WHERE {$where}";

		$this->con->exec($sql);
	}

	public function find(string $where){
		$sql = "SELECT * FROM {$this->table} WHERE {$where}";

		$result = $this->con->query($sql);
		$register = $result->fetchObject($this->entity);

		return $register;
	}

	public function findAll(string $where = null){

		$sql = "SELECT * FROM {$this->table}";

		if ($where) {
			$sql .= " WHERE {$where}";
		}

		$result = $this->con->query($sql);
		
		while ($register = $result->fetchObject($this->entity)) {
			$colection[] = $register;
		}

		return $colection;
	}	
}