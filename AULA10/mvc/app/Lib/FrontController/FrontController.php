<?php 

namespace Lib\FrontController;

use Controller\UsuariosController;

class FrontController
{
	private $routes;
	private $routeDefault = 'tarefas';

	public function setRoutes(array $routes){
		$this->routes = $routes;
	}
	public function setRouteDefault(string $route){
		$this->routeDefault = $route;
	}
	public function run(){
		$r = isset($_GET['r']) ? $_GET['r'] : $this->routeDefault;

		if (array_key_exists($r,$this->routes)) {
			$controller = $this->routes[$r];
			$this->callController($controller);
		} else {
			echo "Rota Inválida";
		}
	}

	private function callController(string $controllerAction){
		$controllerAction = explode('@', $controllerAction);
		$controller = $controllerAction[0];
		$action = $controllerAction[1];
		$id = isset($_GET['id']) ? $_GET['id'] : null;

		$controller = 'Controller\\' . $controller;

		$objController = new $controller();
		$objController->$action($id);
	}
}