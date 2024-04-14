<?php

use MadByAd\MPLDateTime\Date;
use MadByAd\MPLDateTime\DateCalculator;
use MadByAd\MPLDateTime\DateFormat;
use MadByAd\MPLDateTime\Time;
use PHPUnit\Framework\TestCase;

final class DateCalculatorTest extends TestCase
{

    /**
     * Test date addition by a certain time
     */

    public function testDateAddition()
    {

        $date = new Date(0);
        $time = new Time();

        $time->setDay(15);

        $this->assertSame("16 January 1970", DateCalculator::add($date, $time)->get(DateFormat::D_MONTH_YYYY));

        $time->setDay(7);

        $this->assertSame("8 January 1970", DateCalculator::add($date, $time)->get(DateFormat::D_MONTH_YYYY));

        $time->addDay(3);

        $this->assertSame("11 January 1970", DateCalculator::add($date, $time)->get(DateFormat::D_MONTH_YYYY));

    }

    /**
     * Test subtracting date by a certain time
     */

    public function testDateSubtraction()
    {

        $date = new Date(86400 * 364);$time = new Time();

        $time->setDay(15);

        $this->assertSame("16 December 1970", DateCalculator::subtract($date, $time)->get(DateFormat::D_MONTH_YYYY));

        $time->setDay(7);

        $this->assertSame("24 December 1970", DateCalculator::subtract($date, $time)->get(DateFormat::D_MONTH_YYYY));

        $time->addDay(3);

        $this->assertSame("21 December 1970", DateCalculator::subtract($date, $time)->get(DateFormat::D_MONTH_YYYY));

    }

    /**
     * Test calculating the time gap between two date
     */

    public function testTimeGapCalculation()
    {

        $firstDate = new Date(0);
        
        $secondDate = new Date(86400 * 30 * 12);$time = new Time();

        $this->assertSame("1 year", DateCalculator::timeGap($firstDate, $secondDate)->getString());

        $this->assertSame("1 year", DateCalculator::timeGap($secondDate, $firstDate)->getString());

    }

}
