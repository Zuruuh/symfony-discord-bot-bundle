<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Event\Guild\Member;

use Discord\Discord;
use Discord\Parts\User\Member;

final class GuildMemberRemoveEvent
{
    public function __construct(
        public readonly Member $member,
        public readonly Discord $discord,
    ) {
    }
}
