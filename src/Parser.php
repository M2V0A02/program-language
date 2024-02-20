<?php

class Parser {
    private $tokens;
    private $tree;

    public function __construct(array $tokens) {
        $this->tokens = $tokens;
        $this->clear();
    }

    private function clear() {
        $this->tokens = array_filter($this->tokens, function($token) {
            return $token->type !== 'TIMES' && $token->type !== 'SEMICOLON';
        });
    }

    public function getTokens() {
        return $this->tokens;
    }

    public function getTree() {
        $tokens = $this->getTokens();
        while (count($tokens)) {
            $firstOp = array_shift($tokens)->text;
            $operand = array_shift($tokens)->text;
            $secondOp = array_shift($tokens)->text;
            $this->tree[] = new ExpressionNode($firstOp, $operand, $secondOp);
        }
    }

    public function execute() {
        $this->getTree();
        $this->executeTree();
    }

    public function executeTree() {
        foreach ($this->tree as $node) {
            $node->execute();
        }
    }
}