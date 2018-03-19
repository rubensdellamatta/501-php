<?php 
class NumerosNegativosException extends Exception{}
class NumerosMaiorCinquentaException extends Exception{}
class NaoPodeDividirPorZeroException extends Exception{}
class ValorInfinitoException extends Exception{}
class NaoPodeMultiplicarPorZeroException extends Exception{}
class Calc
{
	// Não permitir número negativos
	// Não pertitir resultado maior que 50

	
	public static function soma($a,$b){
		if ($a < 0 || $b < 0 ) {
			throw new NumerosNegativosException();
		}
		if ($a + $b > 50) {
			throw new NumerosMaiorCinquentaException();
		}
		return $a + $b;
	}
	// Não permitir resultado menor que zero

	
	public static function subt($a,$b){
		if ($a - $b < 0) {
			throw new NumerosNegativosException();			
		}
		return $a - $b;
	}
	// Não permitir divisão por zero
	// Não permitir valor Infinito $a == 0
	public static function divi($a,$b){
		if ($a == 0) {
			throw new ValorInfinitoException();		
		}
		if ($b == 0 ) {
			throw new NaoPodeDividirPorZeroException();		
		}
		return $a / $b;
	}
	// Não permitir multiplicação por zero
	// Não permitir resultado maior que 50
	public static function mult($a,$b){
		if ($a == 0 || $b == 0) {
			throw new NaoPodeMultiplicarPorZeroException();
		}
		if ($a * $b > 50) {
			throw new NumerosMaiorCinquentaException();
		}
		return $a * $b;
	}
}
try {
	
	echo Calc::soma(1,1);
	echo "<br>";
	echo "<hr>";
	echo Calc::subt(1,1);
	echo "<br>";
	echo "<hr>";
	echo "<hr>";
	echo Calc::divi(1,1);
	echo "<br>";
	echo "<hr>";
	echo "<hr>";
	echo "<hr>";
	echo Calc::mult(1,1);
	echo "<br>";
	echo "<hr>";
	echo "<hr>";
	echo "<hr>";
	echo "<hr>";
	echo Calc::subt(1,1);
	echo "<br>";
	echo "<hr>";
	echo "<hr>";
	echo "<hr>";
	echo "<hr>";
	echo "<hr>";
} catch (NumerosNegativosException $e) {
	echo "NumerosNegativosException";
} catch (NumerosMaiorCinquentaException $e){
	echo "NumerosMaiorCinquentaException";
} catch (NaoPodeDividirPorZeroException $e){
	echo "NaoPodeDividirPorZeroException";
} catch (ValorInfinitoException $e){
	echo "ValorInfinitoException";
} catch (NaoPodeMultiplicarPorZeroException $e){
	echo "NaoPodeMultiplicarPorZeroException";
} catch (Exception $e) {
	echo "Exception";
}
echo "<br>";

try {
	echo Calc::soma(25,26);
} catch (NumerosNegativosException $e) {
	echo "NumerosNegativosException";
echo "<hr>";
} catch (NumerosMaiorCinquentaException $e){
	echo "NumerosMaiorCinquentaException";
echo "<hr>";
} catch (NaoPodeDividirPorZeroException $e){
	echo "NaoPodeDividirPorZeroException";
echo "<hr>";
} catch (ValorInfinitoException $e){
	echo "ValorInfinitoException";
echo "<hr>";
} catch (NaoPodeMultiplicarPorZeroException $e){
	echo "NaoPodeMultiplicarPorZeroException";
echo "<hr>";
} catch (Exception $e) {
	echo "Exception";
}