<?php

/**
 * DateTimeZone 
 *
 * This class represents a timezone.
 * This is a very mimimal replacement of PHP 5.2+'s DateTimeZone.
 *
 * @package Sabre
 * @copyright Copyright (C) 2007-2011 Rooftop Solutions. All rights reserved.
 * @author Evert Pot (http://www.rooftopsolutions.nl/) 
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
class Sabre_DateTimeZone {

    /**
     * Timezone string
     * 
     * @var string 
     */
    protected $timezone;

    /**
     * __construct 
     * 
     * @param string $timezoneStr 
     */
    public function __construct($timezoneStr) {

        $this->timezone = $timezoneStr;

    }

    /**
     * Returns the timezone name 
     * 
     * @return string
     */
    public function getName() {

        return $this->timezone;

    }

}

?>
