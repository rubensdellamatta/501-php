<?php 

abstract class Conta 
{
	private $titular;
	protected $saldo;
	protected $numConta;
	private $senha;

	public function __construct(string $nome,string $senha,int $saldo = 0){
		$this->saldo = $saldo;
		$this->senha = $senha;
		$this->titular = $nome;
		$this->gerarNumConta();
	}

	abstract protected function gerarNumConta();
	abstract protected function depositar(int $valor);

	public final function getSaldo(){
		return $this->saldo;
	}
	public final function getTitular(){
		return $this->titular;
	}
	public final function getNumConta(){
		return $this->numConta;
	}
	public final function sacar(int $valor){
		$this->saldo -= $valor;
	}
}

final class ContaPoupanca extends Conta
{
	protected function gerarNumConta(){
		$this->numConta = 'cp:' . rand(100,999);
	}
	public function depositar(int $valor){
		$this->saldo += $valor + ($valor * 0.02);
	}
}

class ContaCorrente extends Conta
{
	private $chequeEspecial = false;

	public function liberarChequeEspecial(){
		$this->chequeEspecial = true;
	}
	protected final function gerarNumConta(){
		$this->numConta = 'cc:' . rand(100,999);
	}
	public function depositar(int $valor){
		$this->saldo += $valor - ($valor * 0.02);
	}
}

final Class ContaSalario extends ContaCorrente
{
	public function depositar(int $valor){
		$this->saldo += $valor;
	}
}

echo "<pre>";
$cp = new ContaPoupanca("lucas","123",10000);
var_dump($cp);
$cp->depositar(50);
var_dump($cp);
$cp->sacar(150);
var_dump($cp);
var_dump($cp->getSaldo());
var_dump($cp->getTitular());
var_dump($cp->getNumConta());
echo "<hr>";
$cc = new ContaCorrente("lucas","123",10000);
var_dump($cc);
$cc->depositar(50);
var_dump($cc);
$cc->sacar(150);
$cc->liberarChequeEspecial();
var_dump($cc);
var_dump($cc->getSaldo());
var_dump($cc->getTitular());
var_dump($cc->getNumConta());
echo "<hr>";
$cs = new ContaSalario("lucas","123",10000);
var_dump($cs);
$cs->depositar(50);
var_dump($cs);
$cs->sacar(150);
// $cs->liberarChequeEspecial();
var_dump($cs);
var_dump($cs->getSaldo());
var_dump($cs->getTitular());
var_dump($cs->getNumConta());