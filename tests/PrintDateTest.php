<?php

namespace LuisRovirosa\PrintDate\Tests;

use LuisRovirosa\PrintDate\Date;
use LuisRovirosa\PrintDate\PrintDate;
use LuisRovirosa\PrintDate\Printer;
use PHPUnit\Framework\TestCase;

class PrintDateTest extends TestCase
{
    /** @test */
    public function print_date()
    {
        $printDate = new PrintDate(new Printer(), new Date());

        $printDate->printCurrentDate();

        // Assert ??
    }
}