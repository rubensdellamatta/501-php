<?php 

class Impressora
{
	public function imprimir(DocGenerico $doc){
		echo $doc->getConteudo();
	}
}

interface DocGenerico{
	public function getConteudo();
}

class Documento implements DocGenerico
{
	private $conteudo;

	public function __construct(string $conteudo){
		$this->conteudo = $conteudo;
	}

	public function getConteudo(){
		return $this->conteudo;
	}
}

class Planilha implements DocGenerico
{
	private $conteudo;

	public function __construct(array $conteudo){
		foreach ($conteudo as $linha) {
			$this->conteudo .= $linha . "<br>";
		}
	}
	public function getConteudo(){
		return $this->conteudo;
	}
}

$documento = new Documento('4linux');
$planilha = new Planilha(['oi','olá']);
$imp = new Impressora();
$imp->imprimir($documento);
echo "<hr>";
$imp->imprimir($planilha);