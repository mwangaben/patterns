<?php

namespace Umbijani\Chains;


/**
 * Class HomeAssistant
 * @package Umbijani\Chains
 */
abstract class HomeAssistant
{
    /**
     * @var 
     */
    protected $assistant;

    /**
     * @param HomeStatus $status
     * @return mixed
     */
    abstract public function check(HomeStatus $status);

    /**
     * @param HomeAssistant $assistant
     * @return HomeAssistant
     */
    public function succeededWith(HomeAssistant $assistant)
    {
       return  $this->assistant = $assistant;
    }

    /**
     * @param $status
     * @return mixed
     */
    protected function next($status)
    {
        if ($this->assistant) {
           return  $this->assistant->check($status);
        }


    }
}