<?php

namespace Jhg\PhpHooker\Config;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Class Configuration
 * 
 * @package Jhg\PhpHooker\Config
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('phphooker');

        $rootNode
            ->children()
                ->booleanNode('debug')
                    ->defaultFalse()
                ->end()

                ->arrayNode('global')
                    ->treatNullLike([])
                    ->prototype('variable')->end()
                ->end()

                ->arrayNode('checkers')
                    ->treatNullLike([])
                    ->prototype('scalar')->end()
                ->end()
            ->end() //children
        ;

        return $treeBuilder;
    }
}