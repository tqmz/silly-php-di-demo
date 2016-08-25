<?php

namespace Friendsoft\Console\Command;

use Friendsoft\Command\GreetCommand as Command;
use Friendsoft\Command\GreetCommandHandler as Handler;
use Friendsoft\Parser\NameParser;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * GreetCommand
 *
 * TODO: same as Symfony Console command is initiated by Silly,
 *       also a CommandHandler could be initialized and called
 *       generically, making this class obsolete
 */
class GreetCommand {

    /**
     * TODO: inject NameParser directly into GreetCommandHandler?
     *       Console Command does not need to care about it ...
     */
    public function __invoke($name, $yell = false,  OutputInterface $output, NameParser $nameParser, $fallbackName = null)
    {
        var_dump($fallbackName);
        // TODO resolve those new() statements :)
        $command = new Command($name, $yell);
        $handler = new Handler($output, $nameParser);
        $handler->handle($command);
    }

}
