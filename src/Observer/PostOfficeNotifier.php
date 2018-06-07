<?php

namespace Umbijani\Observer;


class PostOfficeNotifier implements Observer
{
    protected $parcel;

    public function handle(Delivery $consignment)
    {
         $this->parcel = $consignment;
    }

    public function message()
    {
        return $this->parcel->message();
    }
}