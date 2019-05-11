<?php

class carrinho 
{
    private $itensCarrinho;
    public function __construct()
    {
        $this->carrinho = [];
    }
    public function adicionarItem(ItemCarrinho $item)
    {
        $this->itensCarrinho[]= $item;
    }
    public function total()
    {
        $total=0;
        foreach($this->itensCarrinho as $item){
            $total = $total+$item -> subtotal();
        }
    }
}


