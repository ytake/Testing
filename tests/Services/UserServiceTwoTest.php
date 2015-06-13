<?php

use App\Services\UserServiceTwo;
use Illuminate\Database\Eloquent\Collection;

class UserServiceTwoTest extends \TestCase
{
    /** @var UserServiceTwo  */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $user = factory('App\User')->make();
        // Eloquentを継承した\App\Userクラスをモックします
        $mock = Mockery::mock(new \App\User())->makePartial();
        $mock->shouldReceive('all')->andReturn(
            (new Collection())->add($user)
        );
        $this->service = new UserServiceTwo($mock);
    }

    public function testGetUsers()
    {
        $this->assertInstanceOf(Collection::class, $this->service->getUsers());
    }

}