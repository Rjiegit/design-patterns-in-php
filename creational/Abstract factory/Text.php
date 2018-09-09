<?php

abstract class Text
{
    private $text;

    public function __contruct(string $text)
    {
        $this->text = $text;
    }
}