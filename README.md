
# MPL DateTime

The MPL (MadByAd PHP Library) DateTime is a library that is created as simple and easy to use date and time system. This library include, easily format and get the current date or/and time, a calculator for calculating time such as what the date is 20 days later or what the date is 20 days previously

- [MPL DateTime](#mpl-datetime)
  - [Installation](#installation)
  - [Include](#include)
  - [Date class](#date-class)
    - [CreateFromInt Method](#createfromint-method)
    - [CreateFromString Method](#createfromstring-method)
    - [Get Method](#get-method)
    - [GetArray Method](#getarray-method)
    - [GetUnix Method](#getunix-method)
  - [Time Class](#time-class)
    - [Setting Time](#setting-time)
    - [Adding Time](#adding-time)
    - [Subtracting Time](#subtracting-time)
    - [Getting Time](#getting-time)
  - [DateCalculator Class](#datecalculator-class)
    - [Adding Time To Date](#adding-time-to-date)
    - [Subtracting Time From Date](#subtracting-time-from-date)
    - [Calculate Time Gap](#calculate-time-gap)
  - [DateFormat Class](#dateformat-class)


## Installation

to install the package go ahead and open composer then write the command

```
composer require madbyad/mpl-date-time
```

## Include

The MPL DateTime library. The library include 4 class. The `Date` class is used for advance storing and formatting of date, the `Time` class is used for advance storing and formatting of time, The `DateFormat` class which store a list of date formats you can use, and the `DateCalculator` class is used for calculating date such as what date will it be 20 days later or 20 days previously

## Date class

The `Date(int $time = null, bool $fromToday = false)` class is used for advance storing and formatting of date. When creating a new `Date` class, it takes 2 optional parameter. The first is the time, if not given then it will default to `null` which will get the current date, if `0` then it will mean the beggining of the unix timestamp `1 January 1970`, if it `86400` then it will mean 1 day after the beggining of the unix timestamp `2 January 1970`. The second is to determine whether getting the time from the beggining of the unix timestamp or from today, if `false` then the time `0` will get the beggining of the unix timestamp, if `true` then the time `0` will get the current date, the time `86400` will get tommorow, and the time `-86400` will get yesterday

**Example**

```php
// This class will store the current date
new Date; 

// This class will store the beggining of the unix timestamp "1 January 1970"
new Date(0); 

// This class will store 1 day after the beggining of the unix timestamp "2 January 1970"
new Date(86400);

// This class will store the current date
new Date(0, true); 

// This class will store the date tommorow
new Date(86400, true); 

// This class will store the date yesterday
new Date(-86400, true); 
```

### CreateFromInt Method

The `Date::createFromInt(int $day = 0, int $month = 0, int $year = 0, int $hour = 0, int $minute = 0, int $second = 0)` method is used for creating a date from the given time in integer representation, it takes 6 optional parameter. The first is the day `1-31`, then the month `1-12`, then the year, then the hour, minutes and second. This method will return a new `Date` class with the given time converted into a date

```php
// this will create the date of 16 January 2009
$date = Date::createFromInt(16, 1, 2009);
```

### CreateFromString Method

The `Date::createFromString(string $date)` method is used fro creating a date from the given string of date. This method only takes 1 parameter and that is the date. This method will return a new `Date` class with the given date

```php
// this will create the date of 16 January 2009
$date = Date::createFromString("16 January 2009");

// this will also create the date of 16 January 2009
$date = Date::createFromString("16-1-2009");

// this will also create the date of 16 January 2009
$date = Date::createFromString("16\1\2009");

// this will also create the date of 16 January 2009
$date = Date::createFromString("16/1/2009");
```

### Get Method

The `get(string $format)` will return the stored date data into a formatted date string, for the format you can get it from the `DateFormat` class which has a bunch of const that can be used for different type of format

**Example**

```php
$date = new Date(0);

// this will return "1/1/1970"
echo $date->get(DateFormat::D_M_YYYY);

// this will return "01/01/1970"
echo $date->get(DateFormat::DD_MM_YYYY);

// this will return "Thurday 1 January 1970 01:00"
echo $date->get(DateFormat::DAY_MONTH_YYYY__HOUR_MIN);

// this will return "1/1/1970"
echo $date->get(DateFormat::M_D_YYYY);

// this will return "01/01/1970"
echo $date->get(DateFormat::MM_DD_YYYY);

// this will return "January Thurday 1 1970 01:00"
echo $date->get(DateFormat::MONTH_DAY_YYYY__HOUR_MIN);

// this will return "1970/1/1"
echo $date->get(DateFormat::YYYY_M_D);

// this will return "1970/01/01"
echo $date->get(DateFormat::YYYY_MM_DD);

// this will return "1970 January Thurday 1 01:00"
echo $date->get(DateFormat::YYYY_MONTH_DAY__HOUR_MIN);
```

**output**

```php
"1/1/1970"

"01/01/1970"

"Thurday 1 January 1970 01:00"

"1/1/1970"

"01/01/1970"

"January Thurday 1 1970 01:00"

"1970/1/1"

"1970/01/01"

"1970 January Thurday 1 01:00"
```

### GetArray Method

The `getArray()` method will return the stored date in a form of an associative array

**Example**

```php
$date = new Date(0);

var_dump($date->getArray());
```

**output**

```php
[
    ["day"] => "1",
    ["dayWithZero"] => "01",
    ["dayName"] => "Thursday",
    ["month"] => "1",
    ["monthWithZero"] => "01",
    ["monthName"] => "January",
    ["year"] => "1970",
    ["yearTwoDigit"] => "70",
    ["hour"] => "01",
    ["minute"] => "00",
    ["second"] => "00",
    ["unix"] => "0",
];
```

### GetUnix Method

The `getUnix()` method is will return the stored date in a form of a unix timestamp

## Time Class

The `Time(int $time = 0)` class is used for advance storing and formatting of time. When creating a new class it take 1 optional parameter and that is the time (in a form of unix timestamp) default is `0`

**Example**

```php
// Create a new class that store 0 time (0 second)
new Time();

// Create a new class that store 1 day
new Time(86400);

// Create a new class that store 1 month (30 days)
new Time(86400 * 30);
```

### Setting Time

To set the time to a certain amount of time you can use the following method below. It only takes 1 parameter and that is the amount

```php
$time = new Time();

// set the time to be 86400 second of unix timestamp (1 day)
$time->setUnix(86400);

// set the time to be 1 year
$time->setYear(1);

// set the time to be 1 month
$time->setMonth(1);

// set the time to be 1 day
$time->setDay(1);

// set the time to be 1 hour
$time->setHour(1);

// set the time to be 1 minute
$time->setMinute(1);

// set the time to be 1 second
$time->setSecond(1);
```

### Adding Time

To add a certain amount of time you can use the following method below. It only takes 1 parameter and that is the amount

```php
$time = new Time();

// add 86400 second of unix timestamp (1 day)
$time->addUnix(86400);

// add 1 year
$time->addYear(1);

// add 1 month
$time->addMonth(1);

// add 1 day
$time->addDay(1);

// add 1 hour
$time->addHour(1);

// add 1 minute
$time->addMinute(1);

// add a second
$time->addSecond(1);
```

### Subtracting Time

To subtract a certain amount of time you can use the following method below. It only takes 1 parameter and that is the amount

```php
$time = new Time();

// subtract 86400 second of unix timestamp (1 day)
$time->subtractUnix(86400);

// subtract 1 year
$time->subtractYear(1);

// subtract 1 month
$time->subtractMonth(1);

// subtract 1 day
$time->subtractDay(1);

// subtract 1 hour
$time->subtractHour(1);

// subtract 1 minute
$time->subtractMinute(1);

// subtract a second
$time->subtractSecond(1);
```

### Getting Time

To get a time you can use these method

```php
// get the unix timestamp
$time->getUnix();

// get the time year
$time->getYear();

// get the time month
$time->getMonth();

// get the time day
$time->getDay();

// get the time hour
$time->getHour();

// get the time minute
$time->getMinute();

// get the time second
$time->getSecond();
```

To get the time as a form of associative array you can use the `get()` method

**Example**

```php
$time = new Time();

$time->addUnix(86400);
$time->addYear(1);
$time->addMonth(1);
$time->addDay(1);
$time->addHour(1);
$time->addMinute(1);
$time->addSecond(1);

var_dump($time->get());
```

**ouput**

```php
[
    ["unix"] => 33872461,
    ["year"] => 1,
    ["month"] => 1,
    ["day"] => 2,
    ["hour"] => 1,
    ["minute"] => 1,
    ["second"] => 1,
];
```

To get the time as a formatted string you can use the `getString()` method

**Example**

```php
$time = new Time();

$time->addUnix(86400);
$time->addYear(1);
$time->addMonth(1);
$time->addDay(1);
$time->addHour(1);
$time->addMinute(1);
$time->addSecond(1);

echo $time->getString();
```

**ouput**

```php
"1 year 1 month 2 days 1 hour 1 minute 1 second"
```

## DateCalculator Class

The `DateCalculator` class contain methods for date and time calculation

### Adding Time To Date

To add a time to a date use the `add(Date $date, Time $time)` method, it takes only 2 parameter. The first is the date and the second is the time

**Example**

```php
$date = new Date(0);

$time = new Time();
$time->setDay(15);

$newDate = DateCalculator::add($date, $time);

echo $date->get(DateFormat::DD_MONTH_YYYY);

echo $newDate->get(DateFormat::DD_MONTH_YYYY);
```

**Output**

```php
"01 January 1970"
"16 January 1970"
```

### Subtracting Time From Date

To subtract a time from a date use the `subtract(Date $date, Time $time)` method, it takes only 2 parameter. The first is the date and the second is the time

**Example**

```php
$date = new Date(86400 * 15);

$time = new Time();
$time->setDay(5);

$newDate = DateCalculator::subtract($date, $time);

echo $date->get(DateFormat::DD_MONTH_YYYY);

echo $newDate->get(DateFormat::DD_MONTH_YYYY);
```

**Output**

```php
"16 January 1970"
"11 January 1970"
```

### Calculate Time Gap

To calculate the time gap between 2 date you can use the `timeGap(Date $firstDate, Date $secondDate)` method which only takes 2 parameter and both of those are the date

**Example**

```php
$date = new Date(0);
$secondDate = new Date(86400 * 15);

$timeGap = DateCalculator::timeGap($date, $secondDate);
echo $timeGap->getString();

// also works in reverse
$timeGap = DateCalculator::timeGap($secondDate, $date);
echo $timeGap->getString();
```

**output**

```php
"15 days"
"15 days"
```

## DateFormat Class

The `DateFormat` class contains a list of constant which can be used to format a date in different variations

| Constant | Description |
| -------- | ----------- |
| `D_M_YY` | the date format in *day (without leading zero), month (without leading zero), year (two digit)* |
| `D_M_YY__HOUR_MIN` | the date format in *day (without leading zero), month (without leading zero), year (two digit), hour, minute* |
| `D_M_YY__HOUR_MIN_SEC` | the date format in *day (without leading zero), month (without leading zero), year (two digit), hour, minute, second* |
| `D_MM_YY` | the date format in *day (without leading zero), month (with leading zero), year (two digit)* |
| `D_MM_YY__HOUR_MIN` | the date format in *day (without leading zero), month (with leading zero), year (two digit), hour, minute* |
| `D_MM_YY__HOUR_MIN_SEC` | the date format in *day (without leading zero), month (with leading zero), year (two digit), hour, minute, second* |
| `D_MONTH_YY` | the date format in *day (without leading zero), month (name), year (two digit)* |
| `D_MONTH_YY__HOUR_MIN` | the date format in *day (without leading zero), month (name), year (two digit), hour, minute* |
| `D_MONTH_YY__HOUR_MIN_SEC` | the date format in *day (without leading zero), month (name), year (two digit), hour, minute, second* |
| `DD_M_YY` | the date format in *day (with leading zero), month (without leading zero), year (two digit)* |
| `DD_M_YY__HOUR_MIN` | the date format in *day (with leading zero), month (without leading zero), year (two digit), hour, minute* |
| `DD_M_YY__HOUR_MIN_SEC` | the date format in *day (with leading zero), month (without leading zero), year (two digit), hour, minute, second* |
| `DD_MM_YY` | the date format in *day (with leading zero), month (with leading zero), year (two digit)* |
| `DD_MM_YY__HOUR_MIN` | the date format in *day (with leading zero), month (with leading zero), year (two digit), hour, minute* |
| `DD_MM_YY__HOUR_MIN_SEC` | the date format in *day (with leading zero), month (with leading zero), year (two digit), hour, minute, second* |
| `DD_MONTH_YY` | the date format in *day (with leading zero), month (name), year (two digit)* |
| `DD_MONTH_YY__HOUR_MIN` | the date format in *day (with leading zero), month (name), year (two digit), hour, minute* |
| `DD_MONTH_YY__HOUR_MIN_SEC` | the date format in *day (with leading zero), month (name), year (two digit), hour, minute, second* |
| `DAY_M_YY` | the date format in *day (name), month (without leading zero), year (two digit)* |
| `DAY_M_YY__HOUR_MIN` | the date format in *day (name), month (without leading zero), year (two digit), hour, minute* |
| `DAY_M_YY__HOUR_MIN_SEC` | the date format in *day (name), month (without leading zero), year (two digit), hour, minute, second* |
| `DAY_MM_YY` | the date format in *day (name), month (with leading zero), year (two digit)* |
| `DAY_MM_YY__HOUR_MIN` | the date format in *day (name), month (with leading zero), year (two digit), hour, minute* |
| `DAY_MM_YY__HOUR_MIN_SEC` | the date format in *day (name), month (with leading zero), year (two digit), hour, minute, second* |
| `DAY_MONTH_YY` | the date format in *day (name), month (name), year (two digit)* |
| `DAY_MONTH_YY__HOUR_MIN` | the date format in *day (name), month (name), year (two digit), hour, minute* |
| `DAY_MONTH_YY__HOUR_MIN_SEC` | the date format in *day (name), month (name), year (two digit), hour, minute, second* |
| `D_M_YYYY` | the date format in *day (without leading zero), month (without leading zero), year (four digit)* |
| `D_M_YYYY__HOUR_MIN` | the date format in *day (without leading zero), month (without leading zero), year (four digit), hour, minute* |
| `D_M_YYYY__HOUR_MIN_SEC` | the date format in *day (without leading zero), month (without leading zero), year (four digit), hour, minute, second* |
| `D_MM_YYYY` | the date format in *day (without leading zero), month (with leading zero), year (four digit)* |
| `D_MM_YYYY__HOUR_MIN` | the date format in *day (without leading zero), month (with leading zero), year (four digit), hour, minute* |
| `D_MM_YYYY__HOUR_MIN_SEC` | the date format in *day (without leading zero), month (with leading zero), year (four digit), hour, minute, second* |
| `D_MONTH_YYYY` | the date format in *day (without leading zero), month (name), year (four digit)* |
| `D_MONTH_YYYY__HOUR_MIN` | the date format in *day (without leading zero), month (name), year (four digit), hour, minute* |
| `D_MONTH_YYYY__HOUR_MIN_SEC` | the date format in *day (without leading zero), month (name), year (four digit), hour, minute, second* |
| `DD_M_YYYY` | the date format in *day (with leading zero), month (without leading zero), year (four digit)* |
| `DD_M_YYYY__HOUR_MIN` | the date format in *day (with leading zero), month (without leading zero), year (four digit), hour, minute* |
| `DD_M_YYYY__HOUR_MIN_SEC` | the date format in *day (with leading zero), month (without leading zero), year (four digit), hour, minute, second* |
| `DD_MM_YYYY` | the date format in *day (with leading zero), month (with leading zero), year (four digit)* |
| `DD_MM_YYYY__HOUR_MIN` | the date format in *day (with leading zero), month (with leading zero), year (four digit), hour, minute* |
| `DD_MM_YYYY__HOUR_MIN_SEC` | the date format in *day (with leading zero), month (with leading zero), year (four digit), hour, minute, second* |
| `DD_MONTH_YYYY` | the date format in *day (with leading zero), month (name), year (four digit)* |
| `DD_MONTH_YYYY__HOUR_MIN` | the date format in *day (with leading zero), month (name), year (four digit), hour, minute* |
| `DD_MONTH_YYYY__HOUR_MIN_SEC` | the date format in *day (with leading zero), month (name), year (four digit), hour, minute, second* |
| `DAY_M_YYYY` | the date format in *day (name), month (without leading zero), year (four digit)* |
| `DAY_M_YYYY__HOUR_MIN` | the date format in *day (name), month (without leading zero), year (four digit), hour, minute* |
| `DAY_M_YYYY__HOUR_MIN_SEC` | the date format in *day (name), month (without leading zero), year (four digit), hour, minute, second* |
| `DAY_MM_YYYY` | the date format in *day (name), month (with leading zero), year (four digit)* |
| `DAY_MM_YYYY__HOUR_MIN` | the date format in *day (name), month (with leading zero), year (four digit), hour, minute* |
| `DAY_MM_YYYY__HOUR_MIN_SEC` | the date format in *day (name), month (with leading zero), year (four digit), hour, minute, second* |
| `DAY_MONTH_YYYY` | the date format in *day (name), month (name), year (four digit)* |
| `DAY_MONTH_YYYY__HOUR_MIN` | the date format in *day (name), month (name), year (four digit), hour, minute* |
| `DAY_MONTH_YYYY__HOUR_MIN_SEC` | the date format in *day (name), month (name), year (four digit), hour, minute, second* |
| `M_D_YY` | the date format in *month (without leading zero), day (without leading zero), year (two digit)* |
| `M_D_YY__HOUR_MIN` | the date format in *month (without leading zero), day (without leading zero), year (two digit), hour, minute* |
| `M_D_YY__HOUR_MIN_SEC` | the date format in *month (without leading zero), day (without leading zero), year (two digit), hour, minute, second* |
| `MM_D_YY` | the date format in *month (with leading zero), day (without leading zero), year (two digit)* |
| `MM_D_YY__HOUR_MIN` | the date format in *month (with leading zero), day (without leading zero), year (two digit), hour, minute* |
| `MM_D_YY__HOUR_MIN_SEC` | the date format in *month (with leading zero), day (without leading zero), year (two digit), hour, minute, second* |
| `MONTH_D_YY` | the date format in *month (name), day (without leading zero), year (two digit)* |
| `MONTH_D_YY__HOUR_MIN` | the date format in *month (name), day (without leading zero), year (two digit), hour, minute* |
| `MONTH_D_YY__HOUR_MIN_SEC` | the date format in *month (name), day (without leading zero), year (two digit), hour, minute, second* |
| `M_DD_YY` | the date format in *month (without leading zero), day (with leading zero), year (two digit)* |
| `M_DD_YY__HOUR_MIN` | the date format in *month (without leading zero), day (with leading zero), year (two digit), hour, minute* |
| `M_DD_YY__HOUR_MIN_SEC` | the date format in *month (without leading zero), day (with leading zero), year (two digit), hour, minute, second* |
| `MM_DD_YY` | the date format in *month (with leading zero), day (with leading zero), year (two digit)* |
| `MM_DD_YY__HOUR_MIN` | the date format in *month (with leading zero), day (with leading zero), year (two digit), hour, minute* |
| `MM_DD_YY__HOUR_MIN_SEC` | the date format in *month (with leading zero), day (with leading zero), year (two digit), hour, minute, second* |
| `MONTH_DD_YY` | the date format in *month (name), day (with leading zero), year (two digit)* |
| `MONTH_DD_YY__HOUR_MIN` | the date format in *month (name), day (with leading zero), year (two digit), hour, minute* |
| `MONTH_DD_YY__HOUR_MIN_SEC` | the date format in *month (name), day (with leading zero), year (two digit), hour, minute, second* |
| `M_DAY_YY` | the date format in *month (without leading zero), day (name), year (two digit)* |
| `M_DAY_YY__HOUR_MIN` | the date format in *month (without leading zero), day (name), year (two digit), hour, minute* |
| `M_DAY_YY__HOUR_MIN_SEC` | the date format in *month (without leading zero), day (name), year (two digit), hour, minute, second* |
| `MM_DAY_YY` | the date format in *month (with leading zero), day (name), year (two digit)* |
| `MM_DAY_YY__HOUR_MIN` | the date format in *month (with leading zero), day (name), year (two digit), hour, minute* |
| `MM_DAY_YY__HOUR_MIN_SEC` | the date format in *month (with leading zero), day (name), year (two digit), hour, minute, second* |
| `MONTH_DAY_YY` | the date format in *month (name), day (name), year (two digit)* |
| `MONTH_DAY_YY__HOUR_MIN` | the date format in *month (name), day (name), year (two digit), hour, minute* |
| `MONTH_DAY_YY__HOUR_MIN_SEC` | the date format in *month (name), day (name), year (two digit), hour, minute, second* |
| `M_D_YYYY` | the date format in *month (without leading zero), day (without leading zero), year (four digit)* |
| `M_D_YYYY__HOUR_MIN` | the date format in *month (without leading zero), day (without leading zero), year (four digit), hour, minute* |
| `M_D_YYYY__HOUR_MIN_SEC` | the date format in *month (without leading zero), day (without leading zero), year (four digit), hour, minute, second* |
| `MM_D_YYYY` | the date format in *month (with leading zero), day (without leading zero), year (four digit)* |
| `MM_D_YYYY__HOUR_MIN` | the date format in *month (with leading zero), day (without leading zero), year (four digit), hour, minute* |
| `MM_D_YYYY__HOUR_MIN_SEC` | the date format in *month (with leading zero), day (without leading zero), year (four digit), hour, minute, second* |
| `MONTH_D_YYYY` | the date format in *month (name), day (without leading zero), year (four digit)* |
| `MONTH_D_YYYY__HOUR_MIN` | the date format in *month (name), day (without leading zero), year (four digit), hour, minute* |
| `MONTH_D_YYYY__HOUR_MIN_SEC` | the date format in *month (name), day (without leading zero), year (four digit), hour, minute, second* |
| `M_DD_YYYY` | the date format in *month (without leading zero), day (with leading zero), year (four digit)* |
| `M_DD_YYYY__HOUR_MIN` | the date format in *month (without leading zero), day (with leading zero), year (four digit), hour, minute* |
| `M_DD_YYYY__HOUR_MIN_SEC` | the date format in *month (without leading zero), day (with leading zero), year (four digit), hour, minute, second* |
| `MM_DD_YYYY` | the date format in *month (with leading zero), day (with leading zero), year (four digit)* |
| `MM_DD_YYYY__HOUR_MIN` | the date format in *month (with leading zero), day (with leading zero), year (four digit), hour, minute* |
| `MM_DD_YYYY__HOUR_MIN_SEC` | the date format in *month (with leading zero), day (with leading zero), year (four digit), hour, minute, second* |
| `MONTH_DD_YYYY` | the date format in *month (name), day (with leading zero), year (four digit)* |
| `MONTH_DD_YYYY__HOUR_MIN` | the date format in *month (name), day (with leading zero), year (four digit), hour, minute* |
| `MONTH_DD_YYYY__HOUR_MIN_SEC` | the date format in *month (name), day (with leading zero), year (four digit), hour, minute, second* |
| `M_DAY_YYYY` | the date format in *month (without leading zero), day (name), year (four digit)* |
| `M_DAY_YYYY__HOUR_MIN` | the date format in *month (without leading zero), day (name), year (four digit), hour, minute* |
| `M_DAY_YYYY__HOUR_MIN_SEC` | the date format in *month (without leading zero), day (name), year (four digit), hour, minute, second* |
| `MM_DAY_YYYY` | the date format in *month (with leading zero), day (name), year (four digit)* |
| `MM_DAY_YYYY__HOUR_MIN` | the date format in *month (with leading zero), day (name), year (four digit), hour, minute* |
| `MM_DAY_YYYY__HOUR_MIN_SEC` | the date format in *month (with leading zero), day (name), year (four digit), hour, minute, second* |
| `MONTH_DAY_YYYY` | the date format in *month (name), day (name), year (four digit)* |
| `MONTH_DAY_YYYY__HOUR_MIN` | the date format in *month (name), day (name), year (four digit), hour, minute* |
| `MONTH_DAY_YYYY__HOUR_MIN_SEC` | the date format in *month (name), day (name), year (four digit), hour, minute, second* |
| `YY_M_D` | the date format in *year (two digit), month (without leading zero), day (without leading zero)* |
| `YY_M_D__HOUR_MIN` | the date format in *year (two digit), month (without leading zero), day (without leading zero), hour, minute* |
| `YY_M_D__HOUR_MIN_SEC` | the date format in *year (two digit), month (without leading zero), day (without leading zero), hour, minute, second* |
| `YY_MM_D` | the date format in *year (two digit), month (with leading zero), day (without leading zero)* |
| `YY_MM_D__HOUR_MIN` | the date format in *year (two digit), month (with leading zero), day (without leading zero), hour, minute* |
| `YY_MM_D__HOUR_MIN_SEC` | the date format in *year (two digit), month (with leading zero), day (without leading zero), hour, minute, second* |
| `YY_MONTH_D` | the date format in *year (two digit), month (name), day (without leading zero)* |
| `YY_MONTH_D__HOUR_MIN` | the date format in *year (two digit), month (name), day (without leading zero), hour, minute* |
| `YY_MONTH_D__HOUR_MIN_SEC` | the date format in *year (two digit), month (name), day (without leading zero), hour, minute, second* |
| `YY_M_DD` | the date format in *year (two digit), month (without leading zero), day (with leading zero)* |
| `YY_M_DD__HOUR_MIN` | the date format in *year (two digit), month (without leading zero), day (with leading zero), hour, minute* |
| `YY_M_DD__HOUR_MIN_SEC` | the date format in *year (two digit), month (without leading zero), day (with leading zero), hour, minute, second* |
| `YY_MM_DD` | the date format in *year (two digit), month (with leading zero), day (with leading zero)* |
| `YY_MM_DD__HOUR_MIN` | the date format in *year (two digit), month (with leading zero), day (with leading zero), hour, minute* |
| `YY_MM_DD__HOUR_MIN_SEC` | the date format in *year (two digit), month (with leading zero), day (with leading zero), hour, minute, second* |
| `YY_MONTH_DD` | the date format in *year (two digit), month (name), day (with leading zero)* |
| `YY_MONTH_DD__HOUR_MIN` | the date format in *year (two digit), month (name), day (with leading zero), hour, minute* |
| `YY_MONTH_DD__HOUR_MIN_SEC` | the date format in *year (two digit), month (name), day (with leading zero), hour, minute, second* |
| `YY_M_DAY` | the date format in *year (two digit), month (without leading zero), day (name)* |
| `YY_M_DAY__HOUR_MIN` | the date format in *year (two digit), month (without leading zero), day (name), hour, minute* |
| `YY_M_DAY__HOUR_MIN_SEC` | the date format in *year (two digit), month (without leading zero), day (name), hour, minute, second* |
| `YY_MM_DAY` | the date format in *year (two digit), month (with leading zero), day (name)* |
| `YY_MM_DAY__HOUR_MIN` | the date format in *year (two digit), month (with leading zero), day (name), hour, minute* |
| `YY_MM_DAY__HOUR_MIN_SEC` | the date format in *year (two digit), month (with leading zero), day (name), hour, minute, second* |
| `YY_MONTH_DAY` | the date format in *year (two digit), month (name), day (name)* |
| `YY_MONTH_DAY__HOUR_MIN` | the date format in *year (two digit), month (name), day (name), hour, minute* |
| `YY_MONTH_DAY__HOUR_MIN_SEC` | the date format in *year (two digit), month (name), day (name), hour, minute, second* |
| `YYYY_M_D` | the date format in *year (four digit), month (without leading zero), day (without leading zero)* |
| `YYYY_M_D__HOUR_MIN` | the date format in *year (four digit), month (without leading zero), day (without leading zero), hour, minute* |
| `YYYY_M_D__HOUR_MIN_SEC` | the date format in *year (four digit), month (without leading zero), day (without leading zero), hour, minute, second* |
| `YYYY_MM_D` | the date format in *year (four digit), month (with leading zero), day (without leading zero)* |
| `YYYY_MM_D__HOUR_MIN` | the date format in *year (four digit), month (with leading zero), day (without leading zero), hour, minute* |
| `YYYY_MM_D__HOUR_MIN_SEC` | the date format in *year (four digit), month (with leading zero), day (without leading zero), hour, minute, second* |
| `YYYY_MONTH_D` | the date format in *year (four digit), month (name), day (without leading zero)* |
| `YYYY_MONTH_D__HOUR_MIN` | the date format in *year (four digit), month (name), day (without leading zero), hour, minute* |
| `YYYY_MONTH_D__HOUR_MIN_SEC` | the date format in *year (four digit), month (name), day (without leading zero), hour, minute, second* |
| `YYYY_M_DD` | the date format in *year (four digit), month (without leading zero), day (with leading zero)* |
| `YYYY_M_DD__HOUR_MIN` | the date format in *year (four digit), month (without leading zero), day (with leading zero), hour, minute* |
| `YYYY_M_DD__HOUR_MIN_SEC` | the date format in *year (four digit), month (without leading zero), day (with leading zero), hour, minute, second* |
| `YYYY_MM_DD` | the date format in *year (four digit), month (with leading zero), day (with leading zero)* |
| `YYYY_MM_DD__HOUR_MIN` | the date format in *year (four digit), month (with leading zero), day (with leading zero), hour, minute* |
| `YYYY_MM_DD__HOUR_MIN_SEC` | the date format in *year (four digit), month (with leading zero), day (with leading zero), hour, minute, second* |
| `YYYY_MONTH_DD` | the date format in *year (four digit), month (name), day (with leading zero)* |
| `YYYY_MONTH_DD__HOUR_MIN` | the date format in *year (four digit), month (name), day (with leading zero), hour, minute* |
| `YYYY_MONTH_DD__HOUR_MIN_SEC` | the date format in *year (four digit), month (name), day (with leading zero), hour, minute, second* |
| `YYYY_M_DAY` | the date format in *year (four digit), month (without leading zero), day (name)* |
| `YYYY_M_DAY__HOUR_MIN` | the date format in *year (four digit), month (without leading zero), day (name), hour, minute* |
| `YYYY_M_DAY__HOUR_MIN_SEC` | the date format in *year (four digit), month (without leading zero), day (name), hour, minute, second* |
| `YYYY_MM_DAY` | the date format in *year (four digit), month (with leading zero), day (name)* |
| `YYYY_MM_DAY__HOUR_MIN` | the date format in *year (four digit), month (with leading zero), day (name), hour, minute* |
| `YYYY_MM_DAY__HOUR_MIN_SEC` | the date format in *year (four digit), month (with leading zero), day (name), hour, minute, second* |
| `YYYY_MONTH_DAY` | the date format in *year (four digit), month (name), day (name)* |
| `YYYY_MONTH_DAY__HOUR_MIN` | the date format in *year (four digit), month (name), day (name), hour, minute* |
| `YYYY_MONTH_DAY__HOUR_MIN_SEC` | the date format in *year (four digit), month (name), day (name), hour, minute, second* |
