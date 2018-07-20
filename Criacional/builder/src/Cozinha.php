<?php

namespace Builder;


class Cozinha
{
    public function fazSanduiche(SanduicheBuilder $builder)
    {
        $builder->abrePao();
        $builder->insereIngredientes();
        $builder->fechaPao();
    }
}