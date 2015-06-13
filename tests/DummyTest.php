<?php

class DummyTest extends TestCase
{

    public function testDummy()
    {
        $user = factory('App\User')->make();
        $this->assertInternalType('array', $user->toArray());
    }

    public function testDummyFor4()
    {
        $user = factory('App\User', 'guest', 4)->make();
        $this->assertSame(4, $user->count());
    }

    public function testDummyNameSpecified()
    {
        $user = factory('App\User')->make(['name' => 'Laravel5']);
        $this->assertSame('Laravel5', $user->name);
    }

}