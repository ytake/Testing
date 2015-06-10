<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;

class UserControllerTest extends \TestCase
{
    use WithoutMiddleware;

    public function testIndex()
    {
        $this->disableMiddlewareForAllTests();
        $this->app->bind(
            \App\Repositories\UserRepositoryInterface::class,
            \StubUser::class
        );
        $this->visit('user')->see('No users', true);
    }

}

class StubUser implements \App\Repositories\UserRepositoryInterface
{

    /**
     * @return array
     */
    public function all()
    {
        return factory('App\User', 5)->make();
    }

}
