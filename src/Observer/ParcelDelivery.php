<?php

namespace Umbijani\Observer;

use function spl_object_hash;

class ParcelDelivery implements Delivery
{
    private $consignments = [];

    /**
     * @param Consignment|Delivery $consignment
     * @return array
     */
    public function attach(Observer $consignment)
    {
        $key = spl_object_hash($consignment);
        $this->consignments[$key] = $consignment;

        return $this->consignments;
    }


    /**
     * @param Consignment|Delivery $consignment
     * @return array
     */
    public function detach(dELIVERY $consignment)
    {
        $key = spl_object_hash($consignment);
        unset($this->consignments[$key]);

        return $this->consignments;
    }

    public function notify()
    {
        $consignme= [];
        foreach ($this->consignments as $consignment) {
            $consignme[] = $consignment->handle($this);
        }
        return $consignme;
    }
}