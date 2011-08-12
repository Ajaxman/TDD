<?php
/**
 * Description of calculator
 *
 * @author Javier
 * 
 */

class Calculator {

    /**
     * @var $_result int 
     */ 
    private $_result;
    
    public function __construct()
    {
        
    }
    
    public function sum($a, $b)
    {
        $this->_result = $a + $b;        
    }
    
    public function susbtract($a,$b)
    {
        $this->_result = $a - $b; 
    }
    
    
    public function multiply($a,$b)
    {
        $this->_result = $a * $b; 
    }
    
    public function divide($a,$b)
    {
        $this->_result = $a / $b; 
    }
    
    public function getResult()
    {
        return (int) $this->_result;
    }
    
    
    
}

?>
