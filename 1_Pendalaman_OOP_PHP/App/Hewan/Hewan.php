<?php

abstract class Hewan extends Fight
{
    protected $nama,
              $darah = 50,
              $jumlahKaki,
              $keahlian;
            
    abstract protected function atraksi();
}