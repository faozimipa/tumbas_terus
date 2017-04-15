<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Tests\Loader;

use Symfony\Component\Routing\Loader\AnnotationDirectoryLoader;
use Symfony\Component\Config\FileLocator;

class AnnotationDirectoryLoaderTest extends AbstractAnnotationLoaderTest
{
    protected $loader;
    protected $reader;

    protected function setUp()
    {
        parent::setUp();

        $this->reader = $this->getReader();
        $this->loader = new AnnotationDirectoryLoader(new FileLocator(), $this->getClassLoader($this->reader));
    }

    public function testLoad()
    {
        $this->reader->expects($this->exactly(2))->method('getClassAnnotation');

        $this->reader
            ->expects($this->any())
            ->method('getMethodAnnotations')
            ->will($this->returnValue(array()))
        ;

        $this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses');
    }

<<<<<<< HEAD
    public function testLoadIgnoresHiddenDirectories()
    {
        $this->expectAnnotationsToBeReadFrom(array(
            'Symfony\Component\Routing\Tests\Fixtures\AnnotatedClasses\BarClass',
            'Symfony\Component\Routing\Tests\Fixtures\AnnotatedClasses\FooClass',
        ));

        $this->reader
            ->expects($this->any())
            ->method('getMethodAnnotations')
            ->will($this->returnValue(array()))
        ;

        $this->loader->load(__DIR__.'/../Fixtures/AnnotatedClasses');
    }

=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testSupports()
    {
        $fixturesDir = __DIR__.'/../Fixtures';

        $this->assertTrue($this->loader->supports($fixturesDir), '->supports() returns true if the resource is loadable');
        $this->assertFalse($this->loader->supports('foo.foo'), '->supports() returns true if the resource is loadable');

        $this->assertTrue($this->loader->supports($fixturesDir, 'annotation'), '->supports() checks the resource type if specified');
        $this->assertFalse($this->loader->supports($fixturesDir, 'foo'), '->supports() checks the resource type if specified');
    }
<<<<<<< HEAD

    private function expectAnnotationsToBeReadFrom(array $classes)
    {
        $this->reader->expects($this->exactly(count($classes)))
            ->method('getClassAnnotation')
            ->with($this->callback(function (\ReflectionClass $class) use ($classes) {
                return in_array($class->getName(), $classes);
            }));
    }
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
}
