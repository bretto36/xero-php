<?php

namespace XeroPHP\Models\PracticeManager\Client;

use XeroPHP\Models\PracticeManager\Model\IdAndNameModel;

class BillingClient extends IdAndNameModel
{
    /**
     * Get the root node name.  Just the unqualified classname.
     */
    public static function getRootNodeName(): string
    {
        return 'BillingClient';
    }
}