<?php

namespace Umbijani\Observer;

interface Delivery
{
    public function attach(Delivery $consignment);

    public function detach(Delivery $consignment);

    public function notify();
}