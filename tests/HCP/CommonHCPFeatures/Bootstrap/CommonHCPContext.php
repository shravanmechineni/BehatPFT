<?php
namespace HCP\CommonHCPFeatures\Bootstrap;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Utils\WebConnector;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class CommonHCPContext extends WebConnector implements Context, SnippetAcceptingContext
{
    /**
     * @Given I am common only
     */
    public function iAmCommonOnly()
    {
        print "common only";
    }

}
