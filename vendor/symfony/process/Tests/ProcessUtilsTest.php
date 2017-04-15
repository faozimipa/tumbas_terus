<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Process\Tests;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\ProcessUtils;

class ProcessUtilsTest extends TestCase
=======
use Symfony\Component\Process\ProcessUtils;

class ProcessUtilsTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    /**
     * @dataProvider dataArguments
     */
    public function testEscapeArgument($result, $argument)
    {
        $this->assertSame($result, ProcessUtils::escapeArgument($argument));
    }

    public function dataArguments()
    {
        if ('\\' === DIRECTORY_SEPARATOR) {
            return array(
                array('"\"php\" \"-v\""', '"php" "-v"'),
                array('"foo bar"', 'foo bar'),
                array('^%"path"^%', '%path%'),
                array('"<|>\\" \\"\'f"', '<|>" "\'f'),
                array('""', ''),
                array('"with\trailingbs\\\\"', 'with\trailingbs\\'),
            );
        }

        return array(
            array("'\"php\" \"-v\"'", '"php" "-v"'),
            array("'foo bar'", 'foo bar'),
            array("'%path%'", '%path%'),
            array("'<|>\" \"'\\''f'", '<|>" "\'f'),
            array("''", ''),
            array("'with\\trailingbs\\'", 'with\trailingbs\\'),
            array("'withNonAsciiAccentLikeéÉèÈàÀöä'", 'withNonAsciiAccentLikeéÉèÈàÀöä'),
        );
    }
}
