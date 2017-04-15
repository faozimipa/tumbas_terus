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
 * @since      Class available since Release 2.0.0
 * @covers     PHPUnit_Runner_BaseTestRunner
 */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
class Runner_BaseTestRunnerTest extends PHPUnit_Framework_TestCase
{
    public function testInvokeNonStaticSuite()
    {
        $runner = new MockRunner;
        $runner->getTest('NonStatic');
    }
}
