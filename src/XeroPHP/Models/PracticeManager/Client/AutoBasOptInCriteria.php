<?php

namespace XeroPHP\Models\PracticeManager\Client;

use XeroPHP\Remote;

class AutoBasOptInCriteria extends Remote\Model
{
    /**
     * Get the root node name.  Just the unqualified classname.
     */
    public static function getRootNodeName(): string
    {
        return 'AutoBasOptInCriteria';
    }

    /**
     * Get the resource uri of the class (AccountManagers) etc.
     */
    public static function getResourceURI(): string
    {
        return '';
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
            'Annually'  => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Monthly'   => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Quarterly' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Opt-Out'   => [false, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    public static function isPageable(): bool
    {
        return false;
    }
}
