<?php 
trait Log 
{
	public $att = 'att';
	protected function escreverLog($msg){
		echo "Log da $msg";
	}
}
class X
{
	use Log;
	public function salvar(){
		$this->escreverLog("Trait" . $this->att);
	}
}
class Y extends X
{
	public function save(){
		$this->escreverLog("Trait" . $this->att);	
	}
}
$x = new X();
$x->salvar();
$y = new Y();
$y->save();