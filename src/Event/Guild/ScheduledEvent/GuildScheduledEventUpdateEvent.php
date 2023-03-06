<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Event\Guild\ScheduledEvent;

use Discord\Discord;
use Discord\Parts\Guild\ScheduledEvent;

final class GuildScheduledEventUpdateEvent
{
    public function __construct(
        public readonly ScheduledEvent $scheduledEvent,
        public readonly Discord $discord,
        public readonly ?ScheduledEvent $oldScheduledEvent,
    ) {
    }
}
