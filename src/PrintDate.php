<?php

namespace LuisRovirosa\PrintDate;

class PrintDate
{
    public function printCurrentDate()
    {
        echo $this->currentDate();
    }

    private function currentDate():string
    {
        return date('d-m-Y');
    }
}