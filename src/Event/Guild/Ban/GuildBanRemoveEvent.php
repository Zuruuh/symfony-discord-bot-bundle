<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Event\Guild\Ban;

use Discord\Discord;
use Discord\Parts\Guild\Ban;

final class GuildBanRemoveEvent
{
    public function __construct(
        public readonly Ban $ban,
        public readonly Discord $discord,
    ) {
    }
}
