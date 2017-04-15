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
 * @since      Class available since Release 4.3.0
 * @covers     PHPUnit_Framework_Constraint_ExceptionMessageRegExp
 */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
class ExceptionMessageRegExpTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /^A polymorphic \w+ message/
     */
    public function testRegexMessage()
    {
        throw new Exception('A polymorphic exception message');
    }

    /**
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp /^a poly[a-z]+ [a-zA-Z0-9_]+ me(s){2}age$/i
     */
    public function testRegexMessageExtreme()
    {
        throw new Exception('A polymorphic exception message');
    }

    /**
     * @runInSeparateProcess
     * @requires extension xdebug
     * @expectedException \Exception
     * @expectedExceptionMessageRegExp #Screaming preg_match#
     */
    public function testMessageXdebugScreamCompatibility()
    {
        ini_set('xdebug.scream', '1');
        throw new Exception('Screaming preg_match');
    }

    /**
<<<<<<< HEAD
=======
     * @coversNothing
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException \Exception variadic
     * @expectedExceptionMessageRegExp /^A variadic \w+ message/
     */
    public function testSimultaneousLiteralAndRegExpExceptionMessage()
    {
        throw new Exception('A variadic exception message');
    }
}
