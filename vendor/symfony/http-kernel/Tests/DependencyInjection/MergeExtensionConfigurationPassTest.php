<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Tests\DependencyInjection;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\DependencyInjection\MergeExtensionConfigurationPass;

class MergeExtensionConfigurationPassTest extends TestCase
=======
use Symfony\Component\HttpKernel\DependencyInjection\MergeExtensionConfigurationPass;

class MergeExtensionConfigurationPassTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function testAutoloadMainExtension()
    {
        $container = $this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ContainerBuilder')->setMethods(array('getExtensionConfig', 'loadFromExtension', 'getParameterBag', 'getDefinitions', 'getAliases', 'getExtensions'))->getMock();
        $params = $this->getMockBuilder('Symfony\\Component\\DependencyInjection\\ParameterBag\\ParameterBag')->getMock();

        $container->expects($this->at(0))
            ->method('getExtensionConfig')
            ->with('loaded')
            ->will($this->returnValue(array(array())));
        $container->expects($this->at(1))
            ->method('getExtensionConfig')
            ->with('notloaded')
            ->will($this->returnValue(array()));
        $container->expects($this->once())
            ->method('loadFromExtension')
            ->with('notloaded', array());

        $container->expects($this->any())
            ->method('getParameterBag')
            ->will($this->returnValue($params));
        $params->expects($this->any())
            ->method('all')
            ->will($this->returnValue(array()));
        $container->expects($this->any())
            ->method('getDefinitions')
            ->will($this->returnValue(array()));
        $container->expects($this->any())
            ->method('getAliases')
            ->will($this->returnValue(array()));
        $container->expects($this->any())
            ->method('getExtensions')
            ->will($this->returnValue(array()));

        $configPass = new MergeExtensionConfigurationPass(array('loaded', 'notloaded'));
        $configPass->process($container);
    }
}
