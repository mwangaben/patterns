<?php

use PHPUnit\Framework\TestCase;
use Umbijani\Observer\Client;
use Umbijani\Observer\PostOffice;
use Umbijani\Observer\Officer;
use Umbijani\Observer\Parcel;

class PostOfficeNotifierTest extends TestCase
{
    /** @test * */
    public function it_notifies_the_client_when_they_have_new_parcel()
    {
        $office = new PostOffice;
        $officer = new Officer;
        $client = new Client;
        $office->attach($officer);
        $office->attach($client);
        $office->receive(new Parcel);

        $this->assertContains('A parcel id number 2pz0 has arrived', $officer->message());
        $this->assertContains('A parcel id number 2pz0 has arrived', $client->message());
    }
}
