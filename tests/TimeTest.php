<?php

use MadByAd\MPLDateTime\Exceptions\TimeValueExceedDayException;
use MadByAd\MPLDateTime\Exceptions\TimeValueExceedHourException;
use MadByAd\MPLDateTime\Exceptions\TimeValueExceedMinuteException;
use MadByAd\MPLDateTime\Exceptions\TimeValueExceedMonthException;
use MadByAd\MPLDateTime\Exceptions\TimeValueExceedSecondException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeDayException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeHourException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeMonthException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeMinuteException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeSecondException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeUnixException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeYearException;
use MadByAd\MPLDateTime\Time;
use PHPUnit\Framework\TestCase;

final class TimeTest extends TestCase
{

    /**
     * test setting time value
     */

    public function testSetTimeValue()
    {

        $time = new Time;

        $time->setDay(1);

        $this->assertSame(0, $time->getSecond());
        $this->assertSame(1, $time->getDay());
        $this->assertSame(86400, $time->getUnix());

        $time->setDay(2);

        $this->assertSame(2, $time->getDay());
        $this->assertSame(172800, $time->getUnix());

    }

    /**
     * test the second calculation
     */
    
    public function testSecondCalculation()
    {

        $time = new Time;

        $time->addSecond(100);

        $this->assertSame(40, $time->getSecond());
        $this->assertSame(1, $time->getMinute());

        $time->addSecond(86400);

        $this->assertSame(40, $time->getSecond());
        $this->assertSame(1, $time->getMinute());
        $this->assertSame(1, $time->getDay());

        $time->subtractSecond(3600);

        $this->assertSame(40, $time->getSecond());
        $this->assertSame(1, $time->getMinute());
        $this->assertSame(23, $time->getHour());
        $this->assertSame(0, $time->getDay());

    }

    /**
     * test the minute calculation
     */

    public function testMinuteCalculation()
    {

        $time = new Time;

        $time->addMinute(150);

        $this->assertSame(2, $time->getHour());
        $this->assertSame(30, $time->getMinute());

        $time->addMinute(150);

        $this->assertSame(5, $time->getHour());
        $this->assertSame(0, $time->getMinute());

        $time->subtractMinute(30);

        $this->assertSame(4, $time->getHour());
        $this->assertSame(30, $time->getMinute());

    }

    /**
     * test the hour calculation
     */

    public function testHourCalculation()
    {

        $time = new Time;

        $time->addHour(25);

        $this->assertSame(1, $time->getDay());
        $this->assertSame(1, $time->getHour());

        $time->addHour(25);

        $this->assertSame(2, $time->getDay());
        $this->assertSame(2, $time->getHour());

        $time->subtractHour(12);

        $this->assertSame(1, $time->getDay());
        $this->assertSame(14, $time->getHour());

    }

    /**
     * test the day calculation
     */

    public function testDayCalculation()
    {

        $time = new Time;

        $time->addDay(35);

        $this->assertSame(5, $time->getDay());
        $this->assertSame(1, $time->getMonth());

        $time->addDay(360);

        $this->assertSame(1, $time->getYear());
        $this->assertSame(5, $time->getDay());
        $this->assertSame(1, $time->getMonth());

        $time->subtractDay(60);

        $this->assertSame(0, $time->getYear());
        $this->assertSame(5, $time->getDay());
        $this->assertSame(11, $time->getMonth());

    }

    /**
     * test the month calculation
     */

    public function testMonthCalculation()
    {

        $time = new Time;

        $time->addMonth(14);

        $this->assertSame(1, $time->getYear());
        $this->assertSame(2, $time->getMonth());

        $time->addMonth(10);

        $this->assertSame(2, $time->getYear());
        $this->assertSame(0, $time->getMonth());

        $time->subtractMonth(5);

        $this->assertSame(1, $time->getYear());
        $this->assertSame(7, $time->getMonth());

    }

    /**
     * test the year calculation
     */

    public function testYearCalculation()
    {

        $time = new Time;

        $time->addYear(2);

        $this->assertSame(2, $time->getYear());

        $time->subtractYear(1);

        $this->assertSame(1, $time->getYear());

    }

    /**
     * test whether an exception will be thrown if setting value exceed the range
     */

    public function testWhetherSettingExceedingValueWillThrowException()
    {

        $time = new Time;

        $this->expectException(TimeValueExceedDayException::class);
        $time->setDay(31);

        $this->expectException(TimeValueExceedHourException::class);
        $time->setHour(26);

        $this->expectException(TimeValueExceedMonthException::class);
        $time->setMonth(14);

        $this->expectException(TimeValueExceedMinuteException::class);
        $time->setMinute(70);

        $this->expectException(TimeValueExceedSecondException::class);
        $time->setSecond(65);

    }

    /**
     * test whether an exception will be thrown if setting a negative value
     */

    public function testWhetherSettingNegativeValueWillThrowException()
    {

        $time = new Time;

        $this->expectException(TimeInvalidNegativeUnixException::class);
        $time->setUnix(-86400);

        $this->expectException(TimeInvalidNegativeYearException::class);
        $time->setYear(-1);

        $this->expectException(TimeInvalidNegativeDayException::class);
        $time->setDay(-31);

        $this->expectException(TimeInvalidNegativeHourException::class);
        $time->setHour(-26);

        $this->expectException(TimeInvalidNegativeMonthException::class);
        $time->setMonth(-14);

        $this->expectException(TimeInvalidNegativeMinuteException::class);
        $time->setMinute(-70);

        $this->expectException(TimeInvalidNegativeSecondException::class);
        $time->setSecond(-65);

    }

}
