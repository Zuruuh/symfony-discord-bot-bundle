<?php

declare(strict_types=1);

namespace Zuruh\DiscordBotBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\Builder\NodeBuilder;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @internal
 */
final class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $builder = new TreeBuilder('discord');

        $rootNode = $builder->getRootNode();

        assert($rootNode instanceof ArrayNodeDefinition);

        $rootNode
            ->children()
            ->scalarNode('token')
            ->defaultValue('%env(DISCORD_BOT_TOKEN)%')
            ->end()
        ;

        $rootNode
            ->children()
            ->arrayNode('intents')
            ->defaultValue([])
            ->end()
        ;

        return $builder;
    }
}
