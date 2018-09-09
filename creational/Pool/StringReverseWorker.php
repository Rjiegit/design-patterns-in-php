<?php

class StringReverseWorker
{
    private $createdAt;

    public function __contruct()
    {
        $this->createdAt = new \DateTime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}
