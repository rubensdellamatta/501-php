<?php 
interface TelevisaoInterface
{
	public function aumentarVolume();
	public function diminuirVolume();
	public function ligar();
	public function desligar();
	public function trocarCanal($canal);
}
class TV implements TelevisaoInterface
{
	public $volume = 10;
	public $canal = 5;
	public $estado = false;

	public function aumentarVolume(){
		$this->volume++;
	}
	public function diminuirVolume(){
		$this->volume--;
	}
	public function ligar(){
		$this->estado = true;
	}
	public function desligar(){
		$this->estado = false;
	}
	public function trocarCanal($canal){
		$this->canal = $canal;
	}
}


