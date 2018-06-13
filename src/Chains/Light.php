<?php

namespace Umbijani\Chains;


class Light extends HomeAssistant
{

    /**
     * @param HomeStatus $status
     * @return string
     */
    public function check(HomeStatus $status)
    {
        if (! $status->lights){
            return 'Lights are not off';
        }
        return  $this->next($status);
    }
}