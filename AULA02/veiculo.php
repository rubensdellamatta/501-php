<?php 

// Classe Pai - Veiculo
// Classes Filhas - Moto, Carro e Bicicleta
// Criar na classe pai todas as características em comum das classes filhas.

class Veiculo
{
	protected $cor;
	protected $marca;
	protected $velocidade;

	protected function acelerar(){}
	protected function freiar(){}
}

class Moto extends Veiculo{
	public function acelerar(){
		$this->velocidade += 5;
	}
}
class Carro extends Veiculo{
	public function acelerar(){
		$this->velocidade += 10;
	}
}
class Bike extends Veiculo{
	public function acelerar(){
		$this->velocidade += 2;
	}
}
echo "<pre>";
$car = new Carro();
$car->acelerar();
var_dump($car);
$moto = new Moto();
$moto->acelerar();
var_dump($moto);
$bike = new Bike();
$bike->acelerar();
var_dump($bike);