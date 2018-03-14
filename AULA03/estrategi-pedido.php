<?php 

// Inadequado
// class Pedido
// {
// 	public function __construct($tipoFrete){
// 		if ($tipoFrete == 'fn') {
// 			echo "Frete Normal";
// 		} else if ($tipoFrete == 'fe'){
// 			echo "Frete Expresso";
// 		} else if ( $tipoFrete == 'ft'){
// 			echo "Frete Turbo";
// 		} else {
// 			echo "Frete não encontrado";
// 		}
// 	}
// }

// $pedido = new Pedido('fe');

// Strategy Pattern
interface FreteStrategy
{
	public function calcular($preco);
}

class FreteNormal implements FreteStrategy
{
	public function calcular($preco){
		return 2+$preco;
	}
}
class FreteExpresso implements FreteStrategy
{
	public function calcular($preco){
		return 5 + $preco;
	}
}
class FreteTurbo implements FreteStrategy
{
	public function calcular($preco){
		return 10 + $preco;
	}
}

class Pedido
{
	private $preco = 0;
	private $freteStrategy;

	public function __construct(int $preco, FreteStrategy $tipoFrete){
		$this->preco = $preco;
		$this->freteStrategy = $tipoFrete;
	}
	public function calcularTotalPedido(){
		return $this->freteStrategy->calcular($this->preco);
	}
}

$pedido = new Pedido(100,new FreteNormal());
echo $pedido->calcularTotalPedido();