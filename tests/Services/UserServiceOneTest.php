<?php

use App\Services\UserServiceOne;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserServiceOneTest extends \TestCase
{

    use DatabaseMigrations;

    /** @var UserServiceOne  */
    protected $service;

    public function setUp()
    {
        parent::setUp();
        $this->service = new UserServiceOne;
    }

    public function testDatabaseDependencyUsers()
    {
        $this->runDatabaseMigrations();
        factory('App\User')->create();
        $this->assertInstanceOf(Collection::class, $this->service->getUsers());
        // その他のテストコード
    }
}
