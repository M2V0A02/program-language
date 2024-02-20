<?php

class ExpressionNode {
    private $firstOp;
    private $operand;
    private $secondOp;

    public function __construct($firstOp, $operand, $secondOp) {
        $this->firstOp = $firstOp;
        $this->operand = $operand;
        $this->secondOp = $secondOp;
    }

    public function execute() {
        if ($this->operand === 'МИНУС') {
            var_dump($this->firstOp - $this->secondOp);
        } else {
            var_dump($this->firstOp + $this->secondOp);
        }
    }
}