<?php

// CalculatorTest.php
use PHPUnit\Framework\TestCase;

require_once 'Calculgit ator.php';

class CalculatorTest extends TestCase {
    public function testAdd() {
        $calculator = new Calculator();
        $result = $calculator->add(2, 3);
        $this->assertEquals(5, $result);
    }

    public function testSubtract() {
        $calculator = new Calculator();
        $result = $calculator->subtract(5, 3);
        $this->assertEquals(2, $result);
    }

    public function testAddNegativeNumbers() {
        $calculator = new Calculator();
        $result = $calculator->add(-2, -3);
        $this->assertEquals(-5, $result);
    }
}
