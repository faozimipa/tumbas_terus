<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Tests\ControllerMetadata;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class ArgumentMetadataTest extends TestCase
=======
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class ArgumentMetadataTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function testWithBcLayerWithDefault()
    {
        $argument = new ArgumentMetadata('foo', 'string', false, true, 'default value');

        $this->assertFalse($argument->isNullable());
    }

    public function testDefaultValueAvailable()
    {
        $argument = new ArgumentMetadata('foo', 'string', false, true, 'default value', true);

        $this->assertTrue($argument->isNullable());
        $this->assertTrue($argument->hasDefaultValue());
        $this->assertSame('default value', $argument->getDefaultValue());
    }

    /**
     * @expectedException \LogicException
     */
    public function testDefaultValueUnavailable()
    {
        $argument = new ArgumentMetadata('foo', 'string', false, false, null, false);

        $this->assertFalse($argument->isNullable());
        $this->assertFalse($argument->hasDefaultValue());
        $argument->getDefaultValue();
    }
}
