<?php

namespace XeroPHP\Models\PracticeManager\Client;

use XeroPHP\Remote;

/**
 * @property string Name
 * @property string CostMarkup
 * EG DayOfMonth or WithinDays
 * @property string PaymentTerm
 * @property string PaymentDay
 */
class Type extends Remote\Model
{
    /**
     * Get the resource uri of the class (Types) etc.
     */
    public static function getResourceURI(): string
    {
        return '';
    }

    /**
     * Get the root node name.  Just the unqualified classname.
     */
    public static function getRootNodeName(): string
    {
        return 'Type';
    }

    /**
     * Get the guid property.
     */
    public static function getGUIDProperty(): string
    {
        return '';
    }

    /**
     * Get the stem of the API (core.xro) etc.
     */
    public static function getAPIStem(): ?string
    {
        return Remote\URL::API_PRACTICE_MANAGER;
    }

    /**
     * Get the supported methods.
     */
    public static function getSupportedMethods(): array
    {
        return [];
    }

    /**
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly.
     */
    public static function getProperties(): array
    {
        return [
            'Name'        => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'CostMarkup'  => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'PaymentTerm' => [false, self::PROPERTY_TYPE_ENUM, null, false, false],
            'PaymentDay'  => [false, self::PROPERTY_TYPE_INT, null, false, false],
        ];
    }

    public static function isPageable(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    public function getID()
    {
        return $this->_data['ID'];
    }

    /**
     * @param  string  $value
     *
     * @return Type
     */
    public function setID($value)
    {
        $this->propertyUpdated('ID', $value);
        $this->_data['ID'] = $value;

        return $this;
    }
}
