<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Tests\Catalogue;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Translation\MessageCatalogueInterface;

abstract class AbstractOperationTest extends TestCase
=======
use Symfony\Component\Translation\MessageCatalogue;
use Symfony\Component\Translation\MessageCatalogueInterface;

abstract class AbstractOperationTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function testGetEmptyDomains()
    {
        $this->assertEquals(
            array(),
            $this->createOperation(
                new MessageCatalogue('en'),
                new MessageCatalogue('en')
            )->getDomains()
        );
    }

    public function testGetMergedDomains()
    {
        $this->assertEquals(
            array('a', 'b', 'c'),
            $this->createOperation(
                new MessageCatalogue('en', array('a' => array(), 'b' => array())),
                new MessageCatalogue('en', array('b' => array(), 'c' => array()))
            )->getDomains()
        );
    }

    public function testGetMessagesFromUnknownDomain()
    {
<<<<<<< HEAD
        $this->{method_exists($this, $_ = 'expectException') ? $_ : 'setExpectedException'}('InvalidArgumentException');
=======
        $this->setExpectedException('InvalidArgumentException');
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        $this->createOperation(
            new MessageCatalogue('en'),
            new MessageCatalogue('en')
        )->getMessages('domain');
    }

    public function testGetEmptyMessages()
    {
        $this->assertEquals(
            array(),
            $this->createOperation(
                new MessageCatalogue('en', array('a' => array())),
                new MessageCatalogue('en')
            )->getMessages('a')
        );
    }

    public function testGetEmptyResult()
    {
        $this->assertEquals(
            new MessageCatalogue('en'),
            $this->createOperation(
                new MessageCatalogue('en'),
                new MessageCatalogue('en')
            )->getResult()
        );
    }

    abstract protected function createOperation(MessageCatalogueInterface $source, MessageCatalogueInterface $target);
}
