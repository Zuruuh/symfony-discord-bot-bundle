<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Command;

use Discord\Http\Exceptions\NoPermissionsException;
use Discord\Parts\Channel\Channel;
use LogicException;
use Symfony\Component\Console\Formatter\OutputFormatterInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class DiscordOutput implements OutputInterface
{
    public function __construct(
        private readonly Channel $channel,
    ) {
    }

    /**
     * @phpstan-param iterable<string>|string $messages
     * @throws NoPermissionsException
     */
    public function write(iterable|string $messages, bool $newline = false, int $options = 0): void
    {
        $messages = is_string($messages) ? [$messages] : $messages;

        foreach ($messages as $message) {
            $this->channel->sendMessage($message);
        }
    }

    /**
     * @phpstan-param iterable<string>|string $messages
     */
    public function writeln(iterable|string $messages, int $options = 0)
    {
        $this->write($messages, true, $options);
    }

    public function setVerbosity(int $level): never
    {
        throw new LogicException('Cannot set a verbosity level for a discord channel output');
    }

    public function getVerbosity(): int
    {
        return self::VERBOSITY_NORMAL;
    }

    public function isQuiet(): bool
    {
    }

    public function isVerbose(): bool
    {
        return false;
    }

    public function isVeryVerbose(): bool
    {
        return false;
    }

    public function isDebug(): bool
    {
        return false;
    }

    public function setDecorated(bool $decorated)
    {
    }

    public function isDecorated(): bool
    {
        // TODO: Implement isDecorated() method.
    }

    public function setFormatter(OutputFormatterInterface $formatter)
    {
        // TODO: Implement setFormatter() method.
    }

    public function getFormatter(): OutputFormatterInterface
    {
        // TODO: Implement getFormatter() method.
    }
}
