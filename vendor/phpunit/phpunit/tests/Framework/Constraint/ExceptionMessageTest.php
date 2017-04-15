<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

<<<<<<< HEAD
=======
/**
 * @since      Class available since Release 4.0.20
 * @covers     PHPUnit_Framework_Constraint_ExceptionMessage
 */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
class ExceptionMessageTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     * @expectedExceptionMessage A literal exception message
     */
    public function testLiteralMessage()
    {
        throw new Exception('A literal exception message');
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage A partial
     */
    public function testPartialMessageBegin()
    {
        throw new Exception('A partial exception message');
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage partial exception
     */
    public function testPartialMessageMiddle()
    {
        throw new Exception('A partial exception message');
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessage exception message
     */
    public function testPartialMessageEnd()
    {
        throw new Exception('A partial exception message');
    }
}
