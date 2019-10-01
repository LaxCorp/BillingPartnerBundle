<?php

namespace LaxCorp\BillingPartnerBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * @inheritdoc
 */
class Configuration implements ConfigurationInterface
{

    const ROOT = 'billing_partner';

    /**
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder($this::ROOT);
        $rootNode    = $treeBuilder->getRootNode();

        $rootNode
            ->children()
            ->scalarNode('url')->cannotBeEmpty()->end()
            ->scalarNode('login')->cannotBeEmpty()->end()
            ->scalarNode('password')->cannotBeEmpty()->end()
            ->scalarNode('currency_code')->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}