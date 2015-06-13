<?php
namespace App\Repositories;

/**
 * Class BookRepository
 * @package App\Repositories
 */
class BookRepository
{

    /** @var array $books */
    protected $books = [
        [
            'id' => 1,
            'title' => 'Laravelリファレンス'
        ]
    ];

    /**
     * @return array
     */
    public function getReferenceBooks()
    {
        return $this->books;
    }

    /**
     * @param null $id
     * @return null
     * @throws \Exception
     */
    public function getReferenceBook($id = null)
    {
        if(is_null($id)) {
            throw new \Exception;
        }
        foreach($this->books as $book) {
            if($book['id'] === $id) {
                return $book;
            }
        }
        return null;
    }

    /**
     * @param array $params
     * @return void
     * @throws \Exception
     */
    public function setReferenceBook(array $params)
    {
        if (!isset($params['id'], $params['title'])) {
            throw new \Exception;
        }
        $this->books[] = $params;
    }

    /**
     * @return string
     */
    protected function getText()
    {
        return 'Laravel5';
    }

}
