<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Tests\Dumper;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Translation\Dumper\QtFileDumper;

class QtFileDumperTest extends TestCase
=======
use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Translation\Dumper\QtFileDumper;

class QtFileDumperTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function testFormatCatalogue()
    {
        $catalogue = new MessageCatalogue('en');
        $catalogue->add(array('foo' => 'bar'), 'resources');

        $dumper = new QtFileDumper();

        $this->assertStringEqualsFile(__DIR__.'/../fixtures/resources.ts', $dumper->formatCatalogue($catalogue, 'resources'));
    }
}
