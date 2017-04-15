<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Tests\Loader;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
use Symfony\Component\Translation\Loader\IniFileLoader;
use Symfony\Component\Config\Resource\FileResource;

class IniFileLoaderTest extends TestCase
=======
use Symfony\Component\Translation\Loader\IniFileLoader;
use Symfony\Component\Config\Resource\FileResource;

class IniFileLoaderTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function testLoad()
    {
        $loader = new IniFileLoader();
        $resource = __DIR__.'/../fixtures/resources.ini';
        $catalogue = $loader->load($resource, 'en', 'domain1');

        $this->assertEquals(array('foo' => 'bar'), $catalogue->all('domain1'));
        $this->assertEquals('en', $catalogue->getLocale());
        $this->assertEquals(array(new FileResource($resource)), $catalogue->getResources());
    }

    public function testLoadDoesNothingIfEmpty()
    {
        $loader = new IniFileLoader();
        $resource = __DIR__.'/../fixtures/empty.ini';
        $catalogue = $loader->load($resource, 'en', 'domain1');

        $this->assertEquals(array(), $catalogue->all('domain1'));
        $this->assertEquals('en', $catalogue->getLocale());
        $this->assertEquals(array(new FileResource($resource)), $catalogue->getResources());
    }

    /**
     * @expectedException \Symfony\Component\Translation\Exception\NotFoundResourceException
     */
    public function testLoadNonExistingResource()
    {
        $loader = new IniFileLoader();
        $resource = __DIR__.'/../fixtures/non-existing.ini';
        $loader->load($resource, 'en', 'domain1');
    }
}
