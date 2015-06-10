<?php
namespace App\Http\Controllers;

use App\Repositories\UserRepositoryInterface;

/**
 * Class UserController
 * @package App\Http\Controllers
 */
class UserController extends Controller
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
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('user.index', ['users' => $this->user->all()]);
    }

}
