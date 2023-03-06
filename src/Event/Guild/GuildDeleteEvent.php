<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Event\Guild;

use Discord\Discord;
use Discord\Parts\Guild\Guild;
use stdClass;

final class GuildDeleteEvent
{
    public function __construct(
        public readonly Guild|stdClass $guild,
        public readonly Discord $discord,
        public readonly bool $unavailable,
    ) {
    }
}
