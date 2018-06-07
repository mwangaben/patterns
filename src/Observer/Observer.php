<?php

namespace Umbijani\Observer;


interface Observer
{
   public function handle(Delivery $object);
}