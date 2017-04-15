<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Finder\Tests;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Glob;

class GlobTest extends TestCase
=======
use Symfony\Component\Finder\Glob;

class GlobTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function testGlobToRegexDelimiters()
    {
        $this->assertEquals('#^(?=[^\.])\#$#', Glob::toRegex('#'));
        $this->assertEquals('#^\.[^/]*$#', Glob::toRegex('.*'));
        $this->assertEquals('^\.[^/]*$', Glob::toRegex('.*', true, true, ''));
        $this->assertEquals('/^\.[^/]*$/', Glob::toRegex('.*', true, true, '/'));
    }
}
