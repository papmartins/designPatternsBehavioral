<?php

namespace Alura\DesignPattern;

class CacheOrcamentoProxy implements Orcavel
{
    private float $valorCache = 0;
    private Orcavel $orcamento;

    public function __construct(Orcavel $orcamento)
    {
        $this->orcamento = $orcamento;
    }


    public function valor(): float
    {
        if ($this->valorCache == 0) {
            $this->valorCache = $this->orcamento->valor();
        }

        return $this->valorCache;
    }
}
