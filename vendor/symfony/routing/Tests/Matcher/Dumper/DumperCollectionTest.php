<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Tests\Matcher\Dumper;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
use Symfony\Component\Routing\Matcher\Dumper\DumperCollection;

class DumperCollectionTest extends TestCase
=======
use Symfony\Component\Routing\Matcher\Dumper\DumperCollection;

class DumperCollectionTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function testGetRoot()
    {
        $a = new DumperCollection();

        $b = new DumperCollection();
        $a->add($b);

        $c = new DumperCollection();
        $b->add($c);

        $d = new DumperCollection();
        $c->add($d);

        $this->assertSame($a, $c->getRoot());
    }
}
