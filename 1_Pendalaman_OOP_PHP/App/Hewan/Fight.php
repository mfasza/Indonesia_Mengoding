<?php

abstract class Fight
{
    protected $attackPower,
              $defencePower;

    abstract protected function serang( Hewan $musuh );
    
    abstract protected function diserang();
}