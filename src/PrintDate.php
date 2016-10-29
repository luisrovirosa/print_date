<?php

namespace LuisRovirosa\PrintDate;

class PrintDate
{
    public function printCurrentDate()
    {
        $this->print($this->currentDate());
    }

    private function currentDate():string
    {
        return date('d-m-Y');
    }

    private function print($date){
        echo $date;
    }
}