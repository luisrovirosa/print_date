<?php

namespace LuisRovirosa\PrintDate\Tests;

use LuisRovirosa\PrintDate\Date;
use LuisRovirosa\PrintDate\PrintDate;
use LuisRovirosa\PrintDate\Printer;
use PHPUnit\Framework\TestCase;
use Prophecy\Argument;

class PrintDateTest extends TestCase
{
    /** @test */
    public function prints_the_current_date_into_the_printer()
    {
        $dateProphecy = $this->prophesize(Date::class);
        $dateProphecy->currentDate()->willReturn('06-02-1982');
        $printerProphecy = $this->prophesize(Printer::class);
        $printDate = new PrintDate($printerProphecy->reveal(), $dateProphecy->reveal());

        $printDate->printCurrentDate();

        $printerProphecy->printString(Argument::any())->shouldHaveBeenCalled();
    }
}