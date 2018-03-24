<?php 
namespace Lib\FrontController;
use Controller\UsuariosController;
class FrontController
{
	public function run(){
		
		$rota = isset($_GET['r']) ? $_GET['r'] : 'usuarios';
		$rota = explode('/',$rota);
		$controller = isset($rota[0]) ? $rota[0] : 'usuarios';
		$action = isset($rota[1]) ? $rota[1] : 'index';
		$id = isset($rota[2]) ? $rota[2] : null;
		$controller = 'Controller\\' . ucfirst($controller) . 'Controller';
		// new Controller\UsuariosController
		$objController = new $controller();
		// obj(UsuariosController)->edit($id)
		$objController->$action($id);
	}
}