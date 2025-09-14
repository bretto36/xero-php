<?php

namespace XeroPHP\Models\PracticeManager\Client;

use DateTimeInterface;
use XeroPHP\Remote;

/**
 * @property string Title
 * @property string Text
 * @property string Folder
 * @property DateTimeInterface Date
 * @property string CreatedBy
 */
class Note extends Remote\Model
{
    /**
     * Get the resource uri of the class (Notes) etc.
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
        return 'Note';
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
    public static function getAPIStem(): string
    {
        return Remote\URL::API_PRACTICE_MANAGER;
    }

    /**
     * Get the supported methods.
     */
    public static function getSupportedMethods(): array
    {
        return [        ];
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
            'Title'     => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Text'      => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Folder'    => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Date'      => [false, self::PROPERTY_TYPE_DATE, '\\DateTimeInterface', false, false],
            'CreatedBy' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    public static function isPageable(): bool
    {
        return false;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_data['Title'];
    }

    /**
     * @param string $value
     *
     * @return Note
     */
    public function setTitle($value)
    {
        $this->propertyUpdated('Title', $value);
        $this->_data['Title'] = $value;

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
     * @param string $value
     *
     * @return Note
     */
    public function setText($value)
    {
        $this->propertyUpdated('Text', $value);
        $this->_data['Text'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getFolder()
    {
        return $this->_data['Folder'];
    }

    /**
     * @param string $value
     *
     * @return Note
     */
    public function setFolder($value)
    {
        $this->propertyUpdated('Folder', $value);
        $this->_data['Folder'] = $value;

        return $this;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDate()
    {
        return $this->_data['Date'];
    }

    /**
     * @param DateTimeInterface $value
     *
     * @return Note
     */
    public function setDate($value)
    {
        $this->propertyUpdated('Date', $value);
        $this->_data['Date'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->_data['CreatedBy'];
    }

    /**
     * @param string $value
     *
     * @return Note
     */
    public function setCreatedBy($value)
    {
        $this->propertyUpdated('CreatedBy', $value);
        $this->_data['CreatedBy'] = $value;

        return $this;
    }
}
