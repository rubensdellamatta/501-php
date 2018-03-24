<?php 

namespace Model\Entity;

class Tarefas
{
	private $id;
	private $idusuario;
	private $descricao;
	private $dtinicio;
	private $dtfim;
	private $status;

	public function getId()
	{
	    return $this->id;
	}
	
	public function setId($id)
	{
	    $this->id = $id;
	}

	public function getIdusuario()
	{
	    return $this->idusuario;
	}
	
	public function setIdusuario($idusuario)
	{
	   $this->idusuario = $idusuario;
	}

	public function getDescricao()
	{
	    return $this->descricao;
	}
	
	public function setDescricao($descricao)
	{
	    $this->descricao = $descricao;
	}

	public function getDtinicio()
	{
	    return $this->dtinicio;
	}
	
	public function setDtinicio($dtinicio)
	{
	   $this->dtinicio = $dtinicio;
	}

	public function getDtfim()
	{
	    return $this->dtfim;
	}
	
	public function setDtfim($dtfim)
	{
	   $this->dtfim = $dtfim;
	}

	public function getStatus()
	{
	    return $this->status;
	}
	
	public function setStatus($status)
	{
	    $this->status = $status;
	}

}