<?php

namespace Friendsoft\Parser;

class NameParser {

    private $fallbackName;

    public function setFallbackName($fallbackName)
    {
        $this->fallbackName = $fallbackName;

        return $this;
    }

    public function getFallbackName()
    {
        return $this->fallbackName;
    }


    public function parse($text)
    {
        switch (substr($text, 0, 1)) {
            case 't':
            case 'T':
                return 'Tim';
                break;
            case 'd':
            case 'D':
                return 'Danilo';
                break;
            case '':
                return $this->getFallbackName();
            default:
                return $text;
        }
    }
}
