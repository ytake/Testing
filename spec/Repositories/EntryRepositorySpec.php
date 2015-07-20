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

    function it_returns_row_record_array()
    {
        $this->find([])->shouldReturn([]);
    }

    function it_calculates_the_sum_of_two_addends()
    {
        $this->sum(1, 2)->shouldBe(3);
    }

    function it_returns_the_value_of_a_string()
    {
        $this->calc('5')->shouldBeLike('5');
    }

    function it_throws_an_invalid_exception_when_arguments_are_invalid()
    {
        $this->shouldThrow('\InvalidArgumentException')->during('setAge', array(0));
    }

    function it_should_be_a_instance()
    {
        $this->shouldImplement('App\Repositories\EntryRepository');
    }

    function it_should_return_get_std_instance()
    {
        $this->getStdClass()->shouldReturnAnInstanceOf('\stdClass');
    }

    function it_returns_the_result()
    {
        $result = $this->getDetails(1);
        $result['title']->shouldBeString();
        $result['id']->shouldBeInteger();
        $result['content']->shouldBeString();
    }
}
