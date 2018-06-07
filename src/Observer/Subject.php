<?php

namespace Umbijani\Observer;

interface Subject
{
    public function attach(Observer $consignment);

    public function detach(Observer $consignment);

    public function notify();
}