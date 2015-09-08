<?php

/*
 * This file is part of the phphooker package.
 *
 * (c) Javi H. Gil <https://github.com/javihgil>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jhg\PhpHooker\Config\Definition\Builder;

use Symfony\Component\Config\Definition\Builder\NodeBuilder as BaseNodeBuilder;

/**
 * Class NodeBuilder
 *
 * @package Jhg\PhpHooker\Config\Definition\Builder
 */
class NodeBuilder extends BaseNodeBuilder
{
    /**
     * @var array
     */
    protected static $customNodes = [
        'hook' => 'Jhg\\PhpHooker\\Config\\Definition\\Builder\\HookNodeDefinition'
    ];

    /**
     * Overrides parent constructor to add $customNodes
     */
    public function __construct()
    {
        parent::__construct();

        foreach (self::$customNodes as $mapping => $nodeClass) {
            if (class_exists($nodeClass)) {
                $this->nodeMapping[$mapping] = $nodeClass;
            }
        }
    }

    /**
     * Creates a child hook node.
     *
     * @param string $name the name of the HookNode
     *
     * @return HookNodeDefinition The child node
     */
    public function hookNode($name)
    {
        if (!isset($this->nodeMapping['hook'])) {
            throw new \RuntimeException('The node type "hook" is not registered.');
        }

        return $this->node($name, 'hook');
    }
}
