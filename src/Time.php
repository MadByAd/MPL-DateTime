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

    public int $unix = 0;

    public int $year = 0;
    
    public int $month = 0;
    
    public int $week = 0;
    
    public int $day = 0;
    
    public int $hour = 0;

    public int $minute = 0;

    public int $second = 0;

    private function updateTime()
    {

    }

    public function __set($name, $value)
    {
        
    }

    public function __get($name)
    {
        
    }

}
