<?php

$params = [
    'fallbackName' => 'John'
];

$services = [
    Symfony\Component\Console\Output\OutputInterface::class => DI\object('Symfony\Component\Console\Output\ConsoleOutput'),
    Friendsoft\Parser\NameParser::class => DI\object()->methodParameter('setFallbackName', 'fallbackName', DI\get('fallbackName'))
];

return $services + $params;
