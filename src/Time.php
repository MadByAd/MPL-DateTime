<?php

/**
 * 
 * This file is a part of the MadByAd\MPLDateTime
 * 
 * @author    MadByAd <adityaaw84@gmail.com>
 * @license   MIT License
 * @copyright Copyright (c) MadByAd 2024
 * 
 */

namespace MadByAd\MPLDateTime;

use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeUnixException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeYearException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeMonthException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeDayException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeHourException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeMinuteException;
use MadByAd\MPLDateTime\Exceptions\TimeInvalidNegativeSecondException;
use MadByAd\MPLDateTime\Exceptions\TimeValueExceedMonthException;
use MadByAd\MPLDateTime\Exceptions\TimeValueExceedDayException;
use MadByAd\MPLDateTime\Exceptions\TimeValueExceedHourException;
use MadByAd\MPLDateTime\Exceptions\TimeValueExceedMinuteException;
use MadByAd\MPLDateTime\Exceptions\TimeValueExceedSecondException;

/**
 * 
 * The Time class is used for storing time and can be used for time or/and date
 * calculation
 * 
 * @author    MadByAd <adityaaw84@gmail.com>
 * @license   MIT License
 * @copyright Copyright (c) MadByAd 2024
 * 
 */

class Time
{

    /**
     * The maximum month amount
     * 
     * @var int
     */

    private const MONTH_LIMIT = 12;

    /**
     * The maximum day amount
     * 
     * @var int
     */

    private const DAY_LIMIT = 30;

    /**
     * The maximum hour amount
     * 
     * @var int
     */

    private const HOUR_LIMIT = 24;

    /**
     * The maximum minute amount
     * 
     * @var int
     */

    private const MINUTE_LIMIT = 60;

    /**
     * The maximum second amount
     * 
     * @var int
     */

    private const SECOND_LIMIT = 60;

    /**
     * Store the list of durations
     * 
     * @var array
     */

    private array $durationInUnix = [
        "year" => 31_104_000,
        "month" => 2_592_000,
        "day" => 86_400,
        "hour" => 3_600,
        "minute" => 60,
        "second" => 1,
    ];

    /**
     * Store the time in unix second
     * 
     * @var int
     */

    private int $unix = 0;

    /**
     * Store the year
     * 
     * @var int
     */

    private int $year = 0;
    
    /**
     * Store the month
     * 
     * @var int
     */

    private int $month = 0;
    
    /**
     * Store the day
     * 
     * @var int
     */

    private int $day = 0;
    
    /**
     * Store the hour
     * 
     * @var int
     */

    private int $hour = 0;

    /**
     * Store the minute
     * 
     * @var int
     */

    private int $minute = 0;

    /**
     * Store the second
     * 
     * @var int
     */

    private int $second = 0;

    /**
     * Update the unix so other time duration get updated
     * 
     * @return void
     */

    private function updateUnix()
    {

        $this->year = 0;
        $this->month = 0;
        $this->day = 0;
        $this->hour = 0;
        $this->minute = 0;
        $this->second = 0;

        if($this->unix <= 0) {
            $this->unix = 0;
            return;
        }

        $storeUnix = $this->unix;
        
        while($this->unix >= 60) {
            foreach($this->durationInUnix as $duration => $value) {
                if($this->unix >= $value) {
                    $this->unix -= $value;
                    $this->{$duration} += 1;
                    break;
                }
            }
        }

        $this->second = $this->unix;
        $this->unix = $storeUnix;

    }

    /**
     * Update the time so the unix time also get updated
     * 
     * @return void
     */

    private function updateTime()
    {

        $this->unix = 0;

        foreach($this->durationInUnix as $duration => $value) {
            $this->unix += $this->{$duration} * $value;
        }

    }

    /**
     * Multiply the duration by a certain amount
     * 
     * @param int $amount The amount to multiply
     * @return void
     */

    public function multiply(int $amount)
    {
        $this->unix *= $amount;
        $this->updateUnix();
    }

    /**
     * Divide the duration by a certain amount
     * 
     * @param int $amount The amount to divide
     * @return void
     */

    public function divide(int $amount)
    {
        $this->unix = round($this->unix * $amount);
        $this->updateUnix();
    }


    /**
     * Get the time as an associative array
     * 
     * @return array
     */

    public function get()
    {
        return [
            "unix" => $this->unix,
            "year" => $this->year,
            "month" => $this->month,
            "day" => $this->day,
            "hour" => $this->hour,
            "minute" => $this->minute,
            "second" => $this->second,
        ];
    }

    /**
     * Get the time as a formatted string
     * 
     * @return string
     */

    public function getString()
    {

        $format = [];

        if($this->year > 0) {
            $s = "";
            if($this->year > 1) $s = "s";
            $format[] = "{$this->year} year{$s}";
        }
        if($this->month > 0) {
            $s = "";
            if($this->month > 1) $s = "s";
            $format[] = "{$this->month} month{$s}";
        }
        if($this->day > 0) {
            $s = "";
            if($this->day > 1) $s = "s";
            $format[] = "{$this->day} day{$s}";
        }
        if($this->hour > 0) {
            $s = "";
            if($this->hour > 1) $s = "s";
            $format[] = "{$this->hour} hour{$s}";
        }
        if($this->minute > 0) {
            $s = "";
            if($this->minute > 1) $s = "s";
            $format[] = "{$this->minute} minute{$s}";
        }
        if($this->second > 0) {
            $s = "";
            if($this->second > 1) $s = "s";
            $format[] = "{$this->second} second{$s}";
        }

        return implode(" ", $format);

    }


    /**
     * This method will return the storedunix data
     * 
     * @return int
     */

    public function getUnix()
    {
        return $this->unix;
    }

    /**
     * This method will set the storedunix data to the specified data
     * 
     * @param int $data The new data
     * @return void
     * 
     * @throws TimeInvalidNegativeUnixException if trying to set to a negative value
     */

    public function setUnix(int $data)
    {

        if($data < 0) {
            throw new TimeInvalidNegativeUnixException("error cannot set the unix to be negative value ({$data})");
        }

        $this->unix = $data;
        $this->updateUnix();
    }

    /**
     * add theunix
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addUnix(int $amount)
    {
        $this->unix += $amount;
        $this->updateUnix();
    }

    /**
     * subtract theunix
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractUnix(int $amount)
    {
        $this->unix -= $amount;
        $this->updateUnix();
    }


    /**
     * This method will return the stored year data
     * 
     * @return int
     */

    public function getYear()
    {
        return $this->year;
    }

    /**
     * This method will set the stored year data to the specified data
     * 
     * @param int $data The new data
     * @return void
     * 
     * @throws TimeInvalidNegativeYearException if trying to set to a negative value
     */

    public function setYear(int $data)
    {

        if($data < 0) {
            throw new TimeInvalidNegativeYearException("error cannot set the year to be a negative value ({$data})");
        }

        $this->year = $data;
        $this->updateTime();
    }

    /**
     * add the year
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addYear(int $amount)
    {
        $this->unix += $amount * $this->durationInUnix["year"];
        $this->updateUnix();
    }

    /**
     * $subtract the year
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractYear(int $amount)
    {
        $this->unix -= $amount * $this->durationInUnix["year"];
        $this->updateUnix();
    }


    /**
     * This method will return the stored month data
     * 
     * @return int
     */

    public function getMonth()
    {
        return $this->month;
    }

    /**
     * This method will set the stored month data to the specified data
     * 
     * @param int $data The new data
     * @return void
     * 
     * @throws TimeInvalidNegativeMonthException if trying to set to a negative value
     * @throws TimeValueExceedMonthException if trying to set a value exceeding the month range
     */

    public function setMonth(int $data)
    {

        if($data < 0) {
            throw new TimeInvalidNegativeMonthException("error cannot set the month to be a negative value ({$data})");
        }

        if($data > self::MONTH_LIMIT) {
            throw new TimeValueExceedMonthException("error cannot set the to be higher than 12 ({$data})");
        }

        $this->month = $data;
        $this->updateTime();
    }

    /**
     * add the month
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addMonth(int $amount)
    {
        $this->unix += $amount * $this->durationInUnix["month"];
        $this->updateUnix();
    }

    /**
     * $subtract the month
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractMonth(int $amount)
    {
        $this->unix -= $amount * $this->durationInUnix["month"];
        $this->updateUnix();
    }


    /**
     * This method will return the stored day data
     * 
     * @return int
     */

    public function getDay()
    {
        return $this->day;
    }

    /**
     * This method will set the stored day data to the specified data
     * 
     * @param int $data The new data
     * @return void
     * 
     * @throws TimeInvalidNegativeDayException if trying to set to a negative value
     * @throws TimeValueExceedDayException if trying to set a value exceeding the day range
     */

    public function setDay(int $data)
    {

        if($data < 0) {
            throw new TimeInvalidNegativeDayException("error cannot set the day to be a negative value ({$data})");
        }

        if($data > self::DAY_LIMIT) {
            throw new TimeValueExceedDayException("error cannot set the to be higher than 30 ({$data})");
        }

        $this->day = $data;
        $this->updateTime();
    }

    /**
     * add the day
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addDay(int $amount)
    {
        $this->unix += $amount * $this->durationInUnix["day"];
        $this->updateUnix();
    }

    /**
     * $subtract the day
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractDay(int $amount)
    {
        $this->unix -= $amount * $this->durationInUnix["day"];
        $this->updateUnix();
    }


    /**
     * This method will return the stored hour data
     * 
     * @return int
     */

    public function getHour()
    {
        return $this->hour;
    }

    /**
     * This method will set the stored hour data to the specified data
     * 
     * @param int $data The new data
     * @return void
     * 
     * @throws TimeInvalidNegativeHourException if trying to set to a negative value
     * @throws TimeValueExceedHourException if trying to set a value exceeding the hour range
     */

    public function setHour(int $data)
    {

        if($data < 0) {
            throw new TimeInvalidNegativeHourException("error cannot set the hour to be a negative value ({$data})");
        }

        if($data > self::HOUR_LIMIT) {
            throw new TimeValueExceedHourException("error cannot set the to be higher than 24 ({$data})");
        }

        $this->hour = $data;
        $this->updateTime();
    }

    /**
     * add the hour
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addHour(int $amount)
    {
        $this->unix += $amount * $this->durationInUnix["hour"];
        $this->updateUnix();
    }

    /**
     * $subtract the hour
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractHour(int $amount)
    {
        $this->unix -= $amount * $this->durationInUnix["hour"];
        $this->updateUnix();
    }


    /**
     * This method will return the stored minute data
     * 
     * @return int
     */

    public function getMinute()
    {
        return $this->minute;
    }

    /**
     * This method will set the stored minute data to the specified data
     * 
     * @param int $data The new data
     * @return void
     * 
     * @throws TimeInvalidNegativeMinuteException if trying to set to a negative value
     * @throws TimeValueExceedMinuteException if trying to set a value exceeding the minute range
     */

    public function setMinute(int $data)
    {

        if($data < 0) {
            throw new TimeInvalidNegativeMinuteException("error cannot set the minute to be a negative value ({$data})");
        }

        if($data > self::MINUTE_LIMIT) {
            throw new TimeValueExceedMinuteException("error cannot set the to be higher than 60 ({$data})");
        }

        $this->minute = $data;
        $this->updateTime();
    }

    /**
     * add the minute
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addMinute(int $amount)
    {
        $this->unix += $amount * $this->durationInUnix["minute"];
        $this->updateUnix();
    }

    /**
     * $subtract the minute
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractMinute(int $amount)
    {
        $this->unix -= $amount * $this->durationInUnix["minute"];
        $this->updateUnix();
    }


    /**
     * This method will return the stored second data
     * 
     * @return int
     */

    public function getSecond()
    {
        return $this->second;
    }

    /**
     * This method will set the stored second data to the specified data
     * 
     * @param int $data The new data
     * @return void
     * 
     * @throws TimeInvalidNegativeSecondException if trying to set to a negative value
     * @throws TimeValueExceedSecondException if trying to set a value exceeding the second range
     */

    public function setSecond(int $data)
    {

        if($data < 0) {
            throw new TimeInvalidNegativeSecondException("error cannot set the second to be a negative value ({$data})");
        }

        if($data > self::SECOND_LIMIT) {
            throw new TimeValueExceedSecondException("error cannot set the to be higher than 60 ({$data})");
        }

        $this->second = $data;
        $this->updateTime();
    }

    /**
     * add the second
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addSecond(int $amount)
    {
        $this->unix += $amount;
        $this->updateUnix();
    }

    /**
     * $subtract the second
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractSecond(int $amount)
    {
        $this->unix -= $amount;
        $this->updateUnix();
    }

}
