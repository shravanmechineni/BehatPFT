<?php
namespace HCP\SpecificCountryFeatures\BrazilHCPFeatures\Bootstrap;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Utils\WebConnector;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
class BrazilHCPContext extends WebConnector implements Context, SnippetAcceptingContext
{

    /**
     * @Given I am brazil
     */
    public function iAmBrazil()
    {
        print "brazil";
    }

}
