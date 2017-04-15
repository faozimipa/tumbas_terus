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
class Framework_TestImplementorTest extends PHPUnit_Framework_TestCase
{
=======
/**
 * @since      Class available since Release 2.0.0
 */
class Framework_TestImplementorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @covers PHPUnit_Framework_TestCase
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testSuccessfulRun()
    {
        $result = new PHPUnit_Framework_TestResult;

        $test = new DoubleTestCase(new Success);
        $test->run($result);

        $this->assertCount(count($test), $result);
        $this->assertEquals(0, $result->errorCount());
        $this->assertEquals(0, $result->failureCount());
    }
}
