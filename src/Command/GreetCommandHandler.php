<?php

namespace Friendsoft\Command;

// NOTE: still coupled to Symfony Console, but it could be generalized (PSR-like)
//       and it's not more than an Interface
use Symfony\Component\Console\Output\OutputInterface;

class GreetCommandHandler {

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * NOTE: $output is injected from Console specific Command as
     *       console specific code is console specific anyways
     *       already, no need to make part of a DI container (usually)
     */
    public function __construct(OutputInterface $output)
    {
        // NOTE: $output not made part of Command simply, as Command
        // is plain data about what needs to be done actually,
        // so $output needs to be wrapped into a layer outside of the
        //  actual Command, thus made property of this class
        $this->output = $output;
    }


    public function handle(GreetCommand $command)
    {
        $text = 'Hello' . ($command->getName() ? ', ' . $command->getName() : '');
        $this->output->writeln($command->doesYell() ? strtoupper($text) : $text);

        // TODO: but what if services or application classes are needed here?
        //       like a Parser, f. e.
        //       they shall remain exchangeable to allow customizing things
        //       without hacking into the code, especially when application
        //       shall be used as framework / vendor
        //       => DI/ DIC
    }
}

