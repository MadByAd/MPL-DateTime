<?php

use MadByAd\MPLDateTime\Date;
use MadByAd\MPLDateTime\DateFormat;
use PHPUnit\Framework\TestCase;

final class DateTest extends TestCase
{

    /**
     * Test Different date format
     */

    public function testDifferentTypesOfDateFormat()
    {

        $date = new Date(0);

        $this->assertSame("01/01/1970", $date->get(DateFormat::DD_MM_YYYY));
        $this->assertSame("1 January 1970", $date->get(DateFormat::D_MONTH_YYYY));
        $this->assertSame("1 January 1970 00:00:00", $date->get(DateFormat::D_MONTH_YYYY__HOUR_MIN_SEC));
        $this->assertSame("Thursday 1 January 1970 00:00:00", $date->get(DateFormat::DAY_MONTH_YYYY__HOUR_MIN_SEC));

        $this->assertSame("01/01/1970", $date->get(DateFormat::MM_DD_YYYY));
        $this->assertSame("January 1 1970", $date->get(DateFormat::MONTH_D_YYYY));
        $this->assertSame("January 1 1970 00:00:00", $date->get(DateFormat::MONTH_D_YYYY__HOUR_MIN_SEC));
        $this->assertSame("January Thursday 1 1970 00:00:00", $date->get(DateFormat::MONTH_DAY_YYYY__HOUR_MIN_SEC));

        $this->assertSame("1970/01/01", $date->get(DateFormat::YYYY_MM_DD));
        $this->assertSame("1970 January 1", $date->get(DateFormat::YYYY_MONTH_D));
        $this->assertSame("1970 January 1 00:00:00", $date->get(DateFormat::YYYY_MONTH_D__HOUR_MIN_SEC));
        $this->assertSame("1970 January Thursday 1 00:00:00", $date->get(DateFormat::YYYY_MONTH_DAY__HOUR_MIN_SEC));

    }

    /**
     * Test date created from an integer
     */

    public function testDateCreatedFromInt()
    {

        $date = Date::createFromInt(16, 1, 2009);

        $this->assertSame("16/01/2009", $date->get(DateFormat::DD_MM_YYYY));
        $this->assertSame("16 January 2009", $date->get(DateFormat::D_MONTH_YYYY));
        $this->assertSame("16 January 2009 00:00:00", $date->get(DateFormat::D_MONTH_YYYY__HOUR_MIN_SEC));

        $date = Date::createFromInt(16, 1, 2009, 12, 32, 54);

        $this->assertSame("16 January 2009 12:32:54", $date->get(DateFormat::D_MONTH_YYYY__HOUR_MIN_SEC));

    }

    /**
     * Test date created from a string
     */

    public function testDateCreatedFromString()
    {

        $date = Date::createFromString("16 January 2009");

        $this->assertSame("16/01/2009", $date->get(DateFormat::DD_MM_YYYY));
        $this->assertSame("16 January 2009", $date->get(DateFormat::D_MONTH_YYYY));
        $this->assertSame("16 January 2009 00:00:00", $date->get(DateFormat::D_MONTH_YYYY__HOUR_MIN_SEC));

        $date = Date::createFromString("16 January 2009 12:32:54");

        $this->assertSame("16 January 2009 12:32:54", $date->get(DateFormat::D_MONTH_YYYY__HOUR_MIN_SEC));

    }

}
