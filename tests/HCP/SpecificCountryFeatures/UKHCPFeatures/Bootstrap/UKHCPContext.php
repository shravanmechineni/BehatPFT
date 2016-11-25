<?php
namespace HCP\SpecificCountryFeatures\UKHCPFeatures\Bootstrap;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Utils\WebConnector;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class UKHCPContext extends WebConnector implements Context, SnippetAcceptingContext
{

    /**
     * @Given I am uk
     */
    public function iAmUk()
    {
        print "uk";
    }

}
