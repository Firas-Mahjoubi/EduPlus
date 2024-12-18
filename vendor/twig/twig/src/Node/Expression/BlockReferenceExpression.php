<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression;

use Twig\Compiler;
use Twig\Node\Node;

/**
 * Represents a block call node.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class BlockReferenceExpression extends AbstractExpression
{
    /**
     * @param AbstractExpression $name
     */
    public function __construct(Node $name, ?Node $template, int $lineno)
    {
        if (!$name instanceof AbstractExpression) {
<<<<<<< HEAD
            trigger_deprecation('twig/twig', '3.15', 'Not passing a "%s" instance to the "node" argument of "%s" is deprecated ("%s" given).', AbstractExpression::class, static::class, \get_class($name));
=======
            trigger_deprecation('twig/twig', '3.15', 'Not passing a "%s" instance to the "node" argument of "%s" is deprecated ("%s" given).', AbstractExpression::class, static::class, get_class($name));
>>>>>>> 32b1d21577280cb80c1c507b541be4dee7c0bc31
        }

        $nodes = ['name' => $name];
        if (null !== $template) {
            $nodes['template'] = $template;
        }

        parent::__construct($nodes, ['is_defined_test' => false, 'output' => false], $lineno);
    }

    public function compile(Compiler $compiler): void
    {
        if ($this->getAttribute('is_defined_test')) {
            $this->compileTemplateCall($compiler, 'hasBlock');
        } else {
            if ($this->getAttribute('output')) {
                $compiler->addDebugInfo($this);

                $compiler->write('yield from ');
                $this
                    ->compileTemplateCall($compiler, 'yieldBlock')
                    ->raw(";\n");
            } else {
                $this->compileTemplateCall($compiler, 'renderBlock');
            }
        }
    }

    private function compileTemplateCall(Compiler $compiler, string $method): Compiler
    {
        if (!$this->hasNode('template')) {
            $compiler->write('$this');
        } else {
            $compiler
                ->write('$this->loadTemplate(')
                ->subcompile($this->getNode('template'))
                ->raw(', ')
                ->repr($this->getTemplateName())
                ->raw(', ')
                ->repr($this->getTemplateLine())
                ->raw(')')
            ;
        }

        $compiler->raw(\sprintf('->unwrap()->%s', $method));

        return $this->compileBlockArguments($compiler);
    }

    private function compileBlockArguments(Compiler $compiler): Compiler
    {
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('name'))
            ->raw(', $context');

        if (!$this->hasNode('template')) {
            $compiler->raw(', $blocks');
        }

        return $compiler->raw(')');
    }
}
