<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Command;

use Discord\Discord;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

#[AsCommand(
    'discord:run',
    'Run your discord bot as a long-running process'
)]
final class RunCommand extends Command
{
    public function __construct(private readonly Discord $discord)
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->discord->run();

        return self::SUCCESS;
    }
}
