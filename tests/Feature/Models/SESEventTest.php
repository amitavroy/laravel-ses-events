<?php

namespace Narwanimonish\SESEvents\Tests\Feature\Models;

use Narwanimonish\SESEvents\Models\SESEvent;
use Narwanimonish\SESEvents\Tests\TestCase;

class SESEventTest extends TestCase
{
    /** @test */
    public function it_can_create_event_record()
    {
        factory(SESEvent::class, 10)->create()->each(function ($event) {
            $event->save();
        });

        $this->assertDatabaseCount('ses_events', 10);
    }
}