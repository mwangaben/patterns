<?php

namespace Umbijani\Chains;


/**
 * Class Door
 * @package Umbijani\Chains
 */
class Door extends HomeAssistant
{

    /**
     * @param HomeStatus $status
     * @return string
     */
    public function check(HomeStatus $status)
    {
        if (! $status->doors) {
            return 'Doors are not locked';
        }

         return $this->next($status);
    }

}