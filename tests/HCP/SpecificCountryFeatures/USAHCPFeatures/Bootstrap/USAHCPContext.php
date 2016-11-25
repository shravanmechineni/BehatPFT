<?php
namespace HCP\SpecificCountryFeatures\USAHCPFeatures\Bootstrap;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Utils\WebConnector;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class USAHCPContext extends WebConnector implements Context, SnippetAcceptingContext
{
    /**
     * @Given I am usa
     */
    public function iAmUsa()
    {
        print "usa";
    }

}
