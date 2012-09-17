<?php
namespace Calculation;


class StringCalculatorTest extends \PHPUnit_Framework_TestCase{
    private $calculator;

    public function setUp(){
        $this->calculator = new StringCalculator();
    }

    public function testFirstSteps(){
        $this->assertEquals(1, 1);
        $this->assertContains('one', array('two', 'one'));

        $dateTime = new \DateTime();
        $d2 = $dateTime;
        $this->assertSame($d2, $dateTime);
    }


    // ""
    public function testAddShouldReturnZeroIfEmptyStringProvided(){
        $result = $this->calculator->add("");

        $this->assertEquals(0, $result);
    }

    // single digit (2)
    public function testAddShouldReturnNumberPassedInIfOneNumberProvided(){
        $result = $this->calculator->add("2");

        $this->assertEquals(2, $result);
    }


    // multiple digits (1,2)
    public function testAddShouldReturnSumOfTwoNumbersPassedIn(){
        $result = $this->calculator->add("3,2");

        $this->assertEquals(5, $result);
    }

    public function testShouldReturnSumOfAllNumbersPassedIn(){
        $result = $this->calculator->add("3,2,4,2");

        $this->assertEquals(11, $result);
    }
    public function testShouldHandleNewLinesAsDelimiters(){
        $result = $this->calculator->add("1\n2,3");

        $this->assertEquals(6, $result);
    }
    public function testShouldHandleOptionalDelimiterAtBeginningOfString(){
        $result = $this->calculator->add("//;\n1;3;4");
        
        $this->assertEquals(8, $result);
    }
    

    
}

