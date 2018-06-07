<?php

namespace Umbijani\Observer;


class Client implements Observer
{
    protected $parcel;
    protected $message;

    public function handle($object)
    {
        $this->parcel = $object;

        return $this->parcel;
    }

    public function message()
    {
        foreach($this->parcel as $item){
            $this->message = $item->message();
        }
        return $this->message;
    }
}