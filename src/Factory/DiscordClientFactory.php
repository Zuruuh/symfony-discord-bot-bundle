<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Factory;

use Discord\Discord;
use Discord\Exceptions\IntentException;
use Discord\WebSockets\Intents;

final class DiscordClientFactory
{
    /**
     * @phpstan-param list<int> $intents
     * @throws IntentException
     */
    public static function create(string $token, array $intents = []): Discord
    {
        return new Discord([
            'token' => $token,
            'intents' => $intents ?: Intents::getDefaultIntents(),
        ]);
    }
}
