<?php

use App\Services\UserService;
use Illuminate\Database\Eloquent\Collection;

class UserServiceTest extends \TestCase
{
    /** @var UserService  */
    protected $service;
    public function setUp()
    {
        parent::setUp();
        $this->service = new UserService(new \StubUserRepository());
    }

    public function testGetUserRepository()
    {
        $this->assertInstanceOf(Collection::class, $this->service->getUsers());
    }
}

class StubUserRepository implements \App\Repositories\UserRepositoryInterface
{

    /**
     * @return array
     */
    public function all()
    {
        $user = factory('App\User')->make();
        return (new \Illuminate\Database\Eloquent\Collection())
            ->add($user);
    }

}
