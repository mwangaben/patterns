<?php

namespace Umbijani\Chains;


/**
 * Class Alarm
 * @package Umbijani\Chains
 */
class Alarm extends HomeAssistant
{

    /**
     * @param HomeStatus $status
     * @return string
     */
    public function check(HomeStatus $status)
    {
        if (! $status->alarms){
            return 'Alarms are not set';
        }

        return $this->next($status);
    }
}