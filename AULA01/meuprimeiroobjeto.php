
<?php 
echo "<pre>";
class Carro
{
	public $cor;
	public $marca;
	public $modelo;
	public $velocidade;
	
	public function buzinar(){
		echo "Estou buzinando <br>";
	}
	public function acelerar(){
		$this->velocidade += 10;
	}
	public function freiar(){
		$this->velocidade -= 10;
	}
}
$uno = new Carro(); //criando carro *objeto
$uno->cor = "Azul"; //atribuindo a cor
$uno->marca = "Fiat"; //atribuindo marca
$uno->modelo = "Uno 1.0"; //atribuindo modelo
$uno->buzinar();
$uno->acelerar();
$uno->acelerar();
$uno->acelerar();
echo "Velocidade Atual: " . $uno->velocidade . "<br>";
$uno->freiar();
echo "Velocidade Atual: " . $uno->velocidade . "<br>";
var_dump($uno);
// $gol = new Carro();
// $gol->cor = "Preto";
// $gol->marca = "VW";
// $gol->modelo = "Gol 1.4";
// var_dump($gol);