
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
$uno = new Carro();
$uno->cor = "Azul";
$uno->marca = "Fiat";
$uno->modelo = "Uno 1.0";
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