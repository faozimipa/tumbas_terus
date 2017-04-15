<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * A Test can be run and collect its results.
<<<<<<< HEAD
=======
 *
 * @since Interface available since Release 2.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
interface PHPUnit_Framework_Test extends Countable
{
    /**
     * Runs a test and collects its result in a TestResult instance.
     *
     * @param PHPUnit_Framework_TestResult $result
     *
     * @return PHPUnit_Framework_TestResult
     */
    public function run(PHPUnit_Framework_TestResult $result = null);
}
