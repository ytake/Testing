<?php

namespace App\Repositories;

use App\Entry;

class EntryRepository
{

    /** @var Entry */
    protected $entry;

    /**
     * @param Entry $entry
     */
    public function __construct(Entry $entry)
    {
        $this->entry = $entry;
    }

    /**
     * @param array $params
     * @return mixed
     * @throws \Exception
     */
    public function save(array $params)
    {
        if (!count($params)) {
            throw new \Exception;
        }
        return $this->entry->save($params);
    }

    /**
     * @param array $params
     * @return array
     */
    public function find(array $params = [])
    {
        if (!count($params)) {
            return [];
        }
    }

    /**
     * @param $argument1
     * @param $argument2
     * @return int
     */
    public function sum($argument1, $argument2)
    {
        return (int) $argument1 + (int) $argument2;
    }

    /**
     * @param $text
     * @return int
     */
    public function calc($text)
    {
        return (int) $text;
    }

    public function setAge($age)
    {
        if (0 === $age) {
            throw new \InvalidArgumentException();
        }
    }

    /**
     * @return \stdClass
     */
    public function getStdClass()
    {
        return new \stdClass;
    }

    public function getDetails($id)
    {
        return ['id' => $id, 'title' => 'testing', 'content' => 'hello phpspec!'];
    }
}
