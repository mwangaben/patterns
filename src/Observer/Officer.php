<?php

namespace Umbijani\Observer;


class Officer implements Observer
{
   protected $parcel;
   protected $message;

    /**
     * @param $consignment
     * @return mixed
     */
    public function handle($consignment)
    {
         $this->parcel = $consignment;
         return $this->parcel;
    }

    /**
     * @return mixed
     */
    public function message()
    {
        foreach($this->parcel as $parcel){
            $this->message =  $parcel->message();
        }
        return $this->message;
    }
}