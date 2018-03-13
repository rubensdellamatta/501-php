<?php 

// Classe Conta
// Propriedades numConta, saldo, titular;
// Métodos sacar, depositar,verSaldo,verTitular;

class Conta
{
	public $numConta;
	public $saldo;
	public $titular;

	public function verTitular(){
		return "O Titular da conta é : " . $this->titular;
	}
	public function verSaldo(){
		return "o Saldo Atual é: " . $this->saldo;
	}
	public function sacar($qtdSacar){
		$this->saldo -= $qtdSacar;
	}
	public function depositar($qtdDeposito){
		$this->saldo += $qtdDeposito;
	}
}

$conta = new Conta();
$conta->titular = "rubens";
echo $conta->verTitular();
echo "<hr>";
$conta1 = new Conta();
$conta1->titular = "João";
echo $conta1->verTitular();