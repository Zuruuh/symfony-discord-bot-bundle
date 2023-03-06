<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\DependencyInjection;

use Discord\Discord;
use Symfony\Component\Config\Definition\ConfigurationInterface;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\PhpFileLoader;

/**
 * @internal
 */
final class DiscordBotExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new PhpFileLoader(
            $container,
            new FileLocator(
                dirname(__DIR__, 3) . '/config'
            )
        );

        $loader->load('services.php');

        $configuration = $this->getConfiguration($configs, $container);
        assert($configuration instanceof ConfigurationInterface);

        $config = $this->processConfiguration($configuration, $configs);

        $definition = $container->getDefinition(Discord::class);
        $definition->setArgument(0, $config['token']);
        $definition->setArgument(1, $config['intents']);
    }
}
