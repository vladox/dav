<?php

/**
 * DateTime object
 *
 * This object acts as a replacement for PHP's native DateTime object.
 *
 * PHP 5.1 does not have this object, so some of it's functionality is mimiced
 * here.
 * 
 * @package Sabre
 * @copyright Copyright (C) 2007-2011 Rooftop Solutions. All rights reserved.
 * @author Evert Pot (http://www.rooftopsolutions.nl/) 
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
class Sabre_DateTime {

    const ATOM = 'Y-m-d\TH:i:sP';
    const COOKIE = 'l, d-M-y H:i:s T';
    const ISO8601 = 'Y-m-d\TH:i:sO';
    const RFC822 = 'D, d M y H:i:s O';
    const RFC850 = 'l, d-M-y H:i:s T';
    const RFC1036 = 'D, d M y H:i:s O';
    const RFC1123 = 'D, d M Y H:i:s O';
    const RFC2822 = 'D, d M Y H:i:s O';
    const RFC3339 = 'Y-m-d\TH:i:sP';
    const RSS = 'D, d M Y H:i:s O';
    const W3C = 'Y-m-d\TH:i:sP';

    /**
     * Unix timestamp 
     * 
     * @var int 
     */
    protected $time;

    /**
     * Timezone  
     * 
     * @var Sabre_DateTimeZone 
     */
    protected $timezone;

    /**
     * Creates the object
     *
     * Pass any date string as it's argument. As long as it's supported by 
     * strtotime, it will work. 
     * 
     * @param string $timeStr 
     */
    public function __construct($timeStr, Sabre_DateTimeZone $timezone = null) {

        $TZ = date_default_timezone_get();
        if ($timezone) date_default_timezone_set($timezone->getName()); 

        $this->time = strtotime($timeStr);
        if (!$this->time) throw new Exception("'$timeStr' is not a valid date string");
        $this->timezone = $timezone;

        date_default_timezone_set($TZ);

    }

    /**
     * Updates the internal timezone 
     * 
     * @param Sabre_DateTimeZone $timezone 
     * @return void
     */
    public function setTimeZone(Sabre_DateTimeZone $timezone) {

        $this->timezone = $timezone;
        
    }

    /**
     * Updates the current time with a new relative time
     *
     * Example: "+1 hour". 
     * 
     * @param string $newDate 
     * @return void
     */
    public function modify($newDate) {

        $newTime = strtotime($newDate, $this->time);
        if (!$newTime) throw new Exception("'$timeStr' is not a valid date string");
        $this->time = $newTime;

    }

    /**
     * Returns a formatted string based on the current date 
     * 
     * @param string $format 
     * @return string 
     */
    public function format($format) {

        return date($format, $this->time);

    }

    /**
     * Returns the unix timestamp for this date 
     * 
     * @return int 
     */
    public function getTimeStamp() {

        return $this->time;

    }

}

?>
