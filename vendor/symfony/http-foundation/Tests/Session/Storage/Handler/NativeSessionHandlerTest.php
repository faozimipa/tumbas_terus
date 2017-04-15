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
use Symfony\Component\HttpFoundation\Session\Storage\Handler\NativeSessionHandler;

/**
 * Test class for NativeSessionHandler.
 *
 * @author Drak <drak@zikula.org>
 *
 * @runTestsInSeparateProcesses
 * @preserveGlobalState disabled
 */
<<<<<<< HEAD
class NativeSessionHandlerTest extends TestCase
=======
class NativeSessionHandlerTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function testConstruct()
    {
        $handler = new NativeSessionHandler();

        $this->assertTrue($handler instanceof \SessionHandler);
        $this->assertTrue($handler instanceof NativeSessionHandler);
    }
}
