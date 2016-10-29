<?php

namespace LuisRovirosa\PrintDate;

class PrintDate
{
    /** @var Printer */
    private $printer;

    public function __construct(Printer $printer)
    {
        $this->printer = $printer;
    }

    public function printCurrentDate()
    {
        $this->print($this->currentDate());
    }

    private function currentDate():string
    {
        $date = new Date();

        return $date->currentDate();
    }

    private function print($date)
    {
        $this->printer->print($date);
    }
}