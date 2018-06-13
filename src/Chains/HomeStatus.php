<?php

namespace Umbijani\Chains;



class HomeStatus
{

    /**
     * @var bool|mixed
     */
    public $doors;
    /**
     * @var bool|mixed
     */
    public $lights;
    /**
     * @var bool|mixed
     */
    public $alarms;

    /**
     * HomeStatus constructor.
     * @param array $status
     */
    public function __construct(array $status)
    {
        $this->doors = $status['doors'] ?? true;
        $this->lights = $status['lights'] ?? true;
        $this->alarms = $status['alarms'] ?? true;
    }
}