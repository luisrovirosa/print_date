<?php

namespace LuisRovirosa\PrintDate;

class PrintDate
{
    /** @var Date */
    private $date;
    /** @var Printer */
    private $printer;

    public function __construct(Printer $printer, Date $date)
    {
        $this->printer = $printer;
        $this->date = $date;
    }

    public function printCurrentDate()
    {
        $this->print($this->currentDate());
    }

    private function currentDate():string
    {
        return $this->date->currentDate();
    }

    private function print($date)
    {
        $this->printer->print($date);
    }
}