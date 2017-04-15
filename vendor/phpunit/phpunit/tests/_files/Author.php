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
 * An author.
 *
<<<<<<< HEAD
=======
 * @since      Class available since Release 3.6.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
class Author
{
    // the order of properties is important for testing the cycle!
    public $books = [];

    private $name = '';

    public function __construct($name)
    {
        $this->name = $name;
    }
}
