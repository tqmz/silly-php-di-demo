<?php

namespace Friendsoft\Parser;

class NameParser {

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
            default:
                return $text;
        }
    }
}
