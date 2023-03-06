<?php

declare(strict_types=1);

use PhpCsFixer\Config;
use PhpCsFixer\Finder;

$finder = Finder::create()
    ->in(__DIR__ . '/src')
;

return (new Config())
    ->setRules([
        '@PSR12' => true,
        'strict_param' => true,
        'array_syntax' => ['syntax' => 'short']
    ])
    ->setCacheFile(__DIR__ . '/var/.php-cs-fixer.cache')
    ->setIndent('    ')
    ->setLineEnding("\n")
    ->setFinder($finder)
;