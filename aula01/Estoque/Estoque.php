<?php

class Estoque
{
	private $itens = [];

	public function add (string $item, int $qtd)
	{
		// Item vai ser o índice e quantidade vai ser o valor
		if (array_key_exists($item, $this->itens)) {
			$this->itens[$item] += $qtd;
		} else {
			$this->itens[$item] = $qtd;
		}
	}

	public function get(string $item)
	{
		if (isset($this->itens[$item])) {
			return $this->itens[$item];
		}

		throw new InvalidArgumentException('Item não existe no estoque');
	}

	public function removeItem(string $item, int $qtd)
	{
		if (isset($this->itens[$item])) {
			return $this->itens[$item] -= $qtd;
		}

		throw new InvalidArgumentException('Item não consta em estoque');
	}
}