<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Event\Guild\Role;

use Discord\Discord;
use Discord\Parts\Guild\Role;
use stdClass;

final class GuildRoleDeleteEvent
{
    public function __construct(
        public readonly Role|stdClass $role,
        public readonly Discord $discord,
    ) {
    }
}
