<?php

namespace Umbijani\Observer;

use function spl_object_hash;

class PostOffice implements Subject
{
    private $parcels = [];
    private $observers = [];

    /**
     * @param Observer $observer
     * @return array
     * @internal param Observer $parcel
     */
    public function attach(Observer $observer)
    {
        $key = spl_object_hash($observer);
        $this->observers[$key] = $observer;

        return $this->observers;
    }


    /**
     * @param Observer $observer
     * @return array
     */
    public function detach(Observer $observer)
    {
        $key = spl_object_hash($observer);
        unset($this->observers[$key]);

        return $this->observers;
    }

    /**
     * @return array
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->handle($this->parcels);
        }

    }

    public function receive($parcel)
    {
        $this->parcels[] = $parcel;

        return $this->notify();
    }
    

}