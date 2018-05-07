<?php

require 'Cliente.php';

use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase
{
	private $cliente;

	public function testCriacaoCliente()
	{
		$cliente = new Cliente('Will');
		
		$this->assertSame('Will', $cliente->getNome);
	}
}