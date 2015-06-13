<?php
namespace App\Services;

use App\Repositories\UserRepositoryInterface;

/**
 * Class UserService
 * @package App\Services
 */
class UserService
{

    /** @var UserRepositoryInterface  */
    protected $user;

    /**
     * @param UserRepositoryInterface $user
     */
    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function getUsers()
    {
        return $this->user->all();
    }

}
