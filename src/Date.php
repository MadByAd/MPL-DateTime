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
 * The Date class is used for advance storing of date
 * 
 * @author    MadByAd <adityaaw84@gmail.com>
 * @license   MIT License
 * @copyright Copyright (c) MadByAd 2024
 * 
 */

class Date
{

    /**
     * Store the unix timestamp
     * 
     * @var string
     */

    private string $unix;

    /**
     * Store the day (without leading zero)
     * 
     * @var string
     */

    private string $day;
    
    /**
     * Store the day (with leading zero)
     * 
     * @var string
     */

    private string $dayWithZero;

    /**
     * Store the day (name)
     * 
     * @var string
     */
    
    private string $dayName;

    /**
     * Store the month (without leading zero)
     * 
     * @var string
     */
    
    private string $month;

    /**
     * Store the month (with leading zero)
     * 
     * @var string
     */

    private string $monthWithZero;

    /**
     * Store the month (name)
     * 
     * @var string
     */
    
    private string $monthName;

    /**
     * Store the year (four digit)
     * 
     * @var string
     */
    
    private string $year;

    /**
     * Store the year (two digit)
     * 
     * @var string
     */
    
    private string $yearTwoDigit;
    
    /**
     * Store the hour
     * 
     * @var string
     */

    private string $hour;
    
    /**
     * Store the minute
     * 
     * @var string
     */

    private string $minute;

    /**
     * Store the second
     * 
     * @var string
     */

    private string $second;

    /**
     * Construct a new Date class for advance storing of date
     * 
     * @param int $time       The time (if null then it will get the current time)
     *                        if not then it will get the time after the beggining
     *                        of the unix time e.g if `0` then it will get `1 January 1970`,
     *                        if `86400` then it will get `2 January 1970`
     * @param bool $fromToday If true, instead of getting the time from the
     *                        beggining of the unix time, it will get the time
     *                        from today instead e.g if the time is `0` then it
     *                        will get today, if the time is `86400` then it will
     *                        get tommorow, and if the time is `-86400` then it
     *                        will get yesterday 
     */

    public function __construct(int $time = null, bool $fromToday = false)
    {

        if($time === null) {
            $time = time();
        }

        if($fromToday) {
            $time = time() + $time;
        }

        $this->day = date("j", $time);
        $this->dayWithZero = date("d", $time);
        $this->dayName = date("l", $time);
        $this->month = date("n", $time);
        $this->monthWithZero = date("m", $time);
        $this->monthName = date("F", $time);
        $this->year = date("Y", $time);
        $this->yearTwoDigit = date("y", $time);
        $this->hour = date("H", $time);
        $this->minute = date("i", $time);
        $this->second = date("s", $time);
        $this->unix = $time;

    }

    /**
     * Construct a new date from int
     * 
     * @param int $day    The day
     * @param int $month  The month
     * @param int $year   The year
     * @param int $hour   The hour
     * @param int $minute The minute
     * @param int $second The second
     * 
     * @return Date The created date
     */

    public static function createFromInt(int $day = 1, int $month = 1, int $year = 1970, int $hour = 0, int $minute = 0, int $second = 0)
    {
        return new Date(strtotime("$day-$month-$year $hour:$minute:$second"));
    }

    /**
     * Construct a new date from string
     * 
     * @param string $date The date
     * 
     * @return Date The created date
     */

    public static function createFromString(string $date)
    {
        
        $date = str_replace(["\\", "/"], "-", $date);

        return new Date(strtotime($date));

    }

    /**
     * Get the date as a formatted string
     * 
     * @param string $format The format type
     * 
     * @return string The formmated date
     */

    public function get(string $format)
    {
        
        $formatSeparated = preg_replace("/[_]{1,}/", ":", $format);
        $formatSeparated = explode(":", $formatSeparated);

        $dateSeparator = "/";
        $date = [];
        $time = [];

        foreach($formatSeparated as $format) {
            switch($format) {
                case "D":
                    $date[] = $this->day;
                    break;
                case "DD":
                    $date[] = $this->dayWithZero;
                    break;
                case "DAY":
                    $date[] = "{$this->dayName} {$this->day}";
                    $dateSeparator = " ";
                    break;
                case "M":
                    $date[] = $this->month;
                    break;
                case "MM":
                    $date[] = $this->monthWithZero;
                    break;
                case "MONTH":
                    $date[] = $this->monthName;
                    $dateSeparator = " ";
                    break;
                case "YYYY":
                    $date[] = $this->year;
                    break;
                case "YY":
                    $date[] = $this->yearTwoDigit;
                    break;
                case "HOUR":
                    $time[] = $this->hour;
                    break;
                case "MIN":
                    $time[] = $this->minute;
                    break;
                case "SEC":
                    $time[] = $this->second;
                    break;
            }
        }

        $date = implode($dateSeparator, $date);
        $time = implode(":", $time);

        return rtrim(implode(" ", [$date, $time]), " ");

    }

    /**
     * Return the date information as an associative array
     * 
     * @return array The date information
     */

    public function getArray()
    {
        return [
            "day" => $this->day,
            "dayWithZero" => $this->dayWithZero,
            "dayName" => $this->dayName,
            "month" => $this->month,
            "monthWithZero" => $this->monthWithZero,
            "monthName" => $this->monthName,
            "year" => $this->year,
            "yearTwoDigit" => $this->yearTwoDigit,
            "hour" => $this->hour,
            "minute" => $this->minute,
            "second" => $this->second,
            "unix" => $this->unix,
        ];
    }

    /**
     * Return the date as a unix timestamp
     * 
     * @return int The unix timestamp
     */

    public function getUnix()
    {
        return $this->unix;
    }

}
