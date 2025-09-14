<?php

namespace XeroPHP\Models\PracticeManager;

use XeroPHP\Remote;

/**
 * @property string ID
 * @property string Name
 * @property string Email
 * @property string Phone
 * @property string Mobile
 * @property string Address
 * @property string PayrollCode
 * @property string WebUrl
 */
class Staff extends Remote\Model
{
    public static function getResourceURI(): string
    {
        return 'staff.api/list';
    }

    public static function getRootNodeName(): string
    {
        return 'Staff';
    }

    public static function getGUIDProperty(): string
    {
        return 'UUID';
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
            Remote\Request::METHOD_POST,
            Remote\Request::METHOD_PUT,
            Remote\Request::METHOD_DELETE,
            Remote\Request::METHOD_GET,
        ];
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
            'UUID'        => [false, self::PROPERTY_TYPE_GUID, null, false, false], // New - only returned in 3.1 calls
            'ID'          => [false, self::PROPERTY_TYPE_STRING, null, false, false], // Legacy - only returned in 3.0 calls
            'Name'        => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'Email'       => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'Phone'       => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Mobile'      => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Address'     => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'PayrollCode' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'WebUrl'      => [false, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    public static function isPageable(): bool
    {
        return false;
    }

    public function getID(): int
    {
        return $this->_data['ID'];
    }

    public function getUUID(): string
    {
        return $this->_data['UUID'];
    }

    public function getName(): string
    {
        return $this->_data['Name'];
    }

    public function setName(string $value): self
    {
        $this->propertyUpdated('Name', $value);
        $this->_data['Name'] = $value;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->_data['Email'];
    }

    public function setEmail(string $value): self
    {
        $this->propertyUpdated('Email', $value);
        $this->_data['Email'] = $value;

        return $this;
    }

    public function getPhone(): string
    {
        return $this->_data['Phone'];
    }

    public function setPhone(string $value): self
    {
        $this->propertyUpdated('Phone', $value);
        $this->_data['Phone'] = $value;

        return $this;
    }

    public function getMobile(): string
    {
        return $this->_data['Mobile'];
    }

    public function setMobile(string $value): self
    {
        $this->propertyUpdated('Mobile', $value);
        $this->_data['Mobile'] = $value;

        return $this;
    }

    public function getAddress(): string
    {
        return $this->_data['Address'];
    }

    public function setAddress(string $value): self
    {
        $this->propertyUpdated('Address', $value);
        $this->_data['Address'] = $value;

        return $this;
    }

    public function getPayrollCode(): string
    {
        return $this->_data['PayrollCode'];
    }

    public function setPayrollCode(string $value): self
    {
        $this->propertyUpdated('PayrollCode', $value);
        $this->_data['PayrollCode'] = $value;

        return $this;
    }

    public function getWebUrl(): string
    {
        return $this->_data['WebUrl'];
    }

    public function setWebUrl(string $value): self
    {
        $this->propertyUpdated('WebUrl', $value);
        $this->_data['WebUrl'] = $value;

        return $this;
    }
}
