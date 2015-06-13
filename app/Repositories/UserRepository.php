<?php
namespace App\Repositories;

use App\User;

/**
 * Class UserRepository
 * @package App\Repositories
 */
class UserRepository implements UserRepositoryInterface
{

    /** @var User  */
    protected $eloquent;

    /**
     * @param User $eloquent
     */
    public function __construct(User $eloquent)
    {
        $this->eloquent = $eloquent;
    }

    /**
     * @return array
     */
    public function all()
    {
        return $this->eloquent->all();
    }

}
