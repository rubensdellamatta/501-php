<?php 
// Criar classe Caneta
// Propriedades cor, marca;
// Criar um objeto com cor = vermelha e marca = bic
// Criar um objeto com cor = azul e marca = compactor
// Criar um método chamado escrever, este método escreve algo na tela;
// Criar propriedade tampada(boolean)
// Método destampar - atribuir o valor false para a propriedade tampada
// Método tampar - atribuir o valor true para a propriedade tampada
class Caneta
{
	public $cor;
	public $marca;
	public $tampada;
	public function escrever(string $texto){
		if ($this->tampada) {
			echo "Primeiro Destampe a Caneta";
		} else {
			echo "Estrou escrendo: " . $texto;
		}
	}
	public function destampar(){
		$this->tampada = false;
	}
	public function tampar(){
		$this->tampada = true;
	}
}
echo "<pre>";
$vermelha = new Caneta();
var_dump($vermelha);
$vermelha->cor = "vermelha";
var_dump($vermelha);
$vermelha->marca = "bic";
var_dump($vermelha);
$vermelha->tampar();
var_dump($vermelha);
$vermelha->escrever("qwert");
// var_dump($vermelha);
// $azul = new Caneta();
// $azul->cor = "azul";
// $azul->marca = "compactor";
// var_dump($azul);

//pagina03