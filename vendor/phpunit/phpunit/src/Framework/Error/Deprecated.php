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
 * Wrapper for PHP deprecated errors.
 * You can disable deprecated-to-exception conversion by setting
 *
 * <code>
 * PHPUnit_Framework_Error_Deprecated::$enabled = false;
 * </code>
<<<<<<< HEAD
=======
 *
 * @since Class available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
class PHPUnit_Framework_Error_Deprecated extends PHPUnit_Framework_Error
{
    public static $enabled = true;
}
