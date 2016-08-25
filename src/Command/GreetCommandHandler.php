<?php

namespace Friendsoft\Command;

use Friendsoft\Parser\NameParser;

// NOTE: still coupled to Symfony Console, but it could be generalized (PSR-like)
//       and it's not more than an Interface
use Symfony\Component\Console\Output\OutputInterface;

class GreetCommandHandler {

    /**
     * @var OutputInterface
     */
    private $output;

    /**
     * @var NameParser
     */
    private $nameParser;

    public function __construct(OutputInterface $output, NameParser $nameParser)
    {
        $this->output = $output;
        $this->nameParser = $nameParser;
    }

    public function handle(GreetCommand $command)
    {
        $name = $this->nameParser->parse($command->getName());
        $text = 'Hello' . ($name ? ', ' . $name : '');
        $this->output->writeln($command->doesYell() ? strtoupper($text) : $text);
    }
}

