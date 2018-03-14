<?php 
// Classe Carro
// Atributos privados cor, marca, velocidade, marcha;
// Construtor que define uma cor e uma marca para o carro;
// Métodos publicos,verCor,verMarca,verVelocidade,verMarcha;
// Método publico acelelar - aumenta a velocidade em 10
// Método publico freiar - diminui a velocidade em 10
// Método publico trocarMarcha - recebe uma marcha por parametro e altera;
class Carro
{
	private $cor;
	private $marca;
	private $velocidade;
	private $macha;

	public function __construct($cor,$marca){
		$this->cor = $cor;
		$this->marca = $marca;
	}
	public function acelelar(){
		$this->velocidade += 10;
	}
	public function freiar(){
		$this->velocidade -= 10;
	}
	public function trocarMarcha($marcha){
		$this->marcha = $marcha;
	}
	public function verVelocidade(){
		return "Velocidade Atual:" . $this->velocidade;
	}
	public function verMarcha(){
		return "Marcha Atual:" . $this->marcha;
	}
	public function verCor(){
		return "O Carro é da cor:" . $this->cor;
	}
	public function verMarca(){
		return "O Carro é da marca:" . $this->marca;
	}
}

