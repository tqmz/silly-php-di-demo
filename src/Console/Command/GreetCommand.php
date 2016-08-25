<?php

namespace Friendsoft\Console\Command;

use Friendsoft\Command\GreetCommand as Command;
use Friendsoft\Command\GreetCommandHandler as Handler;
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
     * @var Handler
     */
    private $handler;

    public function __construct(Handler $handler)
    {
        $this->handler = $handler;
    }

    public function __invoke($name, $yell = false, OutputInterface $output)
    {
        $command = new Command($name, $yell);
        $this->handler->handle($command);
    }

}
