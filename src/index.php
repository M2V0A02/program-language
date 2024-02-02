<?php

require_once dirname(dirname(__FILE__)) . '/src/Lexer.php';
require_once dirname(dirname(__FILE__)) . '/src/Parser.php';
require_once dirname(dirname(__FILE__)) . '/src/Token.php';
require_once dirname(dirname(__FILE__)) . '/src/TokenType.php';

$code = "пер РАВНО 1 ПЛЮС 2;";
$lexer = (new Lexer($code));
$tokens = $lexer->lexAnalysis();
var_dump($tokens);