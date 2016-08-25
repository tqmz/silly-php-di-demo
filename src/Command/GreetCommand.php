<?php

namespace Friendsoft\Command;

class GreetCommand {

    private $name;

    private $yell = false;

    public function __construct($name, $yell = false)
    {
        $this->name = (string) $name;
        $this->yell = (boolean) $yell;
    }

    public function getName()
    {
        return $this->name;
    }

    public function hasYell()
    {
        return $this->yell;
    }

}
