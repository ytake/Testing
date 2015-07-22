<?php

use Behat\Behat\Tester\Exception\PendingException;
use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class LaravelContext extends MinkContext  implements Context, SnippetAcceptingContext
{

    /** @var string */
    protected $uri;

    /** @var Illuminate\Http\Response  */
    protected $response;

    /**
     * @Given :arg1 へアクセスする
     */
    public function stepDefinition1($uri)
    {
        $this->uri = $uri;
        $this->visit($uri);
    }

    /**
     * @Given GETリクエストでURLパラメータ :arg1 に :arg2 を利用してアクセスした場合
     */
    public function getUrlVZhi($message, $value)
    {
        $request = \Request::create($this->uri, 'GET', [$message => $value]);
        $this->response = \App::make('Illuminate\Contracts\Http\Kernel')->handle($request);
    }

    /**
     * @Then 画面上に :arg1 と表示される
     */
    public function tangXiaoNaiTian($arg1)
    {
        \PHPUnit_Framework_Assert::assertSame($this->response->content(), $arg1);
    }

    /**
     * @Given GETリクエストでURLパラメータを利用せずにアクセスした場合
     */
    public function getUrlVZhi2()
    {
        $request = \Request::create($this->uri, 'GET');
        $response = \App::make('Illuminate\Contracts\Http\Kernel')->handle($request);
        \PHPUnit_Framework_Assert::assertSame($response->content(), 'Laravel');
    }
}
