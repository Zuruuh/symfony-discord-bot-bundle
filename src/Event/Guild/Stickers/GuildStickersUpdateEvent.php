<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\Event\Guild\Stickers;

use Discord\Discord;
use Discord\Helpers\Collection;
use Discord\Parts\Guild\Sticker;

final class GuildStickersUpdateEvent
{
    /**
     * @phpstan-param Collection<Sticker> $stickers
     * @phpstan-param Collection<Sticker> $oldStickers
     */
    public function __construct(
        public readonly Collection $stickers,
        public readonly Discord $discord,
        public readonly Collection $oldStickers,
    ) {
    }
}
