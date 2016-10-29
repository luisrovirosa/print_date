<?php

namespace LuisRovirosa\PrintDate;

class Date
{

    public function currentDate():string
    {
        return date('d-m-Y');
    }
}