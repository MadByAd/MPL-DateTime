<?php

/**
 * 
 * This file is a part of the MadByAd\MPLDateTime Library
 * 
 * @author    MadByAd <adityawaw84@gmail.com>
 * @license   MIT License
 * @copyright Copyright (c) MadByAd 2024
 * 
 */

namespace MadByAd\MPLDateTime;

/**
 * 
 * The DateCalculator class is used for calculating with date
 * 
 * @author    MadByAd <adityawaw84@gmail.com>
 * @license   MIT License
 * @copyright Copyright (c) MadByAd 2024
 * 
 */

class DateCalculator
{

    /**
     * Calculate what the date will be, when the given date is added by a certain time
     * 
     * @param Date $date The date
     * @param Time $time The time
     * 
     * @return Date The calculated date (the given date added by the given time)
     */
    
    public static function add(Date $date, Time $time)
    {
        return new Date($date->getUnix() + $time->getUnix());
    }

    /**
     * Calculate what the date will be, when the given date is subtracted by a certain time
     * 
     * @param Date $date The date
     * @param Time $time The time
     * 
     * @return Date The calculated date (the given date subtracted by the given time)
     */

    public static function subtract(Date $date, Time $time)
    {
        return new Date($date->getUnix() - $time->getUnix());
    }

    /**
     * Calculate the Time gap between to given date
     * 
     * @param Date $firstDate  The first date
     * @param Date $secondDate The second date
     * 
     * @return Time The time gap between the given two date
     */

    public static function timeGap(Date $firstDate, Date $secondDate)
    {
        
        $firstUnix = $firstDate->getUnix();
        $secondUnix = $secondDate->getUnix();

        if($secondDate >= $firstDate) {
            $unixGap = $secondUnix - $firstUnix;
        } else {
            $unixGap = $firstUnix - $secondUnix;
        }

        $time = new Time($unixGap);

        return $time;

    }

}
