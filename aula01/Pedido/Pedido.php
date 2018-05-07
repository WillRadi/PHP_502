<?php

require '../Estoque/Estoque.php';

// Lembrar que a instância do estoque está no PedidoTest.php

class Pedido
{
	private $finalizado;
	private $item;
	private $qtd;

	public function __construct(string $item, int $qtd)
	{
		$this->item = $item;
		$this->qtd = $qtd;
	}

	public function fechar(Estoque $estoque)
	{
		if ($estoque->get($this->item) >= $this->qtd) {
			$this->finalizado = true;
			$estoque->removeItem($this->item, $this->qtd);
		}
	}

	public function isFinalizado()
	{
		return $this->finalizado;
	}


}