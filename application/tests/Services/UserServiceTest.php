<?php

use App\Services\UserService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserServiceTest extends \TestCase
{

    use DatabaseMigrations;

    /** @var UserService  */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new UserService;
    }

    public function testDatabaseDependencyUsers()
    {
        $this->runDatabaseMigrations();
        factory('App\User')->create();
        $this->assertInstanceOf(Collection::class, $this->service->getUsers());
        // その他のテストコード
    }
}
