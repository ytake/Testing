<?php 
$I = new FunctionalTester($scenario);
\App::bind(
    \App\Infrastructures\Messageable::class,
    TestingMessage::class
);
$I->wantTo('perform dependency injection');
$I->amOnPage('tester/functional');
$I->see('testing');


class TestingMessage implements \App\Infrastructures\Messageable
{
    /**
     * @return mixed
     */
    public function getMessage()
    {
        return 'testing';
    }
}
