<?php

class Pedido
{
  private int $id;
  private float $total;
  private array $itens;

  public function __construct($id, $itens)
  {
    $this->id = $id;
    $this->itens = $itens;
    
    $total = 0;
    foreach ($this->itens as $item)
    {
      $total += $item->calcularTotal();
    }
    $this->total = $total;
  }

  public function getId(): int { return $this->id; }
  
  public function getTotal(): float { return $this->total; }
  public function getItens(): array { return $this->itens; }
}

class Item
{
  private int $id;
  private float $preco;
  private int $quantidade;
  private String $nome;
  private String $marca;
  private String $tipo;

  function __construct($id, $preco, $quantidade, $nome, $marca, $tipo)
  {
    $this->id = $id;
    $this->preco = $preco;
    $this->quantidade = $quantidade;
    $this->nome = $nome;
    $this->marca = $marca;
    $this->tipo = $tipo;
  }

  public function getId(): int { return $this->id; }

  public function getPreco(): float { return $this->preco; }
  public function getQuantidade(): float { return $this->quantidade; }
  public function calcularTotal(): float { return $this->getPreco() * $this->getQuantidade(); }

  public function getNome(): String { return $this->nome; }
  public function getMarca(): String { return $this->marca; }
  public function getTipo(): String { return $this->tipo; }
}

$p1 = new Pedido(1, array(new Item(1, 10, 20, "Arroz", "Catarinão", "Alimento")));
print_r($p1->getItens());
print_r($p1->getTotal());