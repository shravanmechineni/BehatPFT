<?php
namespace HCP;

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Utils\WebConnector;
/**
 * Created by PhpStorm.
 * User: shravanmechineni
 * Date: 24/11/2016
 * Time: 16:36
 */
class ReusableContext extends WebConnector implements Context, SnippetAcceptingContext
{

    /**
     * @Given I am reusable common
     */
    public function iAmReusableCommon()
    {
        print "reusablecommon";
    }


}