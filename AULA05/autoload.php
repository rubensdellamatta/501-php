<?php 
function __autoload($classe){
	die( "estou instanciando a classe: " . $classe);
}
(new ClaseAluno);