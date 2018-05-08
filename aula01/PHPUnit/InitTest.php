<?php

// Início obrigatório com Use
// Nome do arquivo deve terminar com Test
// Nome da classe deve ser igual ao nome do arquivo
// Rodar teste: phpunit --colors NomeDoArquivoTest.php

use PHPUnit\Framework\TestCase;

class InitTest extends TestCase
{
	// Teste idêntico
	// assertSame vem da TestCase
	// É um dos muitos Asserts (ver documentação)
	public function testIdentico()
	{
		$soma = 2 + 2;
		$this->assertSame(4, $soma);
	}

	// True e False só funcionam com Boolean
	public function testVerdadeiro()
	{
		$verdadeiro = true;
		$this->assertTrue($verdadeiro);
	}

	public function testFalso()
	{
		$verdadeiro = false;
		$this->assertFalse($verdadeiro);
	}

	// Teste se count é igual
	public function testContador()
	{
		$arr = ['a', 1, true];

		// qtd de elementos do array
		$count = count($arr);

		// verifica se no array há a quantidade estabelecida no primeiro parâmetro
		$this->assertSame(3, $count);
		$this->assertCount(3, $arr);
	}

	public function testVazio()
	{
		// são valores vazios:
		// 0, '', false, null, []

		$vazio = 0;
		$this->assertEmpty($vazio);
	}

	public function testNull()
	{
		$vazio = null;
		$this->assertNull($vazio);
	}

	// Testa se é igual, mas não a tipagem.
	public function testIgual()
	{
		$a = '1';
		$b = 1;

		$this->assertEquals($a, $b);
	}
}