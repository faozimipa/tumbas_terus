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
 * @since Class available since Release 4.0.0
 */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
class PHPUnit_Runner_Filter_Group_Exclude extends PHPUnit_Runner_Filter_GroupFilterIterator
{
    /**
     * @param string $hash
     *
     * @return bool
     */
    protected function doAccept($hash)
    {
        return !in_array($hash, $this->groupTests);
    }
}
