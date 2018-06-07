<?php

use PHPUnit\Framework\TestCase;
use Umbijani\Observer\Parcel;
use Umbijani\Observer\ParcelDelivery;
use Umbijani\Observer\PostOfficeNotifier;

class PostOfficeNotifierTest extends TestCase
{

    /** @test * */
    public function it_notifies_the_client_when_they_have_new_parcel()
    {
        $delivery = new ParcelDelivery;
        $delivery->attach(new Parcel);
        $delivery->notify();

        $post =  new PostOfficeNotifier;
        dd($post);
        $this->assertContains('A client was notified', $post->message());

    }
}