<?php

class TokenType {
    public string $name;
    public string $regex;


    public function __construct(string $name, string $regex) {
        $this->name = $name;
        $this->regex = $regex;
    }

}

class TokenTypeList {
    public array $tokenTypes;

    public function __construct() {
        $this->tokenTypes = [
            'NUMBER' => new TokenType('NUMBER', '[0-9]*'),
            'VARIABLE' => new TokenType('PLUS', '[а-я]*'),
            'SEMICOLON' => new TokenType('SEMICOLON', ';'),
            'SPACE' => new TokenType('TIMES', '[\\n\\t\\r ]'),
            'ASSIGN' => new TokenType('DIVIDE', 'РАВНО'),
            'LOG' => new TokenType('LPAREN', 'ЛОГ'),
            'PLUS' => new TokenType('PLUS', 'ПЛЮС'),
            'MINUS' => new TokenType('MINUS', 'МИНУС')
        ];

        return $this->tokenTypes;
    }

}