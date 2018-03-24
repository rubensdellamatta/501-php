<?php

namespace Model\Mapper;

use Lib\TableGateway\TableGateway;

class UsuariosMapper extends TableGateway
{
	protected $entity = 'Model\Entity\Usuarios';
	protected $table  = 'tb_usuarios';
}