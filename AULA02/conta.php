<?php 

class Conta
{
	private $titular;
	private $numConta;
	private $saldo;

	public function __construct(string $nome, int $saldo){
		$this->titular = $nome;
		$this->saldo = $saldo;
		$this->gerarNumConta();
	}

	public function getSaldo()
	{
	    return $this->saldo;
	}
	
	protected function setSaldo($saldo)
	{
	    $this->saldo = $saldo;
	}
	public function getTitular()
	{
	    return $this->titular;
	}
	
	public function setTitular($titular)
	{
	    $this->titular = $titular;
	}

	public function getNumConta()
	{
	    return $this->numConta;
	}
	
	public function setNumConta($numConta)
	{
	    $this->numConta = $numConta;
	}
}

class ContaCorrente extends Conta
{
	private $chequeEspecial = false;

	public function getChequeEspecial()
	{
	    return $this->chequeEspecial;
	}
	
	public function setChequeEspecial($chequeEspecial)
	{
	    $this->chequeEspecial = $chequeEspecial;
	}

	public function depositar(int $valor){
		$this->setSaldo($this->getSaldo() + $valor);
	}
	public function sacar(int $valor){
		$this->setSaldo($this->getSaldo() - $valor);
	}

	protected function gerarNumConta(){
		$this->setNumConta('cc:' . rand());
	}
}

$cc = new ContaCorrente("Lucas", 500);
// $cc->gerarNumConta();
$cc->depositar(100);
var_dump($cc);