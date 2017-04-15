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
 * @since      Class available since Release 4.2.0
 */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
class Util_RegexTest extends PHPUnit_Framework_TestCase
{
    public function validRegexpProvider()
    {
        return [
          ['#valid regexp#', 'valid regexp', 1],
          [';val.*xp;', 'valid regexp', 1],
          ['/val.*xp/i', 'VALID REGEXP', 1],
          ['/a val.*p/','valid regexp', 0],
        ];
    }

    public function invalidRegexpProvider()
    {
        return [
          ['valid regexp', 'valid regexp'],
          [';val.*xp', 'valid regexp'],
          ['val.*xp/i', 'VALID REGEXP'],
        ];
    }

    /**
     * @dataProvider validRegexpProvider
<<<<<<< HEAD
=======
     * @covers       PHPUnit_Util_Regex::pregMatchSafe
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     */
    public function testValidRegex($pattern, $subject, $return)
    {
        $this->assertEquals($return, PHPUnit_Util_Regex::pregMatchSafe($pattern, $subject));
    }

    /**
     * @dataProvider invalidRegexpProvider
<<<<<<< HEAD
=======
     * @covers       PHPUnit_Util_Regex::pregMatchSafe
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     */
    public function testInvalidRegex($pattern, $subject)
    {
        $this->assertFalse(PHPUnit_Util_Regex::pregMatchSafe($pattern, $subject));
    }
}
