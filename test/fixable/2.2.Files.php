<?php

/**
 * @see       https://github.com/laminas/laminas-coding-standard for the canonical source repository
 * @copyright https://github.com/laminas/laminas-coding-standard/blob/master/COPYRIGHT.md
 * @license   https://github.com/laminas/laminas-coding-standard/blob/master/LICENSE.md New BSD License
 */

namespace LaminasCodingStandardTest\fixed;

class Files
{
    public function testStrictTypesDirective(): void
    {
        // The `declare(strict_types=1);` directive MUST be declared and be the
        // first statement in a file.
    }

    public function testLineEndings(): void
    {
        // All PHP files MUST use the Unix LF (linefeed) line ending only.
    }

    public function testEndFileNewline(): void
    {
        // All PHP files MUST end with a non-blank line, terminated with a single LF.
    }

    public function testClosingTag(): void
    {
        // The php closing tag MUST be omitted from files containing only PHP.
    }
}



?>
