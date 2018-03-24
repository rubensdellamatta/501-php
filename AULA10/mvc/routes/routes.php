<?php 

$routes = [];

$routes['usuarios'] = 'UsuariosController@Index';
$routes['usuarios/new'] = 'UsuariosController@New';
$routes['usuarios/create'] = 'UsuariosController@Create';

$routes['tarefas'] = 'TarefasController@Index';
$routes['tarefas/new'] = 'TarefasController@New';
$routes['tarefas/create'] = 'TarefasController@Create';
$routes['tarefas/edit'] = 'TarefasController@Edit';
$routes['tarefas/update'] = 'TarefasController@Update';

return $routes;