<?php

use PHPUnit\Framework\TestCase;
use Umbijani\Chains\Alarm;
use Umbijani\Chains\Door;
use Umbijani\Chains\HomeStatus;
use Umbijani\Chains\Light;

class HomeAssistantTest  extends TestCase
{
    /** @test * */
    public function it_checks_whether_the_doors_are_locked()
    {
        $status = new HomeStatus(['doors' => false]);

        $doors = new Door;
        $lights = new Light;
        $doors->succeededWith($lights);
        $this->assertContains('Doors are not locked', $doors->check($status));
    }

    /** @test * */
    public function it_checks_whether_the_lights_are_off()
    {
        $status = new HomeStatus(['lights' => false]);

        $doors = new Door;
        $lights = new Light;
        $doors->succeededWith($lights);
        $this->assertContains('Lights are not off', $doors->check($status));

    }

    /** @test **/
    public function it_checks_whether_the_alarms_are_on(){
        $status = new HomeStatus(['alarms' => false]);

        $doors = new Door;
        $lights = new Light;
        $alarms = new Alarm;
        $doors->succeededWith($lights);
        $lights->succeededWith($alarms);
        $this->assertContains('Alarms are not set', $doors->check($status));

    }

}