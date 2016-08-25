<?php

use function DI\object;
use function DI\get;

$params = [
    'fallbackName' => 'John'
];

$services = [
    Symfony\Component\Console\Output\OutputInterface::class => object('Symfony\Component\Console\Output\ConsoleOutput'),
    Friendsoft\Parser\NameParser::class => object()->methodParameter('setFallbackName', 'fallbackName', get('fallbackName'))
];

return $services + $params;
