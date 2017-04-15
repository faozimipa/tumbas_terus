<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Tests\Caster;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
use Symfony\Component\VarDumper\Test\VarDumperTestTrait;
use Symfony\Component\VarDumper\Tests\Fixtures\GeneratorDemo;
use Symfony\Component\VarDumper\Tests\Fixtures\NotLoadableClass;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
<<<<<<< HEAD
class ReflectionCasterTest extends TestCase
=======
class ReflectionCasterTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    use VarDumperTestTrait;

    public function testReflectionCaster()
    {
        $var = new \ReflectionClass('ReflectionClass');

        $this->assertDumpMatchesFormat(
            <<<'EOTXT'
ReflectionClass {
  +name: "ReflectionClass"
%Aimplements: array:%d [
    0 => "Reflector"
%A]
  constants: array:3 [
    "IS_IMPLICIT_ABSTRACT" => 16
    "IS_EXPLICIT_ABSTRACT" => 32
    "IS_FINAL" => %d
  ]
  properties: array:%d [
    "name" => ReflectionProperty {
%A    +name: "name"
      +class: "ReflectionClass"
%A    modifiers: "public"
    }
%A]
  methods: array:%d [
%A
    "export" => ReflectionMethod {
      +name: "export"
      +class: "ReflectionClass"
%A    parameters: {
        $%s: ReflectionParameter {
%A         position: 0
%A
}
EOTXT
            , $var
        );
    }

    public function testClosureCaster()
    {
        $a = $b = 123;
        $var = function ($x) use ($a, &$b) {};

        $this->assertDumpMatchesFormat(
            <<<EOTXT
Closure {
%Aparameters: {
    \$x: {}
  }
  use: {
    \$a: 123
    \$b: & 123
  }
  file: "%sReflectionCasterTest.php"
<<<<<<< HEAD
  line: "67 to 67"
=======
  line: "66 to 66"
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
}
EOTXT
            , $var
        );
    }

    public function testReflectionParameter()
    {
        $var = new \ReflectionParameter(__NAMESPACE__.'\reflectionParameterFixture', 0);

        $this->assertDumpMatchesFormat(
            <<<'EOTXT'
ReflectionParameter {
  +name: "arg1"
  position: 0
  typeHint: "Symfony\Component\VarDumper\Tests\Fixtures\NotLoadableClass"
  default: null
}
EOTXT
            , $var
        );
    }

    /**
     * @requires PHP 7.0
     */
    public function testReflectionParameterScalar()
    {
        $f = eval('return function (int $a) {};');
        $var = new \ReflectionParameter($f, 0);

        $this->assertDumpMatchesFormat(
            <<<'EOTXT'
ReflectionParameter {
  +name: "a"
  position: 0
  typeHint: "int"
}
EOTXT
            , $var
        );
    }

    /**
     * @requires PHP 7.0
     */
    public function testReturnType()
    {
        $f = eval('return function ():int {};');
        $line = __LINE__ - 1;

        $this->assertDumpMatchesFormat(
            <<<EOTXT
Closure {
  returnType: "int"
  class: "Symfony\Component\VarDumper\Tests\Caster\ReflectionCasterTest"
  this: Symfony\Component\VarDumper\Tests\Caster\ReflectionCasterTest { …}
  file: "%sReflectionCasterTest.php($line) : eval()'d code"
  line: "1 to 1"
}
EOTXT
            , $f
        );
    }

    /**
     * @requires PHP 7.0
     */
    public function testGenerator()
    {
        if (extension_loaded('xdebug')) {
            $this->markTestSkipped('xdebug is active');
        }

        $generator = new GeneratorDemo();
        $generator = $generator->baz();

        $expectedDump = <<<'EODUMP'
Generator {
  this: Symfony\Component\VarDumper\Tests\Fixtures\GeneratorDemo { …}
  executing: {
    Symfony\Component\VarDumper\Tests\Fixtures\GeneratorDemo->baz(): {
      %sGeneratorDemo.php:14: {
        : {
        :     yield from bar();
        : }
      }
    }
  }
  closed: false
}
EODUMP;

        $this->assertDumpMatchesFormat($expectedDump, $generator);

        foreach ($generator as $v) {
            break;
        }

        $expectedDump = <<<'EODUMP'
array:2 [
  0 => ReflectionGenerator {
    this: Symfony\Component\VarDumper\Tests\Fixtures\GeneratorDemo { …}
    trace: {
      %sGeneratorDemo.php:9: {
        : {
        :     yield 1;
        : }
      }
      %sGeneratorDemo.php:20: {
        : {
        :     yield from GeneratorDemo::foo();
        : }
      }
      %sGeneratorDemo.php:14: {
        : {
        :     yield from bar();
        : }
      }
    }
    closed: false
  }
  1 => Generator {
    executing: {
      Symfony\Component\VarDumper\Tests\Fixtures\GeneratorDemo::foo(): {
        %sGeneratorDemo.php:10: {
          :     yield 1;
          : }
          : 
        }
      }
    }
    closed: false
  }
]
EODUMP;

        $r = new \ReflectionGenerator($generator);
        $this->assertDumpMatchesFormat($expectedDump, array($r, $r->getExecutingGenerator()));

        foreach ($generator as $v) {
        }

        $expectedDump = <<<'EODUMP'
Generator {
  closed: true
}
EODUMP;
        $this->assertDumpMatchesFormat($expectedDump, $generator);
    }
}

function reflectionParameterFixture(NotLoadableClass $arg1 = null, $arg2)
{
}
