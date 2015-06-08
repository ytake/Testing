<?php

class PublisherTest extends \TestCase
{

    public function testBroadcast()
    {
        $mock = \Mockery::mock('App\Publisher[channel]', [
            new \Illuminate\Broadcasting\BroadcastManager($this->app)
        ]);
        $mock->shouldReceive('channel')
            ->once()->andReturn('laravel5.1');
        $mock->broadcast();
    }

    public function testBroadcastPartial()
    {
        $mock = \Mockery::mock('App\Publisher')->makePartial();
        $mock->shouldReceive('channel')
            ->once()
            ->andReturn('laravel5.1');
        $mock->broadcast();
    }
}
