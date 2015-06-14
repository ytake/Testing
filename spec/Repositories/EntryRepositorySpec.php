<?php

namespace spec\App\Repositories;

use App\Entry;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class EntryRepositorySpec extends ObjectBehavior
{

    function let(Entry $entry)
    {
        $this->beConstructedWith($entry);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('App\Repositories\EntryRepository');
    }

    function it_returns_the_result_of_boolean(Entry $entry)
    {
        $params = ['title' => 'testing', 'content' => 'hello phpspec!'];
        $entry->save($params)->shouldBeCalled()->willReturn(true);
        $this->save($params)->shouldBeBool();
    }

    function it_throws_an_exception_when_arguments_are_invalid()
    {
        $this->shouldThrow('\Exception')->duringSave([]);
    }

}
