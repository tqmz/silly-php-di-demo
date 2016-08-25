<?php

namespace Friendsoft\Command;

/**
 * GreetCommand
 *
 * TODO: could be a ValueObject
 */
class GreetCommand {

    private $name;

    private $yell = false;

    public function __construct($name = null, $yell = false)
    {
        $this
            ->setName($name)
            ->setYell($yell)
            ;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }


    public function setYell($yell)
    {
        $this->yell = $yell;

        return $this;
    }

    public function enableYell()
    {
        $this->yell = true;

        return $this;
    }

    public function disableYell()
    {
        $this->yell = false;

        return $this;
    }

    public function doesYell()
    {
        return $this->yell;
    }


}
