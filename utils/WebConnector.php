<?php

namespace Utils;

use Behat\MinkExtension\Context\RawMinkContext;

/**
 * Created by PhpStorm.
 * User: shravanmechineni
 * Date: 24/11/2016
 * Time: 16:20
 */
class WebConnector extends RawMinkContext
{
    public $testData;

    public function __construct()
    {
        $this->testData = new TestData();
    }

    public function getValueFromOR($key)
    {
        $OR_iniarray = parse_ini_file(__DIR__ . "/../configs/OR.ini");
        return  $OR_iniarray[$key];
    }

    public function getValueFromConfig($key)
    {
        $Config_iniarray = parse_ini_file(__DIR__ . "/../configs/Config.ini");
        return  $Config_iniarray[$key];
    }

}