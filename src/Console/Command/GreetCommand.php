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

        // TODO: just take arguments and options here,
        // instanciate a GreetCommand data object and
        // pass it on to a GreetCommandHandler
        // see Michael Noback, Rock Tuss: CommandHandler
        // advantage: use any cli framework, or even
        // several in parallels, and / or web front controllers
        // but just one class (GreetCommandHandler) for actually
        // doing what's to be done
        $output->writeln($yell ? strtoupper($text) : $text);
    }

}
