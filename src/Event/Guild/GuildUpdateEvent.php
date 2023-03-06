<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Event\Guild;

use Discord\Discord;
use Discord\Parts\Guild\Guild;

final class GuildUpdateEvent
{
    public function __construct(
        public readonly Guild $guild,
        public readonly Discord $discord,
        public readonly ?Guild $oldGuild,
    ) {
    }
}
