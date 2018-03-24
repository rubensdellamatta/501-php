<?php 
namespace Model;
use Model\Db\Conexao;
use PDO;
class Model
{
	private $con;
	public function __construct(){
		$this->con = Conexao::getInstance();
	}
	public function getUsuarios(){
		$sql = "SELECT * FROM tb_usuarios";
		$stmt = $this->con->query($sql);
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}
}