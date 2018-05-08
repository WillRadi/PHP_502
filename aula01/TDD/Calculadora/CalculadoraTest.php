<?php

require 'Calculadora.php';

use PHPUnit\Framework\TestCase;

class CalculadoraTest extends TestCase
{
	private $calc;
	// Executando sempre antes de iniciar o teste
	// Como se fosse o Construtor
	public function setUp()
	{
		$this->calc = new Calculadora();
	}

	// um teste para cada operação:

	public function testSoma()
	{
		$result = $this->calc->somar(3, 5);

		$this->assertSame(8, $result);
	}

	public function testSubtrair()
	{
		$result = $this->calc->subtrair(2, 2);

		$this->assertSame(0, $result);
	}

	public function testMultip()
	{
		$result = $this->calc->multip(0, 2);

		$this->assertSame(0, $result);	
	}

	public function testDivi()
	{
		$result = $this->calc->divi(2, 2);
		$this->assertSame(1, $result);		
	}
}