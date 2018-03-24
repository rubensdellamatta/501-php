<?php

namespace Model\Mapper;

use Lib\TableGateway\TableGateway;

class TarefasMapper extends TableGateway
{
	protected $entity = 'Model\Entity\Tarefas';
	protected $table  = 'tb_tarefas';
}