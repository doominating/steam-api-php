<?php

namespace Steam\Command\Version;

use Steam\Command\CommandInterface;

class GetServerVersion implements CommandInterface
{
    /**
     * @var int
     */
    protected $appId;

    /**
     * @param int $appId
     */
    public function __construct($appId)
    {
        $this->appId = $appId;
    }

    public function getInterface()
    {
        return 'IGCVersion_' . $this->appId;
    }

    public function getMethod()
    {
        return 'GetServerVersion';
    }

    public function getVersion()
    {
        return 'v1';
    }

    public function getRequestMethod()
    {
        return 'GET';
    }

    public function getParams()
    {
        return [];
    }
} 