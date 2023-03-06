<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Event\Guild\Role;

use Discord\Discord;
use Discord\Parts\Guild\Role;

final class GuildRoleCreateEvent
{
    public function __construct(
        public readonly Role $role,
        public readonly Discord $discord,
    ) {
    }
}
