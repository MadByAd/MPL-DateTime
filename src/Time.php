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

    private int $unix = 0;

    private int $year = 0;
    
    private int $month = 0;
    
    private int $week = 0;
    
    private int $day = 0;
    
    private int $hour = 0;

    private int $minute = 0;

    private int $second = 0;

    private function updateTime()
    {

    }

    public function multiply()
    {
        $this->updateTime();
    }

    public function divide()
    {
        $this->updateTime();
    }


    /**
     * This method will return the storedunix data
     * 
     * @return int
     */

    public function getUnix()
    {
        $this->updateTime();
        return $this->unix;
    }

    /**
     * This method will set the storedunix data to the specified data
     * 
     * @param int $data The new data
     * @return void
     */

    public function setUnix(int $data)
    {
        $this->updateTime();
        $this->unix = $data;
    }

    /**
     * add theunix
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addUnix(int $amount)
    {
        $this->updateTime();
        $this->unix += $amount;
    }

    /**
     * subtract theunix
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractUnix(int $amount)
    {
        $this->updateTime();
        $this->unix -= $amount;
    }


    /**
     * This method will return the stored year data
     * 
     * @return int
     */

    public function getYear()
    {
        $this->updateTime();
        return $this->year;
    }

    /**
     * This method will set the stored year data to the specified data
     * 
     * @param int $data The new data
     * @return void
     */

    public function setYear(int $data)
    {
        $this->updateTime();
        $this->year = $data;
    }

    /**
     * add the year
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addYear(int $amount)
    {
        $this->updateTime();
        $this->year += $amount;
    }

    /**
     * $subtract the year
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractYear(int $amount)
    {
        $this->updateTime();
        $this->year -= $amount;
    }


    /**
     * This method will return the stored month data
     * 
     * @return int
     */

    public function getMonth()
    {
        $this->updateTime();
        return $this->month;
    }

    /**
     * This method will set the stored month data to the specified data
     * 
     * @param int $data The new data
     * @return void
     */

    public function setMonth(int $data)
    {
        $this->updateTime();
        $this->month = $data;
    }

    /**
     * add the month
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addMonth(int $amount)
    {
        $this->updateTime();
        $this->month += $amount;
    }

    /**
     * $subtract the month
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractMonth(int $amount)
    {
        $this->updateTime();
        $this->month -= $amount;
    }


    /**
     * This method will return the stored week data
     * 
     * @return int
     */

    public function getWeek()
    {
        $this->updateTime();
        return $this->week;
    }

    /**
     * This method will set the stored week data to the specified data
     * 
     * @param int $data The new data
     * @return void
     */

    public function setWeek(int $data)
    {
        $this->updateTime();
        $this->week = $data;
    }

    /**
     * add the week
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addWeek(int $amount)
    {
        $this->updateTime();
        $this->week += $amount;
    }

    /**
     * $subtract the week
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractWeek(int $amount)
    {
        $this->updateTime();
        $this->week -= $amount;
    }


    /**
     * This method will return the stored day data
     * 
     * @return int
     */

    public function getDay()
    {
        $this->updateTime();
        return $this->day;
    }

    /**
     * This method will set the stored day data to the specified data
     * 
     * @param int $data The new data
     * @return void
     */

    public function setDay(int $data)
    {
        $this->updateTime();
        $this->day = $data;
    }

    /**
     * add the day
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addDay(int $amount)
    {
        $this->updateTime();
        $this->day += $amount;
    }

    /**
     * $subtract the day
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractDay(int $amount)
    {
        $this->updateTime();
        $this->day -= $amount;
    }


    /**
     * This method will return the stored hour data
     * 
     * @return int
     */

    public function getHour()
    {
        $this->updateTime();
        return $this->hour;
    }

    /**
     * This method will set the stored hour data to the specified data
     * 
     * @param int $data The new data
     * @return void
     */

    public function setHour(int $data)
    {
        $this->updateTime();
        $this->hour = $data;
    }

    /**
     * add the hour
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addHour(int $amount)
    {
        $this->updateTime();
        $this->hour += $amount;
    }

    /**
     * $subtract the hour
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractHour(int $amount)
    {
        $this->updateTime();
        $this->hour -= $amount;
    }


    /**
     * This method will return the stored minute data
     * 
     * @return int
     */

    public function getMinute()
    {
        $this->updateTime();
        return $this->minute;
    }

    /**
     * This method will set the stored minute data to the specified data
     * 
     * @param int $data The new data
     * @return void
     */

    public function setMinute(int $data)
    {
        $this->updateTime();
        $this->minute = $data;
    }

    /**
     * add the minute
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addMinute(int $amount)
    {
        $this->updateTime();
        $this->minute += $amount;
    }

    /**
     * $subtract the minute
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractMinute(int $amount)
    {
        $this->updateTime();
        $this->minute -= $amount;
    }


    /**
     * This method will return the stored second data
     * 
     * @return int
     */

    public function getSecond()
    {
        $this->updateTime();
        return $this->second;
    }

    /**
     * This method will set the stored second data to the specified data
     * 
     * @param int $data The new data
     * @return void
     */

    public function setSecond(int $data)
    {
        $this->updateTime();
        $this->second = $data;
    }

    /**
     * add the second
     * 
     * @param int $amount The amount to add
     * @return void
     */

    public function addSecond(int $amount)
    {
        $this->updateTime();
        $this->second += $amount;
    }

    /**
     * $subtract the second
     * 
     * @param int $amount The amount to subtract
     * @return void
     */

    public function subtractSecond(int $amount)
    {
        $this->updateTime();
        $this->second -= $amount;
    }

}
