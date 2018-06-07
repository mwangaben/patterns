<?php

namespace Umbijani\Observer;


class Parcel implements Consignment, Observer
{
    private $parcel;

    public function handle(Delivery $delivery)
    {
        $this->parcel = $delivery;
    }

    public function message()
    {
        return 'Your parcel has arrived';
    }
}