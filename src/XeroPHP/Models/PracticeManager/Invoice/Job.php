<?php

namespace XeroPHP\Models\PracticeManager\Invoice;

use XeroPHP\Remote;

/**
 * @property int ID
 * @property string Name
 * @property string Description
 * @property string ClientOrderNumber
 * @property Task[] Tasks
 * @property Cost[] Costs
 */
class Job extends Remote\Model
{
    /**
     * Get the resource uri of the class (Jobs) etc.
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
        return 'Job';
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
            'ID'                => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'Name'              => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'Description'       => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'ClientOrderNumber' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Tasks'             => [false, self::PROPERTY_TYPE_OBJECT, 'PracticeManager\\Invoice\\Task', true, false],
            'Costs'             => [false, self::PROPERTY_TYPE_OBJECT, 'PracticeManager\\Invoice\\Cost', true, false],
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
     * @return string
     */
    public function getDescription()
    {
        return $this->_data['Description'];
    }

    /**
     * @param  string  $value
     *
     * @return self
     */
    public function setDescription($value)
    {
        $this->propertyUpdated('Description', $value);
        $this->_data['Description'] = $value;

        return $this;
    }

    /**
     * @return string
     */
    public function getClientOrderNumber()
    {
        return $this->_data['ClientOrderNumber'];
    }

    /**
     * @param  string  $value
     *
     * @return self
     */
    public function setClientOrderNumber($value)
    {
        $this->propertyUpdated('ClientOrderNumber', $value);
        $this->_data['ClientOrderNumber'] = $value;

        return $this;
    }

    /**
     * @return Task[]|Remote\Collection
     */
    public function getTasks()
    {
        return $this->_data['Tasks'];
    }

    /**
     * @param  Task  $value
     *
     * @return self
     */
    public function addTask(Task $value)
    {
        $this->propertyUpdated('Tasks', $value);
        if (!isset($this->_data['Tasks'])) {
            $this->_data['Tasks'] = new Remote\Collection();
        }
        $this->_data['Tasks'][] = $value;

        return $this;
    }

    /**
     * @return Cost[]|Remote\Collection
     */
    public function getCosts()
    {
        return $this->_data['Costs'];
    }

    /**
     * @param  Cost  $value
     *
     * @return self
     */
    public function addCost(Cost $value)
    {
        $this->propertyUpdated('Costs', $value);
        if (!isset($this->_data['Costs'])) {
            $this->_data['Costs'] = new Remote\Collection();
        }
        $this->_data['Costs'][] = $value;

        return $this;
    }
}
