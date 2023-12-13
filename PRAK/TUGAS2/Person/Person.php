<?php

namespace Person;

abstract class Person
{
    protected $nama;
    protected $umur;

    public function __construct($nama, $umur)
    {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    abstract public function speak();
}