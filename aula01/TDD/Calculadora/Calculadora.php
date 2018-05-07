<?php

class Calculadora
{
	public function somar(int $a,int $b)
	{
		return $a + $b;
	}

	public function subtrair(int $a, int $b)
	{
		return $a - $b;
	}

	public function multip(int $a, int $b)
	{
		return $a * $b;
	}

	public function divi(int $a, int $b)
	{

		if ($b == 0)
		{
			return '11o mandamento - Não dividirás por 0';
		}
		return $a / $b;
	}
}