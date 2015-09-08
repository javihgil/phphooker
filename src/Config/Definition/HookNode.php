<?php

/*
 * This file is part of the phphooker package.
 *
 * (c) Javi H. Gil <https://github.com/javihgil>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Jhg\PhpHooker\Config\Definition;

use Symfony\Component\Config\Definition\BaseNode;
use Symfony\Component\Config\Definition\Exception\InvalidTypeException;

/**
 * Class Jhg\PhpHooker\HookNode
 *
 * @package Config\Definition
 */
class HookNode extends BaseNode
{
    /**
     * Validates the type of a Node.
     *
     * @param mixed $value The value to validate
     *
     * @throws InvalidTypeException when the value is invalid
     */
    protected function validateType($value)
    {
        // TODO: Implement validateType() method.
    }

    /**
     * Normalizes the value.
     *
     * @param mixed $value The value to normalize.
     *
     * @return mixed The normalized value
     */
    protected function normalizeValue($value)
    {
        // TODO: Implement normalizeValue() method.
    }

    /**
     * Merges two values together.
     *
     * @param mixed $leftSide
     * @param mixed $rightSide
     *
     * @return mixed The merged value
     */
    protected function mergeValues($leftSide, $rightSide)
    {
        // TODO: Implement mergeValues() method.
    }

    /**
     * Finalizes a value.
     *
     * @param mixed $value The value to finalize
     *
     * @return mixed The finalized value
     */
    protected function finalizeValue($value)
    {
        // TODO: Implement finalizeValue() method.
    }

    /**
     * Returns true when the node has a default value.
     *
     * @return bool If the node has a default value
     */
    public function hasDefaultValue()
    {
        // TODO: Implement hasDefaultValue() method.
    }

    /**
     * Returns the default value of the node.
     *
     * @return mixed The default value
     *
     * @throws \RuntimeException if the node has no default value
     */
    public function getDefaultValue()
    {
        // TODO: Implement getDefaultValue() method.
    }

}
