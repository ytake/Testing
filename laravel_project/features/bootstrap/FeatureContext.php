<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

//
// Require 3rd-party libraries here:
//
//   require_once 'PHPUnit/Autoload.php';
//   require_once 'PHPUnit/Framework/Assert/Functions.php';
//

/**
 * Features context.
 */
class FeatureContext extends BehatContext
{
    /** @var string */
    protected $file;

    /**
     * Initializes context.
     * Every scenario gets its own context object.
     *
     * @param array $parameters context parameters (set them up through behat.yml)
     */
    public function __construct(array $parameters)
    {
        // Initialize your context here
        $this->file = __DIR__ . '/../../../config';
    }

    /**
     * @Given /^configディレクトリに移動$/
     */
    public function configZhe()
    {

        PHPUnit_Framework_Assert::assertFileExists($this->file);
    }

    /**
     * @Given /^app\.phpファイルが存在している$/
     */
    public function appPhpNano()
    {
        PHPUnit_Framework_Assert::assertFileExists($this->file . '/app.php');
    }

    /**
     * @Given /^auth\.phpファイルが存在している$/
     */
    public function authPhpNano()
    {
        PHPUnit_Framework_Assert::assertFileExists($this->file . '/auth.php');
    }

    /**
     * @Then /^配列でファイルが取得できること "([^"]*)"$/
     */
    public function kuai($arg1)
    {
        PHPUnit_Framework_Assert::assertInternalType($arg1, scandir($this->file));
    }

}
