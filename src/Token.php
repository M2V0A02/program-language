<?php

class Token {
    public string $type;
    public string $text;
    public int $pos;

    public function __construct(string $type, string $text, int $pos) {
        $this->type = $type;
        $this->text = $text;
        $this->pos = $pos;
    }
}