<?php

namespace Person;

use TUGAS2\Traits\Printable;

class Student extends Person
{
    use Printable;

    public function speak()
    {
        echo "Halo, nama saya {$this->nama}. Saya mahasiswa berusia {$this->umur} tahun.\n";
    }
}
