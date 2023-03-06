<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Event\Guild\Emoji;

use Discord\Discord;
use Discord\Helpers\Collection;
use Discord\Parts\Guild\Emoji;

final class GuildEmojiUpdateEvent
{
    /**
     * @phpstan-param Collection<Emoji> $emojis
     * @phpstan-param Collection<Emoji> $oldEmojis
     */
    public function __construct(
        public readonly Collection $emojis,
        public readonly Discord $discord,
        public readonly Collection $oldEmojis,
    ) {
    }
}
