<?php

namespace Person;

use TUGAS2\Traits\Printable;

class Teacher extends Person
{
    use Printable;

    public function speak()
    {
        echo "Selamat pagi, anak-anak. Nama saya {$this->nama}. Saya guru kalian yang berusia {$this->umur} tahun.\n";
    }
}
