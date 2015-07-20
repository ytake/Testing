<?php

class DummyTest extends TestCase
{

    public function testDummy()
    {
        $user = factory(\App\User::class)->make();
        $this->assertInternalType('array', $user->toArray());
    }

    public function testDummyFor4()
    {
        $user = factory(\App\User::class, 'guest', 4)->make();
        $this->assertSame(4, $user->count());
    }

    public function testDummyNameSpecified()
    {
        $user = factory(\App\User::class)->make(['name' => 'Laravel5']);
        $this->assertSame('Laravel5', $user->name);
    }

}
