<?php

require_once dirname(dirname(__FILE__)) . '/src/Lexer.php';
require_once dirname(dirname(__FILE__)) . '/src/Parser.php';
require_once dirname(dirname(__FILE__)) . '/src/Token.php';
require_once dirname(dirname(__FILE__)) . '/src/TokenType.php';
require_once dirname(dirname(__FILE__)) . '/src/AST/ExpressionNode.php';

$code = "2 ПЛЮС 200;
1 МИНУС 1;
1 МИНУС 100;";
$lexer = (new Lexer($code));
$tokens = $lexer->lexAnalysis();
$parser = new Parser($tokens);
$parser->execute();