<?php

/**
 * Multi-DateTime property 
 *
 * This element is used for iCalendar properties such as the EXDATE property. 
 * It basically provides a few helper functions that make it easier to deal 
 * with these. It supports both DATE-TIME and DATE values.
 *
 * In order to use this correctly, you must call setDateTimes and getDateTimes 
 * to retrieve and modify dates respectively.
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
class Sabre_VObject_Element_MultiDateTime extends Sabre_VObject_Property {

    /**
     * DateTime representation
     *
     * @var DateTime[]
     */
    protected $dateTimes;

    /**
     * dateType
     *
     * This is one of the Sabre_VObject_Element_DateTime constants.
     *
     * @var int 
     */
    protected $dateType;

    /**
     * Updates the value 
     * 
     * @param array $dt Must be an array of DateTime objects. 
     * @param int $dateType 
     * @return void
     */
    public function setDateTimes(array $dt, $dateType = Sabre_VObject_Element_DateTime::LOCALTZ) {

        throw new Sabre_DAV_Exception_NotImplemented('This feature is not supported in the PHP 5.1 version of this package');

    }

    /**
     * Returns the current DateTime value.
     *
     * If no value was set, this method returns null.
     *
     * @return array|null 
     */
    public function getDateTimes() {

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

}

?>
