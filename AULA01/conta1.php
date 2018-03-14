<?php 
// Classe Conta
// Propriedades numConta, saldo, titular;
// Métodos sacar, depositar,verSaldo,verTitular;
class Conta
{
	public $numConta;
	private $saldo;
	private $titular;
	public function __construct($titular, $saldo = 0){
		$this->titular = $titular;
		$this->numConta = (string) rand(100,999) . "-" . rand(0,9);
		$this->depositar($saldo);
	}
	public function verTitular(){
		return "O Titular da conta é {$this->numConta} : " . $this->titular . "<br>";
	}
	public function verSaldo(){
		return "o Saldo Atual é: " . $this->saldo . "<br>";
	}
	public function sacar($qtdSacar){
		$this->saldo -= $qtdSacar;
	}
	public function depositar($qtdDeposito){
		$this->saldo += $qtdDeposito;
	}
}
$conta = new Conta("Lucas",500);
echo $conta->verTitular();
$conta->depositar(1000);
echo $conta->verSaldo();
$conta->sacar(200);
$conta->sacar(40);
echo $conta->verSaldo();
echo "<hr>";
$conta1 = new Conta("João");
echo $conta1->verTitular();