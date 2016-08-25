<?php

namespace Friendsoft\Console\Command;

use Symfony\Component\Console\Output\OutputInterface;

class GreetCommand {

    public function __invoke($name, $yell = false,  OutputInterface $output)
    {
        if ($name) {
            $text = 'Hello, '.$name;
        } else {
            $text = 'Hello';
        }

        $output->writeln($yell ? strtoupper($text) : $text);
    }

}
