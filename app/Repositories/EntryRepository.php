<?php

namespace App\Repositories;

use App\Entry;

class EntryRepository
{

    /** @var Entry  */
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
        if(!count($params)) {
            throw new \Exception;
        }
        return $this->entry->save($params);
    }

}
