<?php 

namespace Model;

use Model\Mapper\UsuariosMapper;
use Model\Entity\Usuarios;

class UsuariosModel
{
	private $usuariosMapper;

	public function __construct(){
		$this->usuariosMapper = new UsuariosMapper();
	}

	public function all(){
		return $this->usuariosMapper->findAll();
	}
	public function insert($data){
		$this->usuariosMapper->insert($data);
	}
}