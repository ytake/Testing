<?php

use Behat\Behat\Context\Context;
use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext  implements Context, SnippetAcceptingContext
{

    /** @var string  */
    protected $file;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        $this->file = __DIR__ . '/../../config';
    }

    /**
     * @Given /^configディレクトリに移動$/
     */
    public function configZhe()
    {
        PHPUnit_Framework_Assert::assertFileExists($this->file);
    }

    /**
     * @Then /^配列でファイルが取得できること "([^"]*)"$/
     */
    public function kuai($arg1)
    {
        PHPUnit_Framework_Assert::assertInternalType($arg1, scandir($this->file));
    }

}
