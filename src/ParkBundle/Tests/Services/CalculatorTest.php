<?php

namespace ParkBundle\Tests\Services;

use ParkBundle\Services\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testAdd()
        {
            $calc = new Calculator();
            $result = $calc->calcul(60, 12);

            // assert that your calculator added the numbers correctly!
            $this->assertEquals(42, $result);
        }
}