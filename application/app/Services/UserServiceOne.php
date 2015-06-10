<?php
namespace App\Services;

use App\User;

/**
 * Class UserService
 * @package App\Services
 */
class UserServiceOne
{

    /**
     * 1). データベースに依存したテストが難しいコード例
     * @return mixed
     */
    public function getUsers()
    {
        // データベース接続している状態でなければテストができません
        return User::all();
    }

}
