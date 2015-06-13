<?php
namespace App\Services;

use App\User;

/**
 * Class UserService
 * @package App\Services
 */
class UserServiceTwo
{
    /** @var User */
    protected $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getUsers()
    {
        return $this->user->all();
    }

}
