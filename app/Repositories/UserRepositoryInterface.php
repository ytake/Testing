<?php
namespace App\Repositories;

/**
 * Interface UserRepositoryInterface
 * @package App\Repositories
 */
interface UserRepositoryInterface
{

    /**
     * @return array
     */
    public function all();

    /**
     * @param array $params
     * @return mixed
     */
    public function save(array $params);

}
