<?php

class BookRepositoryTest extends \PHPUnit_Framework_TestCase
{
    /** @var \App\Repositories\BookRepository */
    protected $repository;

    protected function setUp()
    {
        $this->repository = new \App\Repositories\BookRepository;
    }

    public function testReturnResultBasic()
    {
        $this->assertInternalType('array', $this->repository->getReferenceBooks());
        $this->assertSame(1, count($this->repository->getReferenceBooks()));
    }

    public function testReturnResult()
    {
        $this->assertInternalType('array', $this->repository->getReferenceBooks());
        foreach($this->repository->getReferenceBooks() as $book) {
            $this->assertArrayHasKey('title', $book);
        }
    }

    public function testReturnBook()
    {
        $result = $this->repository->getReferenceBook(1);
        $this->assertInternalType('array', $result);
        $this->assertArrayHasKey('title', $result);
        $this->assertArrayHasKey('id', $result);
        $this->assertNull($this->repository->getReferenceBook(10));
    }

    /**
     * @test
     */
    public function 値の返却をテスト()
    {

    }

    /**
     * @expectedException \Exception
     */
    public function testReturnBookException()
    {
        $this->repository->getReferenceBook();
    }
}
