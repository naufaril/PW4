<?php

namespace TUGAS2\Traits;

trait Printable
{
    public function printInfo()
    {
        echo "Nama: {$this->nama}\n";
        echo "Umur: {$this->umur}\n";
    }
}
