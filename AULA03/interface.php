<?php 
interface ContaInterface
{
	public function sacar();
	public function depositar();
	public function verSaldo();
}
class Conta implements ContaInterface
----{
	public function sacar(){}
	public function depositar(){}
	public function verSaldo(){}
}