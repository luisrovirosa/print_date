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
        $dateProphecy = $this->prophesize(Date::class);
        $dateProphecy->currentDate()->willReturn('06-02-1982');
        $printDate = new PrintDate(new Printer(), $dateProphecy->reveal());

        $printDate->printCurrentDate();


    }
}