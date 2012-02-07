<?php

/**
 * DateTime property 
 *
 * This element is used for iCalendar properties such as the DTSTART property. 
 * It basically provides a few helper functions that make it easier to deal 
 * with these. It supports both DATE-TIME and DATE values.
 *
 * In order to use this correctly, you must call setDateTime and getDateTime to 
 * retrieve and modify dates respectively.
 *
 * If you use the 'value' or properties directly, this object does not keep 
 * reference and results might appear incorrectly.
 * 
 * @package Sabre
 * @subpackage VObject
 * @copyright Copyright (C) 2007-2012 Rooftop Solutions. All rights reserved.
 * @author Evert Pot (http://www.rooftopsolutions.nl/) 
 * @license http://code.google.com/p/sabredav/wiki/License Modified BSD License
 */
class Sabre_VObject_Element_DateTime extends Sabre_VObject_Property {

    /**
     * Local 'floating' time
     */
    const LOCAL = 1;

    /**
     * UTC-based time
     */
    const UTC = 2;

    /**
     * Local time plus timezone
     */
    const LOCALTZ = 3;

    /**
     * Only a date, time is ignored
     */
    const DATE = 4;

    /**
     * DateTime representation
     *
     * @var DateTime
     */
    protected $dateTime;

    /**
     * dateType 
     * 
     * @var int 
     */
    protected $dateType;

    /**
     * Updates the Date and Time. 
     * 
     * @param DateTime $dt 
     * @param int $dateType 
     * @return void
     */
    public function setDateTime($dt, $dateType = self::LOCALTZ) {

        throw new Sabre_DAV_Exception_NotImplemented('This feature is not supported in the PHP 5.1 version of this package');

    }

    /**
     * Returns the current DateTime value.
     *
     * If no value was set, this method returns null.
     *
     * @return DateTime|null 
     */
    public function getDateTime() {

        throw new Sabre_DAV_Exception_NotImplemented('This feature is not supported in the PHP 5.1 version of this package');

    }

    /**
     * Returns the type of Date format.
     *
     * This method returns one of the format constants. If no date was set, 
     * this method will return null.
     *
     * @return int|null
     */
    public function getDateType() {

        throw new Sabre_DAV_Exception_NotImplemented('This feature is not supported in the PHP 5.1 version of this package');

    }

    /**
     * Parses the internal data structure to figure out what the current date 
     * and time is.
     *
     * The returned array contains two elements:
     *   1. A 'DateType' constant (as defined on this class), or null. 
     *   2. A DateTime object (or null)
     *
     * @param string|null $propertyValue The string to parse (yymmdd or 
     *                                   ymmddThhmmss, etc..)
     * @param Sabre_VObject_Property|null $property The instance of the 
     *                                              property we're parsing. 
     * @return array 
     */
    static public function parseData($propertyValue, $tzid) {

        throw new Sabre_DAV_Exception_NotImplemented('This feature is not supported in the PHP 5.1 version of this package');

    }

}

?>
