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

use Jhg\PhpHooker\Config\Definition\HookNode;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;

/**
 * Class HookNodeDefinition
 *
 * @package Jhg\PhpHooker\Config\Definition\Builder
 */
class HookNodeDefinition extends NodeDefinition
{
    /**
     * @{inherited}
     */
    protected function createNode()
    {
        $node = new HookNode($this->name, $this->parent);

        return $node;
    }
}