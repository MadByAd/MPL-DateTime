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
 * The DateFormat class store a bunch of date formats
 * 
 * @author    MadByAd <adityaaw84@gmail.com>
 * @license   MIT License
 * @copyright Copyright (c) MadByAd 2024
 * 
 */

class DateFormat
{


    /**
     * the date format in *day (without leading zero), month (without leading zero), year (two digit)*
     * 
     * @var string
     */

    public const D_M_YY = "D_M_YY";

    /**
     * the date format in *day (without leading zero), month (without leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const D_M_YY__HOUR_MIN = "D_M_YY__HOUR_MIN";
    
    /**
     * the date format in *day (without leading zero), month (without leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const D_M_YY__HOUR_MIN_SEC = "D_M_YY__HOUR_MIN_SEC";

    /**
     * the date format in *day (without leading zero), month (with leading zero), year (two digit)*
     * 
     * @var string
     */

    public const D_MM_YY = "D_MM_YY";

    /**
     * the date format in *day (without leading zero), month (with leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const D_MM_YY__HOUR_MIN = "D_MM_YY__HOUR_MIN";
    
    /**
     * the date format in *day (without leading zero), month (with leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const D_MM_YY__HOUR_MIN_SEC = "D_MM_YY__HOUR_MIN_SEC";

    /**
     * the date format in *day (without leading zero), month (name), year (two digit)*
     * 
     * @var string
     */

    public const D_MONTH_YY = "D_MONTH_YY";
    
    /**
     * the date format in *day (without leading zero), month (name), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const D_MONTH_YY__HOUR_MIN = "D_MONTH_YY__HOUR_MIN";
    
    /**
     * the date format in *day (without leading zero), month (name), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const D_MONTH_YY__HOUR_MIN_SEC = "D_MONTH_YY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (with leading zero), month (without leading zero), year (two digit)*
     * 
     * @var string
     */

    public const DD_M_YY = "DD_M_YY";
    
    /**
     * the date format in *day (with leading zero), month (without leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const DD_M_YY__HOUR_MIN = "DD_M_YY__HOUR_MIN";
    
    /**
     * the date format in *day (with leading zero), month (without leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const DD_M_YY__HOUR_MIN_SEC = "DD_M_YY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (with leading zero), month (with leading zero), year (two digit)*
     * 
     * @var string
     */

    public const DD_MM_YY = "DD_MM_YY";
    
    /**
     * the date format in *day (with leading zero), month (with leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const DD_MM_YY__HOUR_MIN = "DD_MM_YY__HOUR_MIN";
    
    /**
     * the date format in *day (with leading zero), month (with leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const DD_MM_YY__HOUR_MIN_SEC = "DD_MM_YY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (with leading zero), month (name), year (two digit)*
     * 
     * @var string
     */

    public const DD_MONTH_YY = "DD_MONTH_YY";
    
    /**
     * the date format in *day (with leading zero), month (name), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const DD_MONTH_YY__HOUR_MIN = "DD_MONTH_YY__HOUR_MIN";
    
    /**
     * the date format in *day (with leading zero), month (name), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const DD_MONTH_YY__HOUR_MIN_SEC = "DD_MONTH_YY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (name), month (without leading zero), year (two digit)*
     * 
     * @var string
     */

    public const DAY_M_YY = "DAY_M_YY";
    
    /**
     * the date format in *day (name), month (without leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const DAY_M_YY__HOUR_MIN = "DAY_M_YY__HOUR_MIN";
    
    /**
     * the date format in *day (name), month (without leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const DAY_M_YY__HOUR_MIN_SEC = "DAY_M_YY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (name), month (with leading zero), year (two digit)*
     * 
     * @var string
     */

    public const DAY_MM_YY = "DAY_MM_YY";
    
    /**
     * the date format in *day (name), month (with leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const DAY_MM_YY__HOUR_MIN = "DAY_MM_YY__HOUR_MIN";
    
    /**
     * the date format in *day (name), month (with leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const DAY_MM_YY__HOUR_MIN_SEC = "DAY_MM_YY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (name), month (name), year (two digit)*
     * 
     * @var string
     */

    public const DAY_MONTH_YY = "DAY_MONTH_YY";
    
    /**
     * the date format in *day (name), month (name), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const DAY_MONTH_YY__HOUR_MIN = "DAY_MONTH_YY__HOUR_MIN";
    
    /**
     * the date format in *day (name), month (name), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const DAY_MONTH_YY__HOUR_MIN_SEC = "DAY_MONTH_YY__HOUR_MIN_SEC";

    /**
     * the date format in *day (without leading zero), month (without leading zero), year (four digit)*
     * 
     * @var string
     */

    public const D_M_YYYY = "D_M_YYYY";

    /**
     * the date format in *day (without leading zero), month (without leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const D_M_YYYY__HOUR_MIN = "D_M_YYYY__HOUR_MIN";
    
    /**
     * the date format in *day (without leading zero), month (without leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const D_M_YYYY__HOUR_MIN_SEC = "D_M_YYYY__HOUR_MIN_SEC";

    /**
     * the date format in *day (without leading zero), month (with leading zero), year (four digit)*
     * 
     * @var string
     */

    public const D_MM_YYYY = "D_MM_YYYY";

    /**
     * the date format in *day (without leading zero), month (with leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const D_MM_YYYY__HOUR_MIN = "D_MM_YYYY__HOUR_MIN";
    
    /**
     * the date format in *day (without leading zero), month (with leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const D_MM_YYYY__HOUR_MIN_SEC = "D_MM_YYYY__HOUR_MIN_SEC";

    /**
     * the date format in *day (without leading zero), month (name), year (four digit)*
     * 
     * @var string
     */

    public const D_MONTH_YYYY = "D_MONTH_YYYY";
    
    /**
     * the date format in *day (without leading zero), month (name), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const D_MONTH_YYYY__HOUR_MIN = "D_MONTH_YYYY__HOUR_MIN";
    
    /**
     * the date format in *day (without leading zero), month (name), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const D_MONTH_YYYY__HOUR_MIN_SEC = "D_MONTH_YYYY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (with leading zero), month (without leading zero), year (four digit)*
     * 
     * @var string
     */

    public const DD_M_YYYY = "DD_M_YYYY";
    
    /**
     * the date format in *day (with leading zero), month (without leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const DD_M_YYYY__HOUR_MIN = "DD_M_YYYY__HOUR_MIN";
    
    /**
     * the date format in *day (with leading zero), month (without leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const DD_M_YYYY__HOUR_MIN_SEC = "DD_M_YYYY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (with leading zero), month (with leading zero), year (four digit)*
     * 
     * @var string
     */

    public const DD_MM_YYYY = "DD_MM_YYYY";
    
    /**
     * the date format in *day (with leading zero), month (with leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const DD_MM_YYYY__HOUR_MIN = "DD_MM_YYYY__HOUR_MIN";
    
    /**
     * the date format in *day (with leading zero), month (with leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const DD_MM_YYYY__HOUR_MIN_SEC = "DD_MM_YYYY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (with leading zero), month (name), year (four digit)*
     * 
     * @var string
     */

    public const DD_MONTH_YYYY = "DD_MONTH_YYYY";
    
    /**
     * the date format in *day (with leading zero), month (name), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const DD_MONTH_YYYY__HOUR_MIN = "DD_MONTH_YYYY__HOUR_MIN";
    
    /**
     * the date format in *day (with leading zero), month (name), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const DD_MONTH_YYYY__HOUR_MIN_SEC = "DD_MONTH_YYYY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (name), month (without leading zero), year (four digit)*
     * 
     * @var string
     */

    public const DAY_M_YYYY = "DAY_M_YYYY";
    
    /**
     * the date format in *day (name), month (without leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const DAY_M_YYYY__HOUR_MIN = "DAY_M_YYYY__HOUR_MIN";
    
    /**
     * the date format in *day (name), month (without leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const DAY_M_YYYY__HOUR_MIN_SEC = "DAY_M_YYYY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (name), month (with leading zero), year (four digit)*
     * 
     * @var string
     */

    public const DAY_MM_YYYY = "DAY_MM_YYYY";
    
    /**
     * the date format in *day (name), month (with leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const DAY_MM_YYYY__HOUR_MIN = "DAY_MM_YYYY__HOUR_MIN";
    
    /**
     * the date format in *day (name), month (with leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const DAY_MM_YYYY__HOUR_MIN_SEC = "DAY_MM_YYYY__HOUR_MIN_SEC";
    
    /**
     * the date format in *day (name), month (name), year (four digit)*
     * 
     * @var string
     */

    public const DAY_MONTH_YYYY = "DAY_MONTH_YYYY";
    
    /**
     * the date format in *day (name), month (name), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const DAY_MONTH_YYYY__HOUR_MIN = "DAY_MONTH_YYYY__HOUR_MIN";
    
    /**
     * the date format in *day (name), month (name), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const DAY_MONTH_YYYY__HOUR_MIN_SEC = "DAY_MONTH_YYYY__HOUR_MIN_SEC";


    
    /**
     * the date format in *month (without leading zero), day (without leading zero), year (two digit)*
     * 
     * @var string
     */

    public const M_D_YY = "M_D_YY";

    /**
     * the date format in *month (without leading zero), day (without leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const M_D_YY__HOUR_MIN = "M_D_YY__HOUR_MIN";

    /**
     * the date format in *month (without leading zero), day (without leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const M_D_YY__HOUR_MIN_SEC = "M_D_YY__HOUR_MIN_SEC";

    /**
     * the date format in *month (with leading zero), day (without leading zero), year (two digit)*
     * 
     * @var string
     */

    public const MM_D_YY = "MM_D_YY";

    /**
     * the date format in *month (with leading zero), day (without leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const MM_D_YY__HOUR_MIN = "MM_D_YY__HOUR_MIN";

    /**
     * the date format in *month (with leading zero), day (without leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const MM_D_YY__HOUR_MIN_SEC = "MM_D_YY__HOUR_MIN_SEC";

    /**
     * the date format in *month (name), day (without leading zero), year (two digit)*
     * 
     * @var string
     */

    public const MONTH_D_YY = "MONTH_D_YY";

    /**
     * the date format in *month (name), day (without leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const MONTH_D_YY__HOUR_MIN = "MONTH_D_YY__HOUR_MIN";

    /**
     * the date format in *month (name), day (without leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const MONTH_D_YY__HOUR_MIN_SEC = "MONTH_D_YY__HOUR_MIN_SEC";

    /**
     * the date format in *month (without leading zero), day (with leading zero), year (two digit)*
     * 
     * @var string
     */

    public const M_DD_YY = "M_DD_YY";

    /**
     * the date format in *month (without leading zero), day (with leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const M_DD_YY__HOUR_MIN = "M_DD_YY__HOUR_MIN";

    /**
     * the date format in *month (without leading zero), day (with leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const M_DD_YY__HOUR_MIN_SEC = "M_DD_YY__HOUR_MIN_SEC";

    /**
     * the date format in *month (with leading zero), day (with leading zero), year (two digit)*
     * 
     * @var string
     */

    public const MM_DD_YY = "MM_DD_YY";

    /**
     * the date format in *month (with leading zero), day (with leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const MM_DD_YY__HOUR_MIN = "MM_DD_YY__HOUR_MIN";

    /**
     * the date format in *month (with leading zero), day (with leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const MM_DD_YY__HOUR_MIN_SEC = "MM_DD_YY__HOUR_MIN_SEC";

    /**
     * the date format in *month (name), day (with leading zero), year (two digit)*
     * 
     * @var string
     */

    public const MONTH_DD_YY = "MONTH_DD_YY";

    /**
     * the date format in *month (name), day (with leading zero), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const MONTH_DD_YY__HOUR_MIN = "MONTH_DD_YY__HOUR_MIN";

    /**
     * the date format in *month (name), day (with leading zero), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const MONTH_DD_YY__HOUR_MIN_SEC = "MONTH_DD_YY__HOUR_MIN_SEC";

    /**
     * the date format in *month (without leading zero), day (name), year (two digit)*
     * 
     * @var string
     */

    public const M_DAY_YY = "M_DAY_YY";

    /**
     * the date format in *month (without leading zero), day (name), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const M_DAY_YY__HOUR_MIN = "M_DAY_YY__HOUR_MIN";

    /**
     * the date format in *month (without leading zero), day (name), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const M_DAY_YY__HOUR_MIN_SEC = "M_DAY_YY__HOUR_MIN_SEC";

    /**
     * the date format in *month (with leading zero), day (name), year (two digit)*
     * 
     * @var string
     */

    public const MM_DAY_YY = "MM_DAY_YY";

    /**
     * the date format in *month (with leading zero), day (name), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const MM_DAY_YY__HOUR_MIN = "MM_DAY_YY__HOUR_MIN";

    /**
     * the date format in *month (with leading zero), day (name), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const MM_DAY_YY__HOUR_MIN_SEC = "MM_DAY_YY__HOUR_MIN_SEC";

    /**
     * the date format in *month (name), day (name), year (two digit)*
     * 
     * @var string
     */

    public const MONTH_DAY_YY = "MONTH_DAY_YY";

    /**
     * the date format in *month (name), day (name), year (two digit), hour, minute*
     * 
     * @var string
     */

    public const MONTH_DAY_YY__HOUR_MIN = "MONTH_DAY_YY__HOUR_MIN";

    /**
     * the date format in *month (name), day (name), year (two digit), hour, minute, second*
     * 
     * @var string
     */

    public const MONTH_DAY_YY__HOUR_MIN_SEC = "MONTH_DAY_YY__HOUR_MIN_SEC";

    /**
     * the date format in *month (without leading zero), day (without leading zero), year (four digit)*
     * 
     * @var string
     */

    public const M_D_YYYY = "M_D_YYYY";

    /**
     * the date format in *month (without leading zero), day (without leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const M_D_YYYY__HOUR_MIN = "M_D_YYYY__HOUR_MIN";

    /**
     * the date format in *month (without leading zero), day (without leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const M_D_YYYY__HOUR_MIN_SEC = "M_D_YYYY__HOUR_MIN_SEC";

    /**
     * the date format in *month (with leading zero), day (without leading zero), year (four digit)*
     * 
     * @var string
     */

    public const MM_D_YYYY = "MM_D_YYYY";

    /**
     * the date format in *month (with leading zero), day (without leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const MM_D_YYYY__HOUR_MIN = "MM_D_YYYY__HOUR_MIN";

    /**
     * the date format in *month (with leading zero), day (without leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const MM_D_YYYY__HOUR_MIN_SEC = "MM_D_YYYY__HOUR_MIN_SEC";

    /**
     * the date format in *month (name), day (without leading zero), year (four digit)*
     * 
     * @var string
     */

    public const MONTH_D_YYYY = "MONTH_D_YYYY";

    /**
     * the date format in *month (name), day (without leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const MONTH_D_YYYY__HOUR_MIN = "MONTH_D_YYYY__HOUR_MIN";

    /**
     * the date format in *month (name), day (without leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const MONTH_D_YYYY__HOUR_MIN_SEC = "MONTH_D_YYYY__HOUR_MIN_SEC";

    /**
     * the date format in *month (without leading zero), day (with leading zero), year (four digit)*
     * 
     * @var string
     */

    public const M_DD_YYYY = "M_DD_YYYY";

    /**
     * the date format in *month (without leading zero), day (with leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const M_DD_YYYY__HOUR_MIN = "M_DD_YYYY__HOUR_MIN";

    /**
     * the date format in *month (without leading zero), day (with leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const M_DD_YYYY__HOUR_MIN_SEC = "M_DD_YYYY__HOUR_MIN_SEC";

    /**
     * the date format in *month (with leading zero), day (with leading zero), year (four digit)*
     * 
     * @var string
     */

    public const MM_DD_YYYY = "MM_DD_YYYY";

    /**
     * the date format in *month (with leading zero), day (with leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const MM_DD_YYYY__HOUR_MIN = "MM_DD_YYYY__HOUR_MIN";

    /**
     * the date format in *month (with leading zero), day (with leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const MM_DD_YYYY__HOUR_MIN_SEC = "MM_DD_YYYY__HOUR_MIN_SEC";

    /**
     * the date format in *month (name), day (with leading zero), year (four digit)*
     * 
     * @var string
     */

    public const MONTH_DD_YYYY = "MONTH_DD_YYYY";

    /**
     * the date format in *month (name), day (with leading zero), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const MONTH_DD_YYYY__HOUR_MIN = "MONTH_DD_YYYY__HOUR_MIN";

    /**
     * the date format in *month (name), day (with leading zero), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const MONTH_DD_YYYY__HOUR_MIN_SEC = "MONTH_DD_YYYY__HOUR_MIN_SEC";

    /**
     * the date format in *month (without leading zero), day (name), year (four digit)*
     * 
     * @var string
     */

    public const M_DAY_YYYY = "M_DAY_YYYY";

    /**
     * the date format in *month (without leading zero), day (name), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const M_DAY_YYYY__HOUR_MIN = "M_DAY_YYYY__HOUR_MIN";

    /**
     * the date format in *month (without leading zero), day (name), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const M_DAY_YYYY__HOUR_MIN_SEC = "M_DAY_YYYY__HOUR_MIN_SEC";

    /**
     * the date format in *month (with leading zero), day (name), year (four digit)*
     * 
     * @var string
     */

    public const MM_DAY_YYYY = "MM_DAY_YYYY";

    /**
     * the date format in *month (with leading zero), day (name), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const MM_DAY_YYYY__HOUR_MIN = "MM_DAY_YYYY__HOUR_MIN";

    /**
     * the date format in *month (with leading zero), day (name), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const MM_DAY_YYYY__HOUR_MIN_SEC = "MM_DAY_YYYY__HOUR_MIN_SEC";

    /**
     * the date format in *month (name), day (name), year (four digit)*
     * 
     * @var string
     */

    public const MONTH_DAY_YYYY = "MONTH_DAY_YYYY";

    /**
     * the date format in *month (name), day (name), year (four digit), hour, minute*
     * 
     * @var string
     */

    public const MONTH_DAY_YYYY__HOUR_MIN = "MONTH_DAY_YYYY__HOUR_MIN";

    /**
     * the date format in *month (name), day (name), year (four digit), hour, minute, second*
     * 
     * @var string
     */

    public const MONTH_DAY_YYYY__HOUR_MIN_SEC = "MONTH_DAY_YYYY__HOUR_MIN_SEC";


    /**
     * the date format in *year (two digit), month (without leading zero), day (without leading zero)*
     * 
     * @var string
     */

    public const YY_M_D = "YY_M_D";

    /**
     * the date format in *year (two digit), month (without leading zero), day (without leading zero), hour, minute*
     * 
     * @var string
     */

    public const YY_M_D__HOUR_MIN = "YY_M_D__HOUR_MIN";

    /**
     * the date format in *year (two digit), month (without leading zero), day (without leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YY_M_D__HOUR_MIN_SEC = "YY_M_D__HOUR_MIN_SEC";

    /**
     * the date format in *year (two digit), month (with leading zero), day (without leading zero)*
     * 
     * @var string
     */

    public const YY_MM_D = "YY_MM_D";

    /**
     * the date format in *year (two digit), month (with leading zero), day (without leading zero), hour, minute*
     * 
     * @var string
     */

    public const YY_MM_D__HOUR_MIN = "YY_MM_D__HOUR_MIN";

    /**
     * the date format in *year (two digit), month (with leading zero), day (without leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YY_MM_D__HOUR_MIN_SEC = "YY_MM_D__HOUR_MIN_SEC";

    /**
     * the date format in *year (two digit), month (name), day (without leading zero)*
     * 
     * @var string
     */

    public const YY_MONTH_D = "YY_MONTH_D";

    /**
     * the date format in *year (two digit), month (name), day (without leading zero), hour, minute*
     * 
     * @var string
     */

    public const YY_MONTH_D__HOUR_MIN = "YY_MONTH_D__HOUR_MIN";

    /**
     * the date format in *year (two digit), month (name), day (without leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YY_MONTH_D__HOUR_MIN_SEC = "YY_MONTH_D__HOUR_MIN_SEC";

    /**
     * the date format in *year (two digit), month (without leading zero), day (with leading zero)*
     * 
     * @var string
     */

    public const YY_M_DD = "YY_M_DD";

    /**
     * the date format in *year (two digit), month (without leading zero), day (with leading zero), hour, minute*
     * 
     * @var string
     */

    public const YY_M_DD__HOUR_MIN = "YY_M_DD__HOUR_MIN";

    /**
     * the date format in *year (two digit), month (without leading zero), day (with leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YY_M_DD__HOUR_MIN_SEC = "YY_M_DD__HOUR_MIN_SEC";

    /**
     * the date format in *year (two digit), month (with leading zero), day (with leading zero)*
     * 
     * @var string
     */

    public const YY_MM_DD = "YY_MM_DD";

    /**
     * the date format in *year (two digit), month (with leading zero), day (with leading zero), hour, minute*
     * 
     * @var string
     */

    public const YY_MM_DD__HOUR_MIN = "YY_MM_DD__HOUR_MIN";

    /**
     * the date format in *year (two digit), month (with leading zero), day (with leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YY_MM_DD__HOUR_MIN_SEC = "YY_MM_DD__HOUR_MIN_SEC";

    /**
     * the date format in *year (two digit), month (name), day (with leading zero)*
     * 
     * @var string
     */

    public const YY_MONTH_DD = "YY_MONTH_DD";

    /**
     * the date format in *year (two digit), month (name), day (with leading zero), hour, minute*
     * 
     * @var string
     */

    public const YY_MONTH_DD__HOUR_MIN = "YY_MONTH_DD__HOUR_MIN";

    /**
     * the date format in *year (two digit), month (name), day (with leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YY_MONTH_DD__HOUR_MIN_SEC = "YY_MONTH_DD__HOUR_MIN_SEC";

    /**
     * the date format in *year (two digit), month (without leading zero), day (name)*
     * 
     * @var string
     */

    public const YY_M_DAY = "YY_M_DAY";

    /**
     * the date format in *year (two digit), month (without leading zero), day (name), hour, minute*
     * 
     * @var string
     */

    public const YY_M_DAY__HOUR_MIN = "YY_M_DAY__HOUR_MIN";

    /**
     * the date format in *year (two digit), month (without leading zero), day (name), hour, minute, second*
     * 
     * @var string
     */

    public const YY_M_DAY__HOUR_MIN_SEC = "YY_M_DAY__HOUR_MIN_SEC";

    /**
     * the date format in *year (two digit), month (with leading zero), day (name)*
     * 
     * @var string
     */

    public const YY_MM_DAY = "YY_MM_DAY";

    /**
     * the date format in *year (two digit), month (with leading zero), day (name), hour, minute*
     * 
     * @var string
     */

    public const YY_MM_DAY__HOUR_MIN = "YY_MM_DAY__HOUR_MIN";

    /**
     * the date format in *year (two digit), month (with leading zero), day (name), hour, minute, second*
     * 
     * @var string
     */

    public const YY_MM_DAY__HOUR_MIN_SEC = "YY_MM_DAY__HOUR_MIN_SEC";

    /**
     * the date format in *year (two digit), month (name), day (name)*
     * 
     * @var string
     */

    public const YY_MONTH_DAY = "YY_MONTH_DAY";

    /**
     * the date format in *year (two digit), month (name), day (name), hour, minute*
     * 
     * @var string
     */

    public const YY_MONTH_DAY__HOUR_MIN = "YY_MONTH_DAY__HOUR_MIN";

    /**
     * the date format in *year (two digit), month (name), day (name), hour, minute, second*
     * 
     * @var string
     */

    public const YY_MONTH_DAY__HOUR_MIN_SEC = "YY_MONTH_DAY__HOUR_MIN_SEC";

    /**
     * the date format in *year (four digit), month (without leading zero), day (without leading zero)*
     * 
     * @var string
     */

    public const YYYY_M_D = "YYYY_M_D";

    /**
     * the date format in *year (four digit), month (without leading zero), day (without leading zero), hour, minute*
     * 
     * @var string
     */

    public const YYYY_M_D__HOUR_MIN = "YYYY_M_D__HOUR_MIN";

    /**
     * the date format in *year (four digit), month (without leading zero), day (without leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YYYY_M_D__HOUR_MIN_SEC = "YYYY_M_D__HOUR_MIN_SEC";

    /**
     * the date format in *year (four digit), month (with leading zero), day (without leading zero)*
     * 
     * @var string
     */

    public const YYYY_MM_D = "YYYY_MM_D";

    /**
     * the date format in *year (four digit), month (with leading zero), day (without leading zero), hour, minute*
     * 
     * @var string
     */

    public const YYYY_MM_D__HOUR_MIN = "YYYY_MM_D__HOUR_MIN";

    /**
     * the date format in *year (four digit), month (with leading zero), day (without leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YYYY_MM_D__HOUR_MIN_SEC = "YYYY_MM_D__HOUR_MIN_SEC";

    /**
     * the date format in *year (four digit), month (name), day (without leading zero)*
     * 
     * @var string
     */

    public const YYYY_MONTH_D = "YYYY_MONTH_D";

    /**
     * the date format in *year (four digit), month (name), day (without leading zero), hour, minute*
     * 
     * @var string
     */

    public const YYYY_MONTH_D__HOUR_MIN = "YYYY_MONTH_D__HOUR_MIN";

    /**
     * the date format in *year (four digit), month (name), day (without leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YYYY_MONTH_D__HOUR_MIN_SEC = "YYYY_MONTH_D__HOUR_MIN_SEC";

    /**
     * the date format in *year (four digit), month (without leading zero), day (with leading zero)*
     * 
     * @var string
     */

    public const YYYY_M_DD = "YYYY_M_DD";

    /**
     * the date format in *year (four digit), month (without leading zero), day (with leading zero), hour, minute*
     * 
     * @var string
     */

    public const YYYY_M_DD__HOUR_MIN = "YYYY_M_DD__HOUR_MIN";

    /**
     * the date format in *year (four digit), month (without leading zero), day (with leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YYYY_M_DD__HOUR_MIN_SEC = "YYYY_M_DD__HOUR_MIN_SEC";

    /**
     * the date format in *year (four digit), month (with leading zero), day (with leading zero)*
     * 
     * @var string
     */

    public const YYYY_MM_DD = "YYYY_MM_DD";

    /**
     * the date format in *year (four digit), month (with leading zero), day (with leading zero), hour, minute*
     * 
     * @var string
     */

    public const YYYY_MM_DD__HOUR_MIN = "YYYY_MM_DD__HOUR_MIN";

    /**
     * the date format in *year (four digit), month (with leading zero), day (with leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YYYY_MM_DD__HOUR_MIN_SEC = "YYYY_MM_DD__HOUR_MIN_SEC";

    /**
     * the date format in *year (four digit), month (name), day (with leading zero)*
     * 
     * @var string
     */

    public const YYYY_MONTH_DD = "YYYY_MONTH_DD";

    /**
     * the date format in *year (four digit), month (name), day (with leading zero), hour, minute*
     * 
     * @var string
     */

    public const YYYY_MONTH_DD__HOUR_MIN = "YYYY_MONTH_DD__HOUR_MIN";

    /**
     * the date format in *year (four digit), month (name), day (with leading zero), hour, minute, second*
     * 
     * @var string
     */

    public const YYYY_MONTH_DD__HOUR_MIN_SEC = "YYYY_MONTH_DD__HOUR_MIN_SEC";

    /**
     * the date format in *year (four digit), month (without leading zero), day (name)*
     * 
     * @var string
     */

    public const YYYY_M_DAY = "YYYY_M_DAY";

    /**
     * the date format in *year (four digit), month (without leading zero), day (name), hour, minute*
     * 
     * @var string
     */

    public const YYYY_M_DAY__HOUR_MIN = "YYYY_M_DAY__HOUR_MIN";

    /**
     * the date format in *year (four digit), month (without leading zero), day (name), hour, minute, second*
     * 
     * @var string
     */

    public const YYYY_M_DAY__HOUR_MIN_SEC = "YYYY_M_DAY__HOUR_MIN_SEC";

    /**
     * the date format in *year (four digit), month (with leading zero), day (name)*
     * 
     * @var string
     */

    public const YYYY_MM_DAY = "YYYY_MM_DAY";

    /**
     * the date format in *year (four digit), month (with leading zero), day (name), hour, minute*
     * 
     * @var string
     */

    public const YYYY_MM_DAY__HOUR_MIN = "YYYY_MM_DAY__HOUR_MIN";

    /**
     * the date format in *year (four digit), month (with leading zero), day (name), hour, minute, second*
     * 
     * @var string
     */

    public const YYYY_MM_DAY__HOUR_MIN_SEC = "YYYY_MM_DAY__HOUR_MIN_SEC";

    /**
     * the date format in *year (four digit), month (name), day (name)*
     * 
     * @var string
     */

    public const YYYY_MONTH_DAY = "YYYY_MONTH_DAY";

    /**
     * the date format in *year (four digit), month (name), day (name), hour, minute*
     * 
     * @var string
     */

    public const YYYY_MONTH_DAY__HOUR_MIN = "YYYY_MONTH_DAY__HOUR_MIN";

    /**
     * the date format in *year (four digit), month (name), day (name), hour, minute, second*
     * 
     * @var string
     */

    public const YYYY_MONTH_DAY__HOUR_MIN_SEC = "YYYY_MONTH_DAY__HOUR_MIN_SEC";


}
