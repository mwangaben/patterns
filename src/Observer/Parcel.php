<?php

namespace Umbijani\Observer;

class Parcel
{
    /**
     * @return string
     */
    public function message()
    {
        return $this->details();
    }

    /**
     * @return string
     */
    public function details()
    {
        return 'A parcel id number 2pz0 has arrived';
    }
}