<?php

require dirname(dirname(__FILE__)) . '/src/TokenType.php';

class Lexer {
    public string $code;
    public string $tempCode;
    public int $pos;
    public array $tokenList;

    public function __construct(string $code)
    {
        $this->code = $code;
        $this->tokenList = [];
    }

    public function lexAnalysis() {
        $tempCode = $this->code;
        while(mb_strlen($tempCode, 'UTF-8') > 0) {
            array_push($this->tokenList, $this->nextToken($tempCode));
        }

        return $this->tokenList;
    }

    public function nextToken(&$tempCode): Token {
        foreach((new TokenTypeList())->tokenTypes as $tokenType) {
            preg_match("/^{$tokenType->regex}/u", $tempCode, $match);
            if (count($match) > 0 && mb_strlen($match[0], 'UTF-8') > 0) {
                $tempCode = mb_substr($tempCode, mb_strlen($match[0], 'UTF-8'), null, 'UTF-8');
                return new Token($tokenType->name, $match[0]);
            }
        }
        
        return throw new Exception("Нет подходящего типа токена");
    }
}