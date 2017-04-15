<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Translation\Tests;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\LoggingTranslator;
use Symfony\Component\Translation\Loader\ArrayLoader;

<<<<<<< HEAD
class LoggingTranslatorTest extends TestCase
=======
class LoggingTranslatorTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    public function testTransWithNoTranslationIsLogged()
    {
        $logger = $this->getMockBuilder('Psr\Log\LoggerInterface')->getMock();
        $logger->expects($this->exactly(2))
            ->method('warning')
            ->with('Translation not found.')
        ;

        $translator = new Translator('ar');
        $loggableTranslator = new LoggingTranslator($translator, $logger);
        $loggableTranslator->transChoice('some_message2', 10, array('%count%' => 10));
        $loggableTranslator->trans('bar');
    }

    public function testTransChoiceFallbackIsLogged()
    {
        $logger = $this->getMockBuilder('Psr\Log\LoggerInterface')->getMock();
        $logger->expects($this->once())
            ->method('debug')
            ->with('Translation use fallback catalogue.')
        ;

        $translator = new Translator('ar');
        $translator->setFallbackLocales(array('en'));
        $translator->addLoader('array', new ArrayLoader());
        $translator->addResource('array', array('some_message2' => 'one thing|%count% things'), 'en');
        $loggableTranslator = new LoggingTranslator($translator, $logger);
        $loggableTranslator->transChoice('some_message2', 10, array('%count%' => 10));
    }
}
