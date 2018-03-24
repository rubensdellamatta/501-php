<?php 

namespace Model;

use Model\Mapper\TarefasMapper;
use Model\Entity\Tarefas;

class TarefasModel
{
	private $tarefasMapper;

	public function __construct(){
		$this->tarefasMapper = new TarefasMapper();
	}

	public function all(){
		return $this->tarefasMapper->findAll();
	}
	public function insert($data){
		$this->tarefasMapper->insert($data);
	}
	public function edit($id){
		$where = "id={$id}";
		return $this->tarefasMapper->find($where);
	}
	public function update($id,$data){
		$where = "id={$id}";
		$this->tarefasMapper->update($data,$where);
	}
}