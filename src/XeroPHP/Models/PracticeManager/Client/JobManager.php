<?php

namespace XeroPHP\Models\PracticeManager\Client;

use XeroPHP\Models\PracticeManager\Model\IdAndNameModel;

class JobManager extends IdAndNameModel
{
    /**
     * Get the root node name.  Just the unqualified classname.
     */
    public static function getRootNodeName(): string
    {
        return 'JobManager';
    }
}