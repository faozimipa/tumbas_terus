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
 * @since Class available since Release 3.4.0
 */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
class PHPUnit_Framework_TestSuite_DataProvider extends PHPUnit_Framework_TestSuite
{
    /**
     * Sets the dependencies of a TestCase.
     *
     * @param array $dependencies
     */
    public function setDependencies(array $dependencies)
    {
        foreach ($this->tests as $test) {
            $test->setDependencies($dependencies);
        }
    }
}
