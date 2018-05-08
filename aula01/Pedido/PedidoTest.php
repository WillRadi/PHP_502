<?php

require 'Pedido.php';

use PHPUnit\Framework\TestCase;

class PedidoTest extends TestCase
{
	private $estoque;
	public function setUp()
	{
		// $this->estoque = new Estoque();
		// $this->estoque->add('garrafa coca', 10);
		// $this->estoque->add('garrafa fanta', 10);

		$this->estoque = $this->getMockbuilder('Estoque')->getMock();
	}

	public function testDeveFecharPedido()
	{
		$item = 'garrafa de coca';
		$qtd = 3;

		$this->estoque->expects($this->once())
							->method('get')
							->with($this->equalTo($item))
							->will($this->returnValue($qtd));

		$this->estoque->expects($this->once())
							->method('removeItem')
							->with(
									$this->equalTo($item),
									$this->equalTo($qtd)
								);

		$pedido = new Pedido($item, $qtd);
		$pedido->fechar($this->estoque);

		$this->assertTrue($pedido->isFinalizado());
		// $pedido = new Pedido('garrafa coca', 3);
		// $pedido->fechar($this->estoque);

		// // teste no objeto Pedido
		// $this->assertTrue($pedido->isFinalizado());
		// // Teste no obj Estoque
		// $this->assertSame(7, $this->estoque->get('garrafa coca'));

		// // Testar dois objetos vai contra a ideia de teste UNITÁRIO
	}

	public function testNaoDeveFecharPedido()
	{
		$item = 'garrafa de coca';
		$qtd = 3;

		// Executa o método get, mas não o método removeItem

		// Meu meio raciocínio...
		// $getDoEstoque = $this->estoque->expects($this->once())
		// 							->method('get')
		// 							->with($this->equalTo($item))
		// 							->will($this->returnValue($qtd));

		// if (!isset($getDoEstoque) || $getDoEstoque[$item] >= $qtd) {
			
		// }


		// Método "correto"
		$this->estoque->expects($this->once())
						->method('get')
						->with($this->equalTo($item))
						->will($this->returnValue(0));
		$this->estoque->expects($this->never())
						->method('removeItem');

		$pedido = new Pedido($item, $qtd);
		$pedido->fechar($this->estoque);

		$this->assertFalse($pedido->isFinalizado());
	}
}