<?php

require 'Estoque.php';

use PHPUnit\Framework\TestCase;

class EstoqueTest extends TestCase
{
	private $estoque;

	public function setUp()
	{
		$this->estoque = new Estoque();
	}

	public function testAddItem()
	{
		// Este teste usa dois métodos de Estoque
		$item = 'Garrafa';
		$qtd = 10;

		$this->estoque->add($item, $qtd);

		$this->assertSame(10, $this->estoque->get($item));
	}

	public function testSomaQtd()
	{
		// Este teste analisa a soma dos ítens em estoque
		$item = 'garrafa de refrigerante';

		$this->estoque->add($item, 4);
		$this->estoque->add($item, 2);
		$this->estoque->add($item, 10);

		$this->assertSame(16, $this->estoque->get($item));
	}

	/**
	 * @expectedException InvalidArgumentException
	 * @expectedExceptionMessage Item não existe no estoque
	 */
	public function testItemInvalido()
	{
		$this->estoque->get('Garrafa de vidro');
	}

	
	public function testRemoveQuantidade()
	{
		$this->estoque->add('Garrafinha', 10);
		$this->estoque->removeItem('Garrafinha', 5);

		$this->assertSame(5, $this->estoque->get('Garrafinha'));
	}
}