<?php

class Harimau extends Hewan
{
    private static $count = 1;
    private const JENIS = 'Harimau';


    public function __construct()
    {
        $this->nama = self::JENIS . "_" . self::$count++;
        $this->jumlahKaki = 4;
        $this->keahlian = "lari cepat";
        $this->attackPower = 7;
        $this->defencePower = 8;
    }

    public function getInfoHewan()
    {
        $str = "<strong>Info Hewan</strong> <br>";
        $str .= "Jenis: " . self::JENIS . "<br>";
        $str .= "Nama: {$this->nama}<br>";
        $str .= "Darah: {$this->darah}<br>";
        $str .= "Jumlah Kaki: {$this->jumlahKaki}<br>";
        $str .= "Keahlian: {$this->keahlian}<br>";
        $str .= "Attack Power: {$this->attackPower}<br>";
        $str .= "Defence Power: {$this->defencePower}<br>";
        echo $str;
    }

    public function serang( Hewan $musuh )
    {
        $musuh->darah = $musuh->darah - $this->attackPower / $musuh->defencePower;
        echo "{$this->nama} sedang menyerang {$musuh->nama} <br>";
    }
    
    public function diserang()
    {
        echo "{$this->nama} sedang diserang <br>";
    }

    public function atraksi()
    {
        echo "{$this->nama} sedang {$this->keahlian} <br>";
    }
}