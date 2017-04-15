<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Tests\Loader;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;

abstract class AbstractAnnotationLoaderTest extends TestCase
=======
abstract class AbstractAnnotationLoaderTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function getReader()
    {
        return $this->getMockBuilder('Doctrine\Common\Annotations\Reader')
            ->disableOriginalConstructor()
            ->getMock()
        ;
    }

    public function getClassLoader($reader)
    {
        return $this->getMockBuilder('Symfony\Component\Routing\Loader\AnnotationClassLoader')
            ->setConstructorArgs(array($reader))
            ->getMockForAbstractClass()
        ;
    }
}
