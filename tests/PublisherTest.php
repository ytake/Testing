<?php

class PublisherTest extends \TestCase
{

    protected $log;

    public function setUp()
    {
        parent::setUp();
        $this->log = base_path('/tests/tmp/broadcast.log');
        \Log::useFiles($this->log);
    }

    public function testDown()
    {
        parent::tearDown();
        $this->beforeApplicationDestroyed(function () {
            \File::delete($this->log);
        });
        \Mockery::close();
    }

    public function testBroadcast()
    {
        $mock = \Mockery::mock('App\Publisher[channel]', [
            new \Illuminate\Broadcasting\BroadcastManager($this->app)
        ]);
        $mock->shouldReceive('channel')->once()->andReturn('laravel5.1');
        $mock->broadcast([]);

        $this->assertFileExists($this->log);
    }

    public function testBroadcastPartial()
    {
        $mock = \Mockery::mock(new \App\Publisher(
            new \Illuminate\Broadcasting\BroadcastManager($this->app)
        ))->makePartial();
        $mock->shouldReceive('channel')->andReturn('laravel5.1');
        $mock->broadcast([]);
        $this->assertFileExists($this->log);
    }

}
