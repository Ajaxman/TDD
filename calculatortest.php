<?php

require_once dirname(__FILE__) . '/calculator.php';
/**
 * Description of calculatortest
 *
 *  Este es mi primer test, pueden comentar sobre el
 * @author Ajaxman
 * 
 */
class Calculatortest extends PHPUnit_Framework_TestCase {
    
    public $calculator;
    
    public function setUp() {
        $this->calculator =  new Calculator;
    }
    
    public function testSum()
    {
        $this->calculator->sum(0,0);
        $this->assertEquals(0, $this->calculator->getResult());
        
        $this->calculator->sum(0,1);                    
        $this->assertEquals(1, $this->calculator->getResult());
        
        $this->calculator->sum(0,1);                    
        $this->assertEquals(1, $this->calculator->getResult());
        
        
        $this->calculator->sum(1,1);
        $this->assertEquals(2, $this->calculator->getResult());
    }
    
    public function testsusbstrac()
    {
        $this->calculator->susbtract(0,0);                    
        $this->assertEquals(0, $this->calculator->getResult());
        
        $this->calculator->susbtract(0,1);                    
        $this->assertEquals(-1, $this->calculator->getResult());
        
        $this->calculator->susbtract(1,0);
        $this->assertEquals(1, $this->calculator->getResult());
        
        $this->calculator->susbtract(1,1);        
        $this->assertEquals(0, $this->calculator->getResult());        
    }
    
    public function testmultiply()
    {
        $this->calculator->multiply(1,1);                    
        $this->assertEquals(1, $this->calculator->getResult());
        
        $this->calculator->multiply(0,1);                    
        $this->assertEquals(0, $this->calculator->getResult());
        
        $this->calculator->multiply(1,0);
        $this->assertEquals(0, $this->calculator->getResult());
        
        $this->calculator->multiply(1,1);        
        $this->assertEquals(1, $this->calculator->getResult());        
    }    
    
    public function testdivide()
    {
        $this->calculator->divide(1,1);                    
        $this->assertEquals(1, $this->calculator->getResult());
        
        $this->calculator->divide(0,1);                    
        $this->assertEquals(0, $this->calculator->getResult());
        
        $this->calculator->divide(0,1);
        $this->assertEquals(0, $this->calculator->getResult());
        
        $this->calculator->divide(1,1);        
        $this->assertEquals(1, $this->calculator->getResult());        
    }    
    
    public function testGetResultByDefaultIsEmpty()
    {
        $this->assertEquals(0, $this->calculator->getResult());
    }
    
    
}

?>
