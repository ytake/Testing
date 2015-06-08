<?php

class DummyTest extends TestCase
{

    public function testDummy()
    {
        $user = factory('App\User')->make();
        $user->toArray();
    }

    public function testDummyFor4()
    {
        factory('App\User', 'guest', 4)->make();
    }

    public function testDummyNameSpecified()
    {
        factory('App\User')->make(['name' => 'Laravel5']);
    }

}