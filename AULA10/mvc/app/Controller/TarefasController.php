<?php 

namespace Controller;

use Lib\BaseView\BaseView;
use Model\TarefasModel;

class TarefasController
{
	private $viewModel;
	private $baseView;

	public function __construct(){
		$this->baseView = new BaseView();
		$this->tarefasModel = new TarefasModel();
	}
	public function index(){
		$tarefas = $this->tarefasModel->all();
		$this->baseView->render('tarefas/index',
			['tarefas' => $tarefas]);
	}
	public function new(){
		$this->baseView->render('tarefas/new');
	}
	public function create(){
		$this->tarefasModel->insert($_POST);
		header('Location:?r=tarefas');
	}
	public function edit($id){
		$tarefa = $this->tarefasModel->edit($id);
		$this->baseView->render('tarefas/edit',
			['tarefa' => $tarefa]);
	}
	public function update($id){
		$this->tarefasModel->update($id,$_POST);
		header('Location:?r=tarefas');
	}
}