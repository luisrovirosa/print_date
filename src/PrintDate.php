<?php

namespace LuisRovirosa\PrintDate;

class PrintDate
{
    /** @var Printer */
    private $printer;

    public function __construct()
    {
        $this->printer = new Printer();
    }

    public function printCurrentDate()
    {
        $this->print($this->currentDate());
    }

    private function currentDate():string
    {
        return date('d-m-Y');
    }

    private function print($date)
    {
        $this->printer->print($date);
    }
}