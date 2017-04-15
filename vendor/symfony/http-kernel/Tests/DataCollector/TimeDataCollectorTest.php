<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Tests\DataCollector;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
use Symfony\Component\HttpKernel\DataCollector\TimeDataCollector;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @group time-sensitive
 */
<<<<<<< HEAD
class TimeDataCollectorTest extends TestCase
=======
class TimeDataCollectorTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function testCollect()
    {
        $c = new TimeDataCollector();

        $request = new Request();
        $request->server->set('REQUEST_TIME', 1);

        $c->collect($request, new Response());

        $this->assertEquals(1000, $c->getStartTime());

        $request->server->set('REQUEST_TIME_FLOAT', 2);

        $c->collect($request, new Response());

        $this->assertEquals(2000, $c->getStartTime());

        $request = new Request();
        $c->collect($request, new Response());
        $this->assertEquals(0, $c->getStartTime());

        $kernel = $this->getMockBuilder('Symfony\Component\HttpKernel\KernelInterface')->getMock();
        $kernel->expects($this->once())->method('getStartTime')->will($this->returnValue(123456));

        $c = new TimeDataCollector($kernel);
        $request = new Request();
        $request->server->set('REQUEST_TIME', 1);

        $c->collect($request, new Response());
        $this->assertEquals(123456000, $c->getStartTime());
    }
}
