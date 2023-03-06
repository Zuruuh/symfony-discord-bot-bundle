<?php

declare(strict_types=1);

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Discord\Discord;
use Zuruh\DiscordBotBundle\Command\RunCommand;
use Zuruh\DiscordBotBundle\Event\Shared\DiscordEventSubscriberInterface;
use Zuruh\DiscordBotBundle\Factory\DiscordClientFactory;

return static function (ContainerConfigurator $container) {
    $services = $container->services();

    $services
        ->set(Discord::class)
            ->factory([DiscordClientFactory::class, 'create'])
            ->args([
                [
                    abstract_arg('Token'),
                    abstract_arg('Intents'),
                ]
            ])
            ->alias('discord', Discord::class)
    ;

    $services
        ->set(RunCommand::class)
            ->tag('console.command')
    ;

    $services
        ->instanceof(DiscordEventSubscriberInterface::class)
            ->tag(DiscordEventSubscriberInterface::class)
    ;
};
