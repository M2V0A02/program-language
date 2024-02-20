<?php

class Token {
    public $type;
    public $text;
    public $pos;

    public function __construct(string $type, string $text, int $pos = 0) {
        $this->type = $type;
        $this->text = $text;
        $this->pos = $pos;
    }
}