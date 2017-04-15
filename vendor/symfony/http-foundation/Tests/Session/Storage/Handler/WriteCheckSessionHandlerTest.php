<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Tests\Session\Storage\Handler;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
use Symfony\Component\HttpFoundation\Session\Storage\Handler\WriteCheckSessionHandler;

/**
 * @author Adrien Brault <adrien.brault@gmail.com>
 */
<<<<<<< HEAD
class WriteCheckSessionHandlerTest extends TestCase
=======
class WriteCheckSessionHandlerTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function test()
    {
        $wrappedSessionHandlerMock = $this->getMockBuilder('SessionHandlerInterface')->getMock();
        $writeCheckSessionHandler = new WriteCheckSessionHandler($wrappedSessionHandlerMock);

        $wrappedSessionHandlerMock
            ->expects($this->once())
            ->method('close')
            ->with()
            ->will($this->returnValue(true))
        ;

        $this->assertTrue($writeCheckSessionHandler->close());
    }

    public function testWrite()
    {
        $wrappedSessionHandlerMock = $this->getMockBuilder('SessionHandlerInterface')->getMock();
        $writeCheckSessionHandler = new WriteCheckSessionHandler($wrappedSessionHandlerMock);

        $wrappedSessionHandlerMock
            ->expects($this->once())
            ->method('write')
            ->with('foo', 'bar')
            ->will($this->returnValue(true))
        ;

        $this->assertTrue($writeCheckSessionHandler->write('foo', 'bar'));
    }

    public function testSkippedWrite()
    {
        $wrappedSessionHandlerMock = $this->getMockBuilder('SessionHandlerInterface')->getMock();
        $writeCheckSessionHandler = new WriteCheckSessionHandler($wrappedSessionHandlerMock);

        $wrappedSessionHandlerMock
            ->expects($this->once())
            ->method('read')
            ->with('foo')
            ->will($this->returnValue('bar'))
        ;

        $wrappedSessionHandlerMock
            ->expects($this->never())
            ->method('write')
        ;

        $this->assertEquals('bar', $writeCheckSessionHandler->read('foo'));
        $this->assertTrue($writeCheckSessionHandler->write('foo', 'bar'));
    }

    public function testNonSkippedWrite()
    {
        $wrappedSessionHandlerMock = $this->getMockBuilder('SessionHandlerInterface')->getMock();
        $writeCheckSessionHandler = new WriteCheckSessionHandler($wrappedSessionHandlerMock);

        $wrappedSessionHandlerMock
            ->expects($this->once())
            ->method('read')
            ->with('foo')
            ->will($this->returnValue('bar'))
        ;

        $wrappedSessionHandlerMock
            ->expects($this->once())
            ->method('write')
            ->with('foo', 'baZZZ')
            ->will($this->returnValue(true))
        ;

        $this->assertEquals('bar', $writeCheckSessionHandler->read('foo'));
        $this->assertTrue($writeCheckSessionHandler->write('foo', 'baZZZ'));
    }
}
