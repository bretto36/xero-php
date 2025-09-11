<?php

namespace XeroPHP\Models\PracticeManager;

use XeroPHP\Remote;

/**
 * @property string UUID
 * @property string ID
 * @property string Name
 * @property string Date
 * @property string Number
 * @property string Decimal
 * @property bool Boolean
 * @property bool Text
 */
class CustomFieldValue extends Remote\Model
{
    /**
     * @var mixed
     */
    protected $identifier;

    /**
     * Can't be retrieved directly. First create an entity based on the custom fields you want to get. Then call ->getCustomFieldValues
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
        return 'CustomField';
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
        return [
            Remote\Request::METHOD_PUT,
            Remote\Request::METHOD_GET,
        ];
    }

    public function setIdentifier($value)
    {
        $this->identifier = $value;
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
            'UUID'    => [true, self::PROPERTY_TYPE_GUID, null, false, false],
            'ID'      => [true, self::PROPERTY_TYPE_INT, null, false, false],
            'Name'    => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'Date'    => [false, self::PROPERTY_TYPE_DATE, '\\DateTimeInterface', false, false],
            'Number'  => [false, self::PROPERTY_TYPE_INT, null, false, false],
            'Decimal' => [false, self::PROPERTY_TYPE_FLOAT, null, false, false],
            'Boolean' => [false, self::PROPERTY_TYPE_BOOLEAN, null, false, false],
            'Text'    => [false, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    public static function isPageable(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    public function getUUID()
    {
        return $this->_data['UUID'];
    }

    /**
     * @return int
     */
    public function getID()
    {
        return $this->_data['ID'];
    }

    /**
     * @param  int  $value
     *
     * @return self
     */
    public function setID($value)
    {
        $this->propertyUpdated('ID', $value);
        $this->_data['ID'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_data['Name'];
    }

    /**
     * @param  string  $value
     *
     * @return self
     */
    public function setName($value)
    {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;

        return $this;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDate()
    {
        return $this->_data['Date'];
    }

    /**
     * @param  \DateTimeInterface  $value
     *
     * @return self
     */
    public function setDate($value)
    {
        $this->propertyUpdated('Date', $value);
        $this->_data['Date'] = $value;

        return $this;
    }

    /**
     * @return int
     */
    public function getNumber()
    {
        return $this->_data['Number'];
    }

    /**
     * @param  int  $value
     *
     * @return self
     */
    public function setNumber($value)
    {
        $this->propertyUpdated('Number', $value);
        $this->_data['Number'] = $value;

        return $this;
    }

    /**
     * @return float
     */
    public function getDecimal()
    {
        return $this->_data['Decimal'];
    }

    /**
     * @param  float  $value
     *
     * @return self
     */
    public function setDecimal($value)
    {
        $this->propertyUpdated('Decimal', $value);
        $this->_data['Decimal'] = $value;

        return $this;
    }

    /**
     * @return bool
     */
    public function getBoolean()
    {
        return $this->_data['Boolean'];
    }

    /**
     * @param  bool  $value
     *
     * @return self
     */
    public function setBoolean($value)
    {
        $this->propertyUpdated('Boolean', $value);
        $this->_data['Boolean'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->_data['Text'];
    }

    /**
     * @param  string  $value
     *
     * @return self
     */
    public function setText($value)
    {
        $this->propertyUpdated('Text', $value);
        $this->_data['Text'] = $value;

        return $this;
    }
}
