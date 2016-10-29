<?php

namespace LuisRovirosa\PrintDate\Tests;

use LuisRovirosa\PrintDate\PrintDate;
use PHPUnit\Framework\TestCase;

class PrintDateTest extends TestCase
{
    /** @test */
    public function print_date()
    {
        $printDate = new PrintDate();

        $printDate->printCurrentDate();

        // Assert ??
    }
}