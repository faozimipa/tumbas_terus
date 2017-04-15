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
 * @since      Class available since Release 2.0.0
 */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
class Framework_AssertTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    private $filesDirectory;

    protected function setUp()
    {
        $this->filesDirectory = dirname(__DIR__) . DIRECTORY_SEPARATOR . '_files' . DIRECTORY_SEPARATOR;
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::fail
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testFail()
    {
        try {
            $this->fail();
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        throw new PHPUnit_Framework_AssertionFailedError('Fail did not throw fail exception');
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertSplObjectStorageContainsObject()
    {
        $a = new stdClass;
        $b = new stdClass;
        $c = new SplObjectStorage;
        $c->attach($a);

        $this->assertContains($a, $c);

        try {
            $this->assertContains($b, $c);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayContainsObject()
    {
        $a = new stdClass;
        $b = new stdClass;

        $this->assertContains($a, [$a]);

        try {
            $this->assertContains($a, [$b]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayContainsString()
    {
        $this->assertContains('foo', ['foo']);

        try {
            $this->assertContains('foo', ['bar']);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayContainsNonObject()
    {
        $this->assertContains('foo', [true]);

        try {
            $this->assertContains('foo', [true], '', false, true, true);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContainsOnlyInstancesOf
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertContainsOnlyInstancesOf()
    {
        $test = [
            new Book(),
            new Book
        ];
        $this->assertContainsOnlyInstancesOf('Book', $test);
        $this->assertContainsOnlyInstancesOf('stdClass', [new stdClass()]);

        $test2 = [
            new Author('Test')
        ];
        try {
            $this->assertContainsOnlyInstancesOf('Book', $test2);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }
        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertArrayHasKey
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertArrayHasKeyThrowsExceptionForInvalidFirstArgument()
    {
        $this->assertArrayHasKey(null, []);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertArrayHasKey
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertArrayHasKeyThrowsExceptionForInvalidSecondArgument()
    {
        $this->assertArrayHasKey(0, null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayHasIntegerKey()
    {
        $this->assertArrayHasKey(0, ['foo']);

        try {
            $this->assertArrayHasKey(1, ['foo']);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArraySubset
     * @covers PHPUnit_Framework_Constraint_ArraySubset
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArraySubset()
    {
        $array = [
            'a' => 'item a',
            'b' => 'item b',
            'c' => ['a2' => 'item a2', 'b2' => 'item b2'],
            'd' => ['a2' => ['a3' => 'item a3', 'b3' => 'item b3']]
        ];

        $this->assertArraySubset(['a' => 'item a', 'c' => ['a2' => 'item a2']], $array);
        $this->assertArraySubset(['a' => 'item a', 'd' => ['a2' => ['b3' => 'item b3']]], $array);

        $arrayAccessData = new ArrayObject($array);

        $this->assertArraySubset(['a' => 'item a', 'c' => ['a2' => 'item a2']], $arrayAccessData);
        $this->assertArraySubset(['a' => 'item a', 'd' => ['a2' => ['b3' => 'item b3']]], $arrayAccessData);

        try {
            $this->assertArraySubset(['a' => 'bad value'], $array);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
        }

        try {
            $this->assertArraySubset(['d' => ['a2' => ['bad index' => 'item b3']]], $array);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArraySubset
     * @covers PHPUnit_Framework_Constraint_ArraySubset
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArraySubsetWithDeepNestedArrays()
    {
        $array = [
            'path' => [
                'to' => [
                    'the' => [
                        'cake' => 'is a lie'
                    ]
                ]
            ]
        ];

        $this->assertArraySubset(['path' => []], $array);
        $this->assertArraySubset(['path' => ['to' => []]], $array);
        $this->assertArraySubset(['path' => ['to' => ['the' => []]]], $array);
        $this->assertArraySubset(['path' => ['to' => ['the' => ['cake' => 'is a lie']]]], $array);

        try {
            $this->assertArraySubset(['path' => ['to' => ['the' => ['cake' => 'is not a lie']]]], $array);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArraySubset
     * @covers PHPUnit_Framework_Constraint_ArraySubset
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArraySubsetWithNoStrictCheckAndObjects()
    {
        $obj       = new \stdClass;
        $reference = &$obj;
        $array     = ['a' => $obj];

        $this->assertArraySubset(['a' => $reference], $array);
        $this->assertArraySubset(['a' => new \stdClass], $array);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArraySubset
     * @covers PHPUnit_Framework_Constraint_ArraySubset
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArraySubsetWithStrictCheckAndObjects()
    {
        $obj       = new \stdClass;
        $reference = &$obj;
        $array     = ['a' => $obj];

        $this->assertArraySubset(['a' => $reference], $array, true);

        try {
            $this->assertArraySubset(['a' => new \stdClass], $array, true);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail('Strict recursive array check fail.');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertArraySubset
     * @covers PHPUnit_Framework_Constraint_ArraySubset
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     * @expectedExceptionMessage array or ArrayAccess
     * @dataProvider assertArraySubsetInvalidArgumentProvider
     */
    public function testAssertArraySubsetRaisesExceptionForInvalidArguments($partial, $subject)
    {
        $this->assertArraySubset($partial, $subject);
    }

    /**
     * @return array
     */
    public function assertArraySubsetInvalidArgumentProvider()
    {
        return [
            [false, []],
            [[], false],
        ];
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertArrayNotHasKey
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertArrayNotHasKeyThrowsExceptionForInvalidFirstArgument()
    {
        $this->assertArrayNotHasKey(null, []);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertArrayNotHasKey
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertArrayNotHasKeyThrowsExceptionForInvalidSecondArgument()
    {
        $this->assertArrayNotHasKey(0, null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArrayNotHasKey
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayNotHasIntegerKey()
    {
        $this->assertArrayNotHasKey(1, ['foo']);

        try {
            $this->assertArrayNotHasKey(0, ['foo']);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayHasStringKey()
    {
        $this->assertArrayHasKey('foo', ['foo' => 'bar']);

        try {
            $this->assertArrayHasKey('bar', ['foo' => 'bar']);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArrayNotHasKey
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayNotHasStringKey()
    {
        $this->assertArrayNotHasKey('bar', ['foo' => 'bar']);

        try {
            $this->assertArrayNotHasKey('foo', ['foo' => 'bar']);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayHasKeyAcceptsArrayObjectValue()
    {
        $array        = new ArrayObject();
        $array['foo'] = 'bar';
        $this->assertArrayHasKey('foo', $array);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertArrayHasKeyProperlyFailsWithArrayObjectValue()
    {
        $array        = new ArrayObject();
        $array['bar'] = 'bar';
        $this->assertArrayHasKey('foo', $array);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayHasKeyAcceptsArrayAccessValue()
    {
        $array        = new SampleArrayAccess();
        $array['foo'] = 'bar';
        $this->assertArrayHasKey('foo', $array);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertArrayHasKey
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertArrayHasKeyProperlyFailsWithArrayAccessValue()
    {
        $array        = new SampleArrayAccess();
        $array['bar'] = 'bar';
        $this->assertArrayHasKey('foo', $array);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertArrayNotHasKey
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayNotHasKeyAcceptsArrayAccessValue()
    {
        $array        = new ArrayObject();
        $array['foo'] = 'bar';
        $this->assertArrayNotHasKey('bar', $array);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertArrayNotHasKey
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertArrayNotHasKeyPropertlyFailsWithArrayAccessValue()
    {
        $array        = new ArrayObject();
        $array['bar'] = 'bar';
        $this->assertArrayNotHasKey('bar', $array);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertContains
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertContainsThrowsException()
    {
        $this->assertContains(null, null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertIteratorContainsObject()
    {
        $foo = new stdClass;

        $this->assertContains($foo, new TestIterator([$foo]));

        try {
            $this->assertContains($foo, new TestIterator([new stdClass]));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertIteratorContainsString()
    {
        $this->assertContains('foo', new TestIterator(['foo']));

        try {
            $this->assertContains('foo', new TestIterator(['bar']));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringContainsString()
    {
        $this->assertContains('foo', 'foobar');

        try {
            $this->assertContains('foo', 'bar');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringContainsStringForUtf8()
    {
        $this->assertContains('oryginał', 'oryginał');

        try {
            $this->assertContains('ORYGINAŁ', 'oryginał');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringContainsStringForUtf8WhenIgnoreCase()
    {
        $this->assertContains('oryginał', 'oryginał', '', true);
        $this->assertContains('ORYGINAŁ', 'oryginał', '', true);

        try {
            $this->assertContains('foo', 'oryginał', '', true);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertNotContains
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotContainsThrowsException()
    {
        $this->assertNotContains(null, null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertSplObjectStorageNotContainsObject()
    {
        $a = new stdClass;
        $b = new stdClass;
        $c = new SplObjectStorage;
        $c->attach($a);

        $this->assertNotContains($b, $c);

        try {
            $this->assertNotContains($a, $c);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayNotContainsObject()
    {
        $a = new stdClass;
        $b = new stdClass;

        $this->assertNotContains($a, [$b]);

        try {
            $this->assertNotContains($a, [$a]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayNotContainsString()
    {
        $this->assertNotContains('foo', ['bar']);

        try {
            $this->assertNotContains('foo', ['foo']);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayNotContainsNonObject()
    {
        $this->assertNotContains('foo', [true], '', false, true, true);

        try {
            $this->assertNotContains('foo', [true]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringNotContainsString()
    {
        $this->assertNotContains('foo', 'bar');

        try {
            $this->assertNotContains('foo', 'foo');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringNotContainsStringForUtf8()
    {
        $this->assertNotContains('ORYGINAŁ', 'oryginał');

        try {
            $this->assertNotContains('oryginał', 'oryginał');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringNotContainsStringForUtf8WhenIgnoreCase()
    {
        try {
            $this->assertNotContains('ORYGINAŁ', 'oryginał', '', true);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertContainsOnly
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertContainsOnlyThrowsException()
    {
        $this->assertContainsOnly(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertNotContainsOnly
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotContainsOnlyThrowsException()
    {
        $this->assertNotContainsOnly(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertContainsOnlyInstancesOf
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertContainsOnlyInstancesOfThrowsException()
    {
        $this->assertContainsOnlyInstancesOf(null, null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContainsOnly
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayContainsOnlyIntegers()
    {
        $this->assertContainsOnly('integer', [1, 2, 3]);

        try {
            $this->assertContainsOnly('integer', ['1', 2, 3]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotContainsOnly
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayNotContainsOnlyIntegers()
    {
        $this->assertNotContainsOnly('integer', ['1', 2, 3]);

        try {
            $this->assertNotContainsOnly('integer', [1, 2, 3]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertContainsOnly
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayContainsOnlyStdClass()
    {
        $this->assertContainsOnly('StdClass', [new stdClass]);

        try {
            $this->assertContainsOnly('StdClass', ['StdClass']);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotContainsOnly
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertArrayNotContainsOnlyStdClass()
    {
        $this->assertNotContainsOnly('StdClass', ['StdClass']);

        try {
            $this->assertNotContainsOnly('StdClass', [new stdClass]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    protected function sameValues()
    {
        $object = new SampleClass(4, 8, 15);
        // cannot use $filesDirectory, because neither setUp() nor
        // setUpBeforeClass() are executed before the data providers
        $file     = dirname(__DIR__) . DIRECTORY_SEPARATOR . '_files' . DIRECTORY_SEPARATOR . 'foo.xml';
        $resource = fopen($file, 'r');

        return [
            // null
            [null, null],
            // strings
            ['a', 'a'],
            // integers
            [0, 0],
            // floats
            [2.3, 2.3],
<<<<<<< HEAD
            [1 / 3, 1 - 2 / 3],
=======
            [1/3, 1 - 2/3],
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
            [log(0), log(0)],
            // arrays
            [[], []],
            [[0 => 1], [0 => 1]],
            [[0 => null], [0 => null]],
            [['a', 'b' => [1, 2]], ['a', 'b' => [1, 2]]],
            // objects
            [$object, $object],
            // resources
            [$resource, $resource],
        ];
    }

    protected function notEqualValues()
    {
        // cyclic dependencies
        $book1                  = new Book;
        $book1->author          = new Author('Terry Pratchett');
        $book1->author->books[] = $book1;
        $book2                  = new Book;
        $book2->author          = new Author('Terry Pratch');
        $book2->author->books[] = $book2;

        $book3         = new Book;
        $book3->author = 'Terry Pratchett';
        $book4         = new stdClass;
        $book4->author = 'Terry Pratchett';

        $object1  = new SampleClass(4, 8, 15);
        $object2  = new SampleClass(16, 23, 42);
        $object3  = new SampleClass(4, 8, 15);
        $storage1 = new SplObjectStorage;
        $storage1->attach($object1);
        $storage2 = new SplObjectStorage;
        $storage2->attach($object3); // same content, different object

        // cannot use $filesDirectory, because neither setUp() nor
        // setUpBeforeClass() are executed before the data providers
        $file = dirname(__DIR__) . DIRECTORY_SEPARATOR . '_files' . DIRECTORY_SEPARATOR . 'foo.xml';

        return [
            // strings
            ['a', 'b'],
            ['a', 'A'],
            // https://github.com/sebastianbergmann/phpunit/issues/1023
            ['9E6666666','9E7777777'],
            // integers
            [1, 2],
            [2, 1],
            // floats
            [2.3, 4.2],
            [2.3, 4.2, 0.5],
            [[2.3], [4.2], 0.5],
            [[[2.3]], [[4.2]], 0.5],
            [new Struct(2.3), new Struct(4.2), 0.5],
            [[new Struct(2.3)], [new Struct(4.2)], 0.5],
            // NAN
            [NAN, NAN],
            // arrays
            [[], [0 => 1]],
            [[0     => 1], []],
            [[0     => null], []],
            [[0     => 1, 1 => 2], [0     => 1, 1 => 3]],
            [['a', 'b' => [1, 2]], ['a', 'b' => [2, 1]]],
            // objects
            [new SampleClass(4, 8, 15), new SampleClass(16, 23, 42)],
            [$object1, $object2],
            [$book1, $book2],
            [$book3, $book4], // same content, different class
            // resources
            [fopen($file, 'r'), fopen($file, 'r')],
            // SplObjectStorage
            [$storage1, $storage2],
            // DOMDocument
            [
                PHPUnit_Util_XML::load('<root></root>'),
                PHPUnit_Util_XML::load('<bar/>'),
            ],
            [
                PHPUnit_Util_XML::load('<foo attr1="bar"/>'),
                PHPUnit_Util_XML::load('<foo attr1="foobar"/>'),
            ],
            [
                PHPUnit_Util_XML::load('<foo> bar </foo>'),
                PHPUnit_Util_XML::load('<foo />'),
            ],
            [
                PHPUnit_Util_XML::load('<foo xmlns="urn:myns:bar"/>'),
                PHPUnit_Util_XML::load('<foo xmlns="urn:notmyns:bar"/>'),
            ],
            [
                PHPUnit_Util_XML::load('<foo> bar </foo>'),
                PHPUnit_Util_XML::load('<foo> bir </foo>'),
            ],
            [
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 03:13:35', new DateTimeZone('America/New_York')),
            ],
            [
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 03:13:35', new DateTimeZone('America/New_York')),
                3500
            ],
            [
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 05:13:35', new DateTimeZone('America/New_York')),
                3500
            ],
            [
                new DateTime('2013-03-29', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-30', new DateTimeZone('America/New_York')),
            ],
            [
                new DateTime('2013-03-29', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-30', new DateTimeZone('America/New_York')),
                43200
            ],
            [
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/Chicago')),
            ],
            [
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/Chicago')),
                3500
            ],
            [
                new DateTime('2013-03-30', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-30', new DateTimeZone('America/Chicago')),
            ],
            [
                new DateTime('2013-03-29T05:13:35-0600'),
                new DateTime('2013-03-29T04:13:35-0600'),
            ],
            [
                new DateTime('2013-03-29T05:13:35-0600'),
                new DateTime('2013-03-29T05:13:35-0500'),
            ],
            // Exception
            //array(new Exception('Exception 1'), new Exception('Exception 2')),
            // different types
            [new SampleClass(4, 8, 15), false],
            [false, new SampleClass(4, 8, 15)],
            [[0        => 1, 1 => 2], false],
            [false, [0 => 1, 1 => 2]],
            [[], new stdClass],
            [new stdClass, []],
            // PHP: 0 == 'Foobar' => true!
            // We want these values to differ
            [0, 'Foobar'],
            ['Foobar', 0],
            [3, acos(8)],
            [acos(8), 3]
        ];
    }

    protected function equalValues()
    {
        // cyclic dependencies
        $book1                  = new Book;
        $book1->author          = new Author('Terry Pratchett');
        $book1->author->books[] = $book1;
        $book2                  = new Book;
        $book2->author          = new Author('Terry Pratchett');
        $book2->author->books[] = $book2;

        $object1  = new SampleClass(4, 8, 15);
        $object2  = new SampleClass(4, 8, 15);
        $storage1 = new SplObjectStorage;
        $storage1->attach($object1);
        $storage2 = new SplObjectStorage;
        $storage2->attach($object1);

        return [
            // strings
            ['a', 'A', 0, false, true], // ignore case
            // arrays
            [['a' => 1, 'b' => 2], ['b' => 2, 'a' => 1]],
            [[1], ['1']],
            [[3, 2, 1], [2, 3, 1], 0, true], // canonicalized comparison
            // floats
            [2.3, 2.5, 0.5],
            [[2.3], [2.5], 0.5],
            [[[2.3]], [[2.5]], 0.5],
            [new Struct(2.3), new Struct(2.5), 0.5],
            [[new Struct(2.3)], [new Struct(2.5)], 0.5],
            // numeric with delta
            [1, 2, 1],
            // objects
            [$object1, $object2],
            [$book1, $book2],
            // SplObjectStorage
            [$storage1, $storage2],
            // DOMDocument
            [
                PHPUnit_Util_XML::load('<root></root>'),
                PHPUnit_Util_XML::load('<root/>'),
            ],
            [
                PHPUnit_Util_XML::load('<root attr="bar"></root>'),
                PHPUnit_Util_XML::load('<root attr="bar"/>'),
            ],
            [
                PHPUnit_Util_XML::load('<root><foo attr="bar"></foo></root>'),
                PHPUnit_Util_XML::load('<root><foo attr="bar"/></root>'),
            ],
            [
                PHPUnit_Util_XML::load("<root>\n  <child/>\n</root>"),
                PHPUnit_Util_XML::load('<root><child/></root>'),
            ],
            [
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
            ],
            [
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 04:13:25', new DateTimeZone('America/New_York')),
                10
            ],
            [
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 04:14:40', new DateTimeZone('America/New_York')),
                65
            ],
            [
                new DateTime('2013-03-29', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29', new DateTimeZone('America/New_York')),
            ],
            [
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 03:13:35', new DateTimeZone('America/Chicago')),
            ],
            [
                new DateTime('2013-03-29 04:13:35', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 03:13:49', new DateTimeZone('America/Chicago')),
                15
            ],
            [
                new DateTime('2013-03-30', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 23:00:00', new DateTimeZone('America/Chicago')),
            ],
            [
                new DateTime('2013-03-30', new DateTimeZone('America/New_York')),
                new DateTime('2013-03-29 23:01:30', new DateTimeZone('America/Chicago')),
                100
            ],
            [
                new DateTime('@1364616000'),
                new DateTime('2013-03-29 23:00:00', new DateTimeZone('America/Chicago')),
            ],
            [
                new DateTime('2013-03-29T05:13:35-0500'),
                new DateTime('2013-03-29T04:13:35-0600'),
            ],
            // Exception
            //array(new Exception('Exception 1'), new Exception('Exception 1')),
            // mixed types
            [0, '0'],
            ['0', 0],
            [2.3, '2.3'],
            ['2.3', 2.3],
<<<<<<< HEAD
            [(string) (1 / 3), 1 - 2 / 3],
            [1 / 3, (string) (1 - 2 / 3)],
=======
            [(string) (1/3), 1 - 2/3],
            [1/3, (string) (1 - 2/3)],
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
            ['string representation', new ClassWithToString],
            [new ClassWithToString, 'string representation'],
        ];
    }

    public function equalProvider()
    {
        // same |= equal
        return array_merge($this->equalValues(), $this->sameValues());
    }

    public function notEqualProvider()
    {
        return $this->notEqualValues();
    }

    public function sameProvider()
    {
        return $this->sameValues();
    }

    public function notSameProvider()
    {
        // not equal |= not same
        // equal, ¬same |= not same
        return array_merge($this->notEqualValues(), $this->equalValues());
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertEquals
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @dataProvider equalProvider
     */
    public function testAssertEqualsSucceeds($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
        $this->assertEquals($a, $b, '', $delta, 10, $canonicalize, $ignoreCase);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertEquals
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @dataProvider notEqualProvider
     */
    public function testAssertEqualsFails($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
        try {
            $this->assertEquals($a, $b, '', $delta, 10, $canonicalize, $ignoreCase);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertNotEquals
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @dataProvider notEqualProvider
     */
    public function testAssertNotEqualsSucceeds($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
        $this->assertNotEquals($a, $b, '', $delta, 10, $canonicalize, $ignoreCase);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertNotEquals
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @dataProvider equalProvider
     */
    public function testAssertNotEqualsFails($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
    {
        try {
            $this->assertNotEquals($a, $b, '', $delta, 10, $canonicalize, $ignoreCase);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertSame
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @dataProvider sameProvider
     */
    public function testAssertSameSucceeds($a, $b)
    {
        $this->assertSame($a, $b);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertSame
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @dataProvider notSameProvider
     */
    public function testAssertSameFails($a, $b)
    {
        try {
            $this->assertSame($a, $b);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertNotSame
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @dataProvider notSameProvider
     */
    public function testAssertNotSameSucceeds($a, $b)
    {
        $this->assertNotSame($a, $b);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertNotSame
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @dataProvider sameProvider
     */
    public function testAssertNotSameFails($a, $b)
    {
        try {
            $this->assertNotSame($a, $b);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertXmlFileEqualsXmlFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertXmlFileEqualsXmlFile()
    {
        $this->assertXmlFileEqualsXmlFile(
            $this->filesDirectory . 'foo.xml',
            $this->filesDirectory . 'foo.xml'
        );

        try {
            $this->assertXmlFileEqualsXmlFile(
                $this->filesDirectory . 'foo.xml',
                $this->filesDirectory . 'bar.xml'
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertXmlFileNotEqualsXmlFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertXmlFileNotEqualsXmlFile()
    {
        $this->assertXmlFileNotEqualsXmlFile(
            $this->filesDirectory . 'foo.xml',
            $this->filesDirectory . 'bar.xml'
        );

        try {
            $this->assertXmlFileNotEqualsXmlFile(
                $this->filesDirectory . 'foo.xml',
                $this->filesDirectory . 'foo.xml'
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertXmlStringEqualsXmlFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertXmlStringEqualsXmlFile()
    {
        $this->assertXmlStringEqualsXmlFile(
            $this->filesDirectory . 'foo.xml',
            file_get_contents($this->filesDirectory . 'foo.xml')
        );

        try {
            $this->assertXmlStringEqualsXmlFile(
                $this->filesDirectory . 'foo.xml',
                file_get_contents($this->filesDirectory . 'bar.xml')
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertXmlStringNotEqualsXmlFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testXmlStringNotEqualsXmlFile()
    {
        $this->assertXmlStringNotEqualsXmlFile(
            $this->filesDirectory . 'foo.xml',
            file_get_contents($this->filesDirectory . 'bar.xml')
        );

        try {
            $this->assertXmlStringNotEqualsXmlFile(
                $this->filesDirectory . 'foo.xml',
                file_get_contents($this->filesDirectory . 'foo.xml')
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertXmlStringEqualsXmlString
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertXmlStringEqualsXmlString()
    {
        $this->assertXmlStringEqualsXmlString('<root/>', '<root/>');

        try {
            $this->assertXmlStringEqualsXmlString('<foo/>', '<bar/>');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
     * @expectedException PHPUnit_Framework_Exception
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertXmlStringEqualsXmlString
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @ticket            1860
     */
    public function testAssertXmlStringEqualsXmlString2()
    {
        $this->assertXmlStringEqualsXmlString('<a></b>', '<c></d>');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertXmlStringEqualsXmlString
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @ticket 1860
     */
    public function testAssertXmlStringEqualsXmlString3()
    {
        $expected = <<<XML
<?xml version="1.0"?>
<root>
    <node />
</root>
XML;

        $actual = <<<XML
<?xml version="1.0"?>
<root>
<node />
</root>
XML;

        $this->assertXmlStringEqualsXmlString($expected, $actual);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertXmlStringNotEqualsXmlString
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertXmlStringNotEqualsXmlString()
    {
        $this->assertXmlStringNotEqualsXmlString('<foo/>', '<bar/>');

        try {
            $this->assertXmlStringNotEqualsXmlString('<root/>', '<root/>');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertEqualXMLStructure
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testXMLStructureIsSame()
    {
        $expected = new DOMDocument;
        $expected->load($this->filesDirectory . 'structureExpected.xml');

        $actual = new DOMDocument;
        $actual->load($this->filesDirectory . 'structureExpected.xml');

        $this->assertEqualXMLStructure(
            $expected->firstChild, $actual->firstChild, true
        );
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertEqualXMLStructure
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_ExpectationFailedException
     */
    public function testXMLStructureWrongNumberOfAttributes()
    {
        $expected = new DOMDocument;
        $expected->load($this->filesDirectory . 'structureExpected.xml');

        $actual = new DOMDocument;
        $actual->load($this->filesDirectory . 'structureWrongNumberOfAttributes.xml');

        $this->assertEqualXMLStructure(
            $expected->firstChild, $actual->firstChild, true
        );
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertEqualXMLStructure
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_ExpectationFailedException
     */
    public function testXMLStructureWrongNumberOfNodes()
    {
        $expected = new DOMDocument;
        $expected->load($this->filesDirectory . 'structureExpected.xml');

        $actual = new DOMDocument;
        $actual->load($this->filesDirectory . 'structureWrongNumberOfNodes.xml');

        $this->assertEqualXMLStructure(
            $expected->firstChild, $actual->firstChild, true
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertEqualXMLStructure
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testXMLStructureIsSameButDataIsNot()
    {
        $expected = new DOMDocument;
        $expected->load($this->filesDirectory . 'structureExpected.xml');

        $actual = new DOMDocument;
        $actual->load($this->filesDirectory . 'structureIsSameButDataIsNot.xml');

        $this->assertEqualXMLStructure(
            $expected->firstChild, $actual->firstChild, true
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertEqualXMLStructure
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testXMLStructureAttributesAreSameButValuesAreNot()
    {
        $expected = new DOMDocument;
        $expected->load($this->filesDirectory . 'structureExpected.xml');

        $actual = new DOMDocument;
        $actual->load($this->filesDirectory . 'structureAttributesAreSameButValuesAreNot.xml');

        $this->assertEqualXMLStructure(
            $expected->firstChild, $actual->firstChild, true
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertEqualXMLStructure
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testXMLStructureIgnoreTextNodes()
    {
        $expected = new DOMDocument;
        $expected->load($this->filesDirectory . 'structureExpected.xml');

        $actual = new DOMDocument;
        $actual->load($this->filesDirectory . 'structureIgnoreTextNodes.xml');

        $this->assertEqualXMLStructure(
            $expected->firstChild, $actual->firstChild, true
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringEqualsNumeric()
    {
        $this->assertEquals('0', 0);

        try {
            $this->assertEquals('0', 1);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringEqualsNumeric2()
    {
        $this->assertNotEquals('A', 0);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertIsReadable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertIsReadableThrowsException()
    {
        $this->assertIsReadable(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertIsReadable
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertIsReadable()
    {
        $this->assertIsReadable(__FILE__);

        try {
            $this->assertIsReadable(__DIR__ . DIRECTORY_SEPARATOR . 'NotExisting');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertNotIsReadable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotIsReadableThrowsException()
    {
        $this->assertNotIsReadable(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotIsReadable
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotIsReadable()
    {
        try {
            $this->assertNotIsReadable(__FILE__);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertIsWritable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertIsWritableThrowsException()
    {
        $this->assertIsWritable(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertIsWritable
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertIsWritable()
    {
        $this->assertIsWritable(__FILE__);

        try {
            $this->assertIsWritable(__DIR__ . DIRECTORY_SEPARATOR . 'NotExisting');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertNotIsWritable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotIsWritableThrowsException()
    {
        $this->assertNotIsWritable(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotIsWritable
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotIsWritable()
    {
        try {
            $this->assertNotIsWritable(__FILE__);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertDirectoryExists
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertDirectoryExistsThrowsException()
    {
        $this->assertDirectoryExists(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertDirectoryExists
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertDirectoryExists()
    {
        $this->assertDirectoryExists(__DIR__);

        try {
            $this->assertDirectoryExists(__DIR__ . DIRECTORY_SEPARATOR . 'NotExisting');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertDirectoryNotExists
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertDirectoryNotExistsThrowsException()
    {
        $this->assertDirectoryNotExists(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertDirectoryNotExists
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertDirectoryNotExists()
    {
        $this->assertDirectoryNotExists(__DIR__ . DIRECTORY_SEPARATOR . 'NotExisting');

        try {
            $this->assertDirectoryNotExists(__DIR__);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertDirectoryIsReadable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertDirectoryIsReadableThrowsException()
    {
        $this->assertDirectoryIsReadable(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertDirectoryIsReadable
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertDirectoryIsReadable()
    {
        $this->assertDirectoryIsReadable(__DIR__);

        try {
            $this->assertDirectoryIsReadable(__DIR__ . DIRECTORY_SEPARATOR . 'NotExisting');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertDirectoryNotIsReadable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertDirectoryNotIsReadableThrowsException()
    {
        $this->assertDirectoryNotIsReadable(null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertDirectoryIsWritable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertDirectoryIsWritableThrowsException()
    {
        $this->assertDirectoryIsWritable(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertDirectoryIsWritable
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertDirectoryIsWritable()
    {
        $this->assertDirectoryIsWritable(__DIR__);

        try {
            $this->assertDirectoryIsWritable(__DIR__ . DIRECTORY_SEPARATOR . 'NotExisting');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertDirectoryNotIsWritable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertDirectoryNotIsWritableThrowsException()
    {
        $this->assertDirectoryNotIsWritable(null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertFileExists
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertFileExistsThrowsException()
    {
        $this->assertFileExists(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertFileExists
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertFileExists()
    {
        $this->assertFileExists(__FILE__);

        try {
            $this->assertFileExists(__DIR__ . DIRECTORY_SEPARATOR . 'NotExisting');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertFileNotExists
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertFileNotExistsThrowsException()
    {
        $this->assertFileNotExists(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertFileNotExists
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertFileNotExists()
    {
        $this->assertFileNotExists(__DIR__ . DIRECTORY_SEPARATOR . 'NotExisting');

        try {
            $this->assertFileNotExists(__FILE__);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertFileIsReadable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertFileIsReadableThrowsException()
    {
        $this->assertFileIsReadable(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertFileIsReadable
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertFileIsReadable()
    {
        $this->assertFileIsReadable(__FILE__);

        try {
            $this->assertFileIsReadable(__DIR__ . DIRECTORY_SEPARATOR . 'NotExisting');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertFileNotIsReadable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertFileNotIsReadableThrowsException()
    {
        $this->assertFileNotIsReadable(null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertFileIsWritable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertFileIsWritableThrowsException()
    {
        $this->assertFileIsWritable(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertFileIsWritable
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertFileIsWritable()
    {
        $this->assertFileIsWritable(__FILE__);

        try {
            $this->assertFileIsWritable(__DIR__ . DIRECTORY_SEPARATOR . 'NotExisting');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertFileNotIsWritable
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertFileNotIsWritableThrowsException()
    {
        $this->assertFileNotIsWritable(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertObjectHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertObjectHasAttribute()
    {
        $o = new Author('Terry Pratchett');

        $this->assertObjectHasAttribute('name', $o);

        try {
            $this->assertObjectHasAttribute('foo', $o);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertObjectNotHasAttribute()
    {
        $o = new Author('Terry Pratchett');

        $this->assertObjectNotHasAttribute('foo', $o);

        try {
            $this->assertObjectNotHasAttribute('name', $o);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertFinite
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertFinite()
    {
        $this->assertFinite(1);

        try {
            $this->assertFinite(INF);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertInfinite
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertInfinite()
    {
        $this->assertInfinite(INF);

        try {
            $this->assertInfinite(1);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNan
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNan()
    {
        $this->assertNan(NAN);

        try {
            $this->assertNan(1);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNull
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNull()
    {
        $this->assertNull(null);

        try {
            $this->assertNull(new stdClass);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotNull
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotNull()
    {
        $this->assertNotNull(new stdClass);

        try {
            $this->assertNotNull(null);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertTrue
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertTrue()
    {
        $this->assertTrue(true);

        try {
            $this->assertTrue(false);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotTrue
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotTrue()
    {
        $this->assertNotTrue(false);
        $this->assertNotTrue(1);
        $this->assertNotTrue('true');

        try {
            $this->assertNotTrue(true);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertFalse
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertFalse()
    {
        $this->assertFalse(false);

        try {
            $this->assertFalse(true);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotFalse
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotFalse()
    {
        $this->assertNotFalse(true);
        $this->assertNotFalse(0);
        $this->assertNotFalse('');

        try {
            $this->assertNotFalse(false);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertRegExp
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertRegExpThrowsException()
    {
        $this->assertRegExp(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertRegExp
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertRegExpThrowsException2()
    {
        $this->assertRegExp('', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertNotRegExp
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotRegExpThrowsException()
    {
        $this->assertNotRegExp(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertNotRegExp
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotRegExpThrowsException2()
    {
        $this->assertNotRegExp('', null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertRegExp
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertRegExp()
    {
        $this->assertRegExp('/foo/', 'foobar');

        try {
            $this->assertRegExp('/foo/', 'bar');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotRegExp
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotRegExp()
    {
        $this->assertNotRegExp('/foo/', 'bar');

        try {
            $this->assertNotRegExp('/foo/', 'foobar');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertSame
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertSame()
    {
        $o = new stdClass;

        $this->assertSame($o, $o);

        try {
            $this->assertSame(
                new stdClass,
                new stdClass
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertSame
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertSame2()
    {
        $this->assertSame(true, true);
        $this->assertSame(false, false);

        try {
            $this->assertSame(true, false);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotSame
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotSame()
    {
        $this->assertNotSame(
            new stdClass,
            null
        );

        $this->assertNotSame(
            null,
            new stdClass
        );

        $this->assertNotSame(
            new stdClass,
            new stdClass
        );

        $o = new stdClass;

        try {
            $this->assertNotSame($o, $o);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotSame
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotSame2()
    {
        $this->assertNotSame(true, false);
        $this->assertNotSame(false, true);

        try {
            $this->assertNotSame(true, true);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotSame
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotSameFailsNull()
    {
        try {
            $this->assertNotSame(null, null);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertGreaterThan
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testGreaterThan()
    {
        $this->assertGreaterThan(1, 2);

        try {
            $this->assertGreaterThan(2, 1);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeGreaterThan
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAttributeGreaterThan()
    {
        $this->assertAttributeGreaterThan(
            1, 'bar', new ClassWithNonPublicAttributes
        );

        try {
            $this->assertAttributeGreaterThan(
                1, 'foo', new ClassWithNonPublicAttributes
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertGreaterThanOrEqual
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testGreaterThanOrEqual()
    {
        $this->assertGreaterThanOrEqual(1, 2);

        try {
            $this->assertGreaterThanOrEqual(2, 1);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeGreaterThanOrEqual
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAttributeGreaterThanOrEqual()
    {
        $this->assertAttributeGreaterThanOrEqual(
            1, 'bar', new ClassWithNonPublicAttributes
        );

        try {
            $this->assertAttributeGreaterThanOrEqual(
                2, 'foo', new ClassWithNonPublicAttributes
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertLessThan
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testLessThan()
    {
        $this->assertLessThan(2, 1);

        try {
            $this->assertLessThan(1, 2);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeLessThan
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAttributeLessThan()
    {
        $this->assertAttributeLessThan(
            2, 'foo', new ClassWithNonPublicAttributes
        );

        try {
            $this->assertAttributeLessThan(
                1, 'bar', new ClassWithNonPublicAttributes
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertLessThanOrEqual
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testLessThanOrEqual()
    {
        $this->assertLessThanOrEqual(2, 1);

        try {
            $this->assertLessThanOrEqual(1, 2);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeLessThanOrEqual
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAttributeLessThanOrEqual()
    {
        $this->assertAttributeLessThanOrEqual(
            2, 'foo', new ClassWithNonPublicAttributes
        );

        try {
            $this->assertAttributeLessThanOrEqual(
                1, 'bar', new ClassWithNonPublicAttributes
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::readAttribute
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testReadAttribute()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertEquals('foo', $this->readAttribute($obj, 'publicAttribute'));
        $this->assertEquals('bar', $this->readAttribute($obj, 'protectedAttribute'));
        $this->assertEquals('baz', $this->readAttribute($obj, 'privateAttribute'));
        $this->assertEquals('bar', $this->readAttribute($obj, 'protectedParentAttribute'));
        //$this->assertEquals('bar', $this->readAttribute($obj, 'privateParentAttribute'));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::readAttribute
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testReadAttribute2()
    {
        $this->assertEquals('foo', $this->readAttribute('ClassWithNonPublicAttributes', 'publicStaticAttribute'));
        $this->assertEquals('bar', $this->readAttribute('ClassWithNonPublicAttributes', 'protectedStaticAttribute'));
        $this->assertEquals('baz', $this->readAttribute('ClassWithNonPublicAttributes', 'privateStaticAttribute'));
        $this->assertEquals('foo', $this->readAttribute('ClassWithNonPublicAttributes', 'protectedStaticParentAttribute'));
        $this->assertEquals('foo', $this->readAttribute('ClassWithNonPublicAttributes', 'privateStaticParentAttribute'));
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::readAttribute
     * @covers            PHPUnit_Framework_Assert::getStaticAttribute
     * @covers            PHPUnit_Framework_Assert::getObjectAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testReadAttribute3()
    {
        $this->readAttribute('StdClass', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::readAttribute
     * @covers            PHPUnit_Framework_Assert::getStaticAttribute
     * @covers            PHPUnit_Framework_Assert::getObjectAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testReadAttribute4()
    {
        $this->readAttribute('NotExistingClass', 'foo');
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::readAttribute
     * @covers            PHPUnit_Framework_Assert::getStaticAttribute
     * @covers            PHPUnit_Framework_Assert::getObjectAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testReadAttribute5()
    {
        $this->readAttribute(null, 'foo');
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::readAttribute
     * @covers            PHPUnit_Framework_Assert::getStaticAttribute
     * @covers            PHPUnit_Framework_Assert::getObjectAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testReadAttributeIfAttributeNameIsNotValid()
    {
        $this->readAttribute('StdClass', '2');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetStaticAttributeRaisesExceptionForInvalidFirstArgument()
    {
        $this->getStaticAttribute(null, 'foo');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetStaticAttributeRaisesExceptionForInvalidFirstArgument2()
    {
        $this->getStaticAttribute('NotExistingClass', 'foo');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument()
    {
        $this->getStaticAttribute('stdClass', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument2()
    {
        $this->getStaticAttribute('stdClass', '0');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::getStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument3()
    {
        $this->getStaticAttribute('stdClass', 'foo');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetObjectAttributeRaisesExceptionForInvalidFirstArgument()
    {
        $this->getObjectAttribute(null, 'foo');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument()
    {
        $this->getObjectAttribute(new stdClass, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument2()
    {
        $this->getObjectAttribute(new stdClass, '0');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument3()
    {
        $this->getObjectAttribute(new stdClass, 'foo');
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::getObjectAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testGetObjectAttributeWorksForInheritedAttributes()
    {
        $this->assertEquals(
            'bar',
            $this->getObjectAttribute(new ClassWithNonPublicAttributes, 'privateParentAttribute')
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPublicAttributeContains()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeContains('foo', 'publicArray', $obj);

        try {
            $this->assertAttributeContains('bar', 'publicArray', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeContainsOnly
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPublicAttributeContainsOnly()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeContainsOnly('string', 'publicArray', $obj);

        try {
            $this->assertAttributeContainsOnly('integer', 'publicArray', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPublicAttributeNotContains()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeNotContains('bar', 'publicArray', $obj);

        try {
            $this->assertAttributeNotContains('foo', 'publicArray', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotContainsOnly
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPublicAttributeNotContainsOnly()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeNotContainsOnly('integer', 'publicArray', $obj);

        try {
            $this->assertAttributeNotContainsOnly('string', 'publicArray', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertProtectedAttributeContains()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeContains('bar', 'protectedArray', $obj);

        try {
            $this->assertAttributeContains('foo', 'protectedArray', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertProtectedAttributeNotContains()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeNotContains('foo', 'protectedArray', $obj);

        try {
            $this->assertAttributeNotContains('bar', 'protectedArray', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPrivateAttributeContains()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeContains('baz', 'privateArray', $obj);

        try {
            $this->assertAttributeContains('foo', 'privateArray', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPrivateAttributeNotContains()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeNotContains('foo', 'privateArray', $obj);

        try {
            $this->assertAttributeNotContains('baz', 'privateArray', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertAttributeContainsNonObject()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeContains(true, 'privateArray', $obj);

        try {
            $this->assertAttributeContains(true, 'privateArray', $obj, '', false, true, true);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertAttributeNotContainsNonObject()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeNotContains(true, 'privateArray', $obj, '', false, true, true);

        try {
            $this->assertAttributeNotContains(true, 'privateArray', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPublicAttributeEquals()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeEquals('foo', 'publicAttribute', $obj);

        try {
            $this->assertAttributeEquals('bar', 'publicAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPublicAttributeNotEquals()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeNotEquals('bar', 'publicAttribute', $obj);

        try {
            $this->assertAttributeNotEquals('foo', 'publicAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeSame
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPublicAttributeSame()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeSame('foo', 'publicAttribute', $obj);

        try {
            $this->assertAttributeSame('bar', 'publicAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotSame
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPublicAttributeNotSame()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeNotSame('bar', 'publicAttribute', $obj);

        try {
            $this->assertAttributeNotSame('foo', 'publicAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertProtectedAttributeEquals()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeEquals('bar', 'protectedAttribute', $obj);

        try {
            $this->assertAttributeEquals('foo', 'protectedAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertProtectedAttributeNotEquals()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeNotEquals('foo', 'protectedAttribute', $obj);

        try {
            $this->assertAttributeNotEquals('bar', 'protectedAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPrivateAttributeEquals()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeEquals('baz', 'privateAttribute', $obj);

        try {
            $this->assertAttributeEquals('foo', 'privateAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPrivateAttributeNotEquals()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertAttributeNotEquals('foo', 'privateAttribute', $obj);

        try {
            $this->assertAttributeNotEquals('baz', 'privateAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPublicStaticAttributeEquals()
    {
        $this->assertAttributeEquals('foo', 'publicStaticAttribute', 'ClassWithNonPublicAttributes');

        try {
            $this->assertAttributeEquals('bar', 'publicStaticAttribute', 'ClassWithNonPublicAttributes');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPublicStaticAttributeNotEquals()
    {
        $this->assertAttributeNotEquals('bar', 'publicStaticAttribute', 'ClassWithNonPublicAttributes');

        try {
            $this->assertAttributeNotEquals('foo', 'publicStaticAttribute', 'ClassWithNonPublicAttributes');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertProtectedStaticAttributeEquals()
    {
        $this->assertAttributeEquals('bar', 'protectedStaticAttribute', 'ClassWithNonPublicAttributes');

        try {
            $this->assertAttributeEquals('foo', 'protectedStaticAttribute', 'ClassWithNonPublicAttributes');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertProtectedStaticAttributeNotEquals()
    {
        $this->assertAttributeNotEquals('foo', 'protectedStaticAttribute', 'ClassWithNonPublicAttributes');

        try {
            $this->assertAttributeNotEquals('bar', 'protectedStaticAttribute', 'ClassWithNonPublicAttributes');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPrivateStaticAttributeEquals()
    {
        $this->assertAttributeEquals('baz', 'privateStaticAttribute', 'ClassWithNonPublicAttributes');

        try {
            $this->assertAttributeEquals('foo', 'privateStaticAttribute', 'ClassWithNonPublicAttributes');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertPrivateStaticAttributeNotEquals()
    {
        $this->assertAttributeNotEquals('foo', 'privateStaticAttribute', 'ClassWithNonPublicAttributes');

        try {
            $this->assertAttributeNotEquals('baz', 'privateStaticAttribute', 'ClassWithNonPublicAttributes');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasAttributeThrowsException()
    {
        $this->assertClassHasAttribute(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasAttributeThrowsException2()
    {
        $this->assertClassHasAttribute('foo', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
        $this->assertClassHasAttribute('1', 'ClassWithNonPublicAttributes');
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasAttributeThrowsException()
    {
        $this->assertClassNotHasAttribute(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasAttributeThrowsException2()
    {
        $this->assertClassNotHasAttribute('foo', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
        $this->assertClassNotHasAttribute('1', 'ClassWithNonPublicAttributes');
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassHasStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasStaticAttributeThrowsException()
    {
        $this->assertClassHasStaticAttribute(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassHasStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasStaticAttributeThrowsException2()
    {
        $this->assertClassHasStaticAttribute('foo', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassHasStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassHasStaticAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
        $this->assertClassHasStaticAttribute('1', 'ClassWithNonPublicAttributes');
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasStaticAttributeThrowsException()
    {
        $this->assertClassNotHasStaticAttribute(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasStaticAttributeThrowsException2()
    {
        $this->assertClassNotHasStaticAttribute('foo', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertClassNotHasStaticAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertClassNotHasStaticAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
        $this->assertClassNotHasStaticAttribute('1', 'ClassWithNonPublicAttributes');
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertObjectHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectHasAttributeThrowsException()
    {
        $this->assertObjectHasAttribute(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertObjectHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectHasAttributeThrowsException2()
    {
        $this->assertObjectHasAttribute('foo', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertObjectHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
        $this->assertObjectHasAttribute('1', 'ClassWithNonPublicAttributes');
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertObjectNotHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectNotHasAttributeThrowsException()
    {
        $this->assertObjectNotHasAttribute(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertObjectNotHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectNotHasAttributeThrowsException2()
    {
        $this->assertObjectNotHasAttribute('foo', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertObjectNotHasAttribute
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertObjectNotHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
    {
        $this->assertObjectNotHasAttribute('1', 'ClassWithNonPublicAttributes');
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertClassHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testClassHasPublicAttribute()
    {
        $this->assertClassHasAttribute('publicAttribute', 'ClassWithNonPublicAttributes');

        try {
            $this->assertClassHasAttribute('attribute', 'ClassWithNonPublicAttributes');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertClassNotHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testClassNotHasPublicAttribute()
    {
        $this->assertClassNotHasAttribute('attribute', 'ClassWithNonPublicAttributes');

        try {
            $this->assertClassNotHasAttribute('publicAttribute', 'ClassWithNonPublicAttributes');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertClassHasStaticAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testClassHasPublicStaticAttribute()
    {
        $this->assertClassHasStaticAttribute('publicStaticAttribute', 'ClassWithNonPublicAttributes');

        try {
            $this->assertClassHasStaticAttribute('attribute', 'ClassWithNonPublicAttributes');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertClassNotHasStaticAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testClassNotHasPublicStaticAttribute()
    {
        $this->assertClassNotHasStaticAttribute('attribute', 'ClassWithNonPublicAttributes');

        try {
            $this->assertClassNotHasStaticAttribute('publicStaticAttribute', 'ClassWithNonPublicAttributes');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertObjectHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testObjectHasPublicAttribute()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertObjectHasAttribute('publicAttribute', $obj);

        try {
            $this->assertObjectHasAttribute('attribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testObjectNotHasPublicAttribute()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertObjectNotHasAttribute('attribute', $obj);

        try {
            $this->assertObjectNotHasAttribute('publicAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertObjectHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testObjectHasOnTheFlyAttribute()
    {
        $obj      = new stdClass;
        $obj->foo = 'bar';

        $this->assertObjectHasAttribute('foo', $obj);

        try {
            $this->assertObjectHasAttribute('bar', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testObjectNotHasOnTheFlyAttribute()
    {
        $obj      = new stdClass;
        $obj->foo = 'bar';

        $this->assertObjectNotHasAttribute('bar', $obj);

        try {
            $this->assertObjectNotHasAttribute('foo', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertObjectHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testObjectHasProtectedAttribute()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertObjectHasAttribute('protectedAttribute', $obj);

        try {
            $this->assertObjectHasAttribute('attribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testObjectNotHasProtectedAttribute()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertObjectNotHasAttribute('attribute', $obj);

        try {
            $this->assertObjectNotHasAttribute('protectedAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertObjectHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testObjectHasPrivateAttribute()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertObjectHasAttribute('privateAttribute', $obj);

        try {
            $this->assertObjectHasAttribute('attribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertObjectNotHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testObjectNotHasPrivateAttribute()
    {
        $obj = new ClassWithNonPublicAttributes;

        $this->assertObjectNotHasAttribute('attribute', $obj);

        try {
            $this->assertObjectNotHasAttribute('privateAttribute', $obj);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::attribute
     * @covers PHPUnit_Framework_Assert::equalTo
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatAttributeEquals()
    {
        $this->assertThat(
            new ClassWithNonPublicAttributes,
            $this->attribute(
                $this->equalTo('foo'),
                'publicAttribute'
            )
        );
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertThat
     * @covers            PHPUnit_Framework_Assert::attribute
     * @covers            PHPUnit_Framework_Assert::equalTo
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertThatAttributeEquals2()
    {
        $this->assertThat(
            new ClassWithNonPublicAttributes,
            $this->attribute(
                $this->equalTo('bar'),
                'publicAttribute'
            )
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::attribute
     * @covers PHPUnit_Framework_Assert::equalTo
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatAttributeEqualTo()
    {
        $this->assertThat(
            new ClassWithNonPublicAttributes,
            $this->attributeEqualTo('publicAttribute', 'foo')
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::anything
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatAnything()
    {
        $this->assertThat('anything', $this->anything());
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isTrue
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatIsTrue()
    {
        $this->assertThat(true, $this->isTrue());
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isFalse
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatIsFalse()
    {
        $this->assertThat(false, $this->isFalse());
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isJson
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatIsJson()
    {
        $this->assertThat('{}', $this->isJson());
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::anything
     * @covers PHPUnit_Framework_Assert::logicalAnd
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatAnythingAndAnything()
    {
        $this->assertThat(
            'anything',
            $this->logicalAnd(
                $this->anything(), $this->anything()
            )
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::anything
     * @covers PHPUnit_Framework_Assert::logicalOr
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatAnythingOrAnything()
    {
        $this->assertThat(
            'anything',
            $this->logicalOr(
                $this->anything(), $this->anything()
            )
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::anything
     * @covers PHPUnit_Framework_Assert::logicalNot
     * @covers PHPUnit_Framework_Assert::logicalXor
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatAnythingXorNotAnything()
    {
        $this->assertThat(
            'anything',
            $this->logicalXor(
                $this->anything(),
                $this->logicalNot($this->anything())
            )
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::contains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatContains()
    {
        $this->assertThat(['foo'], $this->contains('foo'));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::stringContains
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatStringContains()
    {
        $this->assertThat('barfoobar', $this->stringContains('foo'));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::containsOnly
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatContainsOnly()
    {
        $this->assertThat(['foo'], $this->containsOnly('string'));
    }
<<<<<<< HEAD

=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::containsOnlyInstancesOf
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatContainsOnlyInstancesOf()
    {
        $this->assertThat([new Book], $this->containsOnlyInstancesOf('Book'));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::arrayHasKey
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatArrayHasKey()
    {
        $this->assertThat(['foo' => 'bar'], $this->arrayHasKey('foo'));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::classHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatClassHasAttribute()
    {
        $this->assertThat(
            new ClassWithNonPublicAttributes,
            $this->classHasAttribute('publicAttribute')
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::classHasStaticAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatClassHasStaticAttribute()
    {
        $this->assertThat(
            new ClassWithNonPublicAttributes,
            $this->classHasStaticAttribute('publicStaticAttribute')
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::objectHasAttribute
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatObjectHasAttribute()
    {
        $this->assertThat(
            new ClassWithNonPublicAttributes,
            $this->objectHasAttribute('publicAttribute')
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::equalTo
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatEqualTo()
    {
        $this->assertThat('foo', $this->equalTo('foo'));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::identicalTo
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatIdenticalTo()
    {
        $value      = new stdClass;
        $constraint = $this->identicalTo($value);

        $this->assertThat($value, $constraint);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isInstanceOf
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatIsInstanceOf()
    {
        $this->assertThat(new stdClass, $this->isInstanceOf('StdClass'));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isType
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatIsType()
    {
        $this->assertThat('string', $this->isType('string'));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::isEmpty
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatIsEmpty()
    {
        $this->assertThat([], $this->isEmpty());
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::fileExists
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatFileExists()
    {
        $this->assertThat(__FILE__, $this->fileExists());
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::greaterThan
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatGreaterThan()
    {
        $this->assertThat(2, $this->greaterThan(1));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::greaterThanOrEqual
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatGreaterThanOrEqual()
    {
        $this->assertThat(2, $this->greaterThanOrEqual(1));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::lessThan
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatLessThan()
    {
        $this->assertThat(1, $this->lessThan(2));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::lessThanOrEqual
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatLessThanOrEqual()
    {
        $this->assertThat(1, $this->lessThanOrEqual(2));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::matchesRegularExpression
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatMatchesRegularExpression()
    {
        $this->assertThat('foobar', $this->matchesRegularExpression('/foo/'));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::callback
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatCallback()
    {
        $this->assertThat(
            null,
            $this->callback(function ($other) {
                return true;
            })
        );
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertThat
     * @covers PHPUnit_Framework_Assert::countOf
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertThatCountOf()
    {
        $this->assertThat([1], $this->countOf(1));
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertFileEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertFileEquals()
    {
        $this->assertFileEquals(
            $this->filesDirectory . 'foo.xml',
            $this->filesDirectory . 'foo.xml'
        );

        try {
            $this->assertFileEquals(
                $this->filesDirectory . 'foo.xml',
                $this->filesDirectory . 'bar.xml'
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertFileNotEquals
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertFileNotEquals()
    {
        $this->assertFileNotEquals(
            $this->filesDirectory . 'foo.xml',
            $this->filesDirectory . 'bar.xml'
        );

        try {
            $this->assertFileNotEquals(
                $this->filesDirectory . 'foo.xml',
                $this->filesDirectory . 'foo.xml'
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertStringEqualsFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringEqualsFile()
    {
        $this->assertStringEqualsFile(
            $this->filesDirectory . 'foo.xml',
            file_get_contents($this->filesDirectory . 'foo.xml')
        );

        try {
            $this->assertStringEqualsFile(
                $this->filesDirectory . 'foo.xml',
                file_get_contents($this->filesDirectory . 'bar.xml')
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertStringNotEqualsFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringNotEqualsFile()
    {
        $this->assertStringNotEqualsFile(
            $this->filesDirectory . 'foo.xml',
            file_get_contents($this->filesDirectory . 'bar.xml')
        );

        try {
            $this->assertStringNotEqualsFile(
                $this->filesDirectory . 'foo.xml',
                file_get_contents($this->filesDirectory . 'foo.xml')
            );
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertStringStartsWith
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringStartsWithThrowsException()
    {
        $this->assertStringStartsWith(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertStringStartsWith
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringStartsWithThrowsException2()
    {
        $this->assertStringStartsWith('', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertStringStartsNotWith
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringStartsNotWithThrowsException()
    {
        $this->assertStringStartsNotWith(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertStringStartsNotWith
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringStartsNotWithThrowsException2()
    {
        $this->assertStringStartsNotWith('', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertStringEndsWith
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringEndsWithThrowsException()
    {
        $this->assertStringEndsWith(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertStringEndsWith
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringEndsWithThrowsException2()
    {
        $this->assertStringEndsWith('', null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertStringEndsNotWith
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringEndsNotWithThrowsException()
    {
        $this->assertStringEndsNotWith(null, null);
    }

    /**
<<<<<<< HEAD
=======
     * @covers            PHPUnit_Framework_Assert::assertStringEndsNotWith
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringEndsNotWithThrowsException2()
    {
        $this->assertStringEndsNotWith('', null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertStringStartsWith
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringStartsWith()
    {
        $this->assertStringStartsWith('prefix', 'prefixfoo');

        try {
            $this->assertStringStartsWith('prefix', 'foo');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertStringStartsNotWith
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringStartsNotWith()
    {
        $this->assertStringStartsNotWith('prefix', 'foo');

        try {
            $this->assertStringStartsNotWith('prefix', 'prefixfoo');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertStringEndsWith
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringEndsWith()
    {
        $this->assertStringEndsWith('suffix', 'foosuffix');

        try {
            $this->assertStringEndsWith('suffix', 'foo');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertStringEndsNotWith
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringEndsNotWith()
    {
        $this->assertStringEndsNotWith('suffix', 'foo');

        try {
            $this->assertStringEndsNotWith('suffix', 'foosuffix');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormat
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringMatchesFormatRaisesExceptionForInvalidFirstArgument()
    {
        $this->assertStringMatchesFormat(null, '');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormat
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringMatchesFormatRaisesExceptionForInvalidSecondArgument()
    {
        $this->assertStringMatchesFormat('', null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormat
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringMatchesFormat()
    {
        $this->assertStringMatchesFormat('*%s*', '***');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormat
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_AssertionFailedError
     */
    public function testAssertStringMatchesFormatFailure()
    {
        $this->assertStringMatchesFormat('*%s*', '**');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormat
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringNotMatchesFormatRaisesExceptionForInvalidFirstArgument()
    {
        $this->assertStringNotMatchesFormat(null, '');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormat
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringNotMatchesFormatRaisesExceptionForInvalidSecondArgument()
    {
        $this->assertStringNotMatchesFormat('', null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormat
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringNotMatchesFormat()
    {
        $this->assertStringNotMatchesFormat('*%s*', '**');

        try {
            $this->assertStringMatchesFormat('*%s*', '**');
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertEmpty
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertEmpty()
    {
        $this->assertEmpty([]);

        try {
            $this->assertEmpty(['foo']);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotEmpty
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotEmpty()
    {
        $this->assertNotEmpty(['foo']);

        try {
            $this->assertNotEmpty([]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeEmpty
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertAttributeEmpty()
    {
        $o    = new stdClass;
        $o->a = [];

        $this->assertAttributeEmpty('a', $o);

        try {
            $o->a = ['b'];
            $this->assertAttributeEmpty('a', $o);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotEmpty
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertAttributeNotEmpty()
    {
        $o    = new stdClass;
        $o->a = ['b'];

        $this->assertAttributeNotEmpty('a', $o);

        try {
            $o->a = [];
            $this->assertAttributeNotEmpty('a', $o);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::markTestIncomplete
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testMarkTestIncomplete()
    {
        try {
            $this->markTestIncomplete('incomplete');
        } catch (PHPUnit_Framework_IncompleteTestError $e) {
            $this->assertEquals('incomplete', $e->getMessage());

            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::markTestSkipped
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testMarkTestSkipped()
    {
        try {
            $this->markTestSkipped('skipped');
        } catch (PHPUnit_Framework_SkippedTestError $e) {
            $this->assertEquals('skipped', $e->getMessage());

            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertCount
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertCount()
    {
        $this->assertCount(2, [1, 2]);

        try {
            $this->assertCount(2, [1, 2, 3]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertCount
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertCountTraversable()
    {
        $this->assertCount(2, new ArrayIterator([1, 2]));

        try {
            $this->assertCount(2, new ArrayIterator([1, 2, 3]));
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertCount
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertCountThrowsExceptionIfExpectedCountIsNoInteger()
    {
        try {
            $this->assertCount('a', []);
        } catch (PHPUnit_Framework_Exception $e) {
            $this->assertEquals('Argument #1 (No Value) of PHPUnit_Framework_Assert::assertCount() must be a integer', $e->getMessage());

            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertCount
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertCountThrowsExceptionIfElementIsNotCountable()
    {
        try {
            $this->assertCount(2, '');
        } catch (PHPUnit_Framework_Exception $e) {
            $this->assertEquals('Argument #2 (No Value) of PHPUnit_Framework_Assert::assertCount() must be a countable or traversable', $e->getMessage());

            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeCount
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertAttributeCount()
    {
        $o    = new stdClass;
        $o->a = [];

        $this->assertAttributeCount(0, 'a', $o);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotCount
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotCount()
    {
        $this->assertNotCount(2, [1, 2, 3]);

        try {
            $this->assertNotCount(2, [1, 2]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertNotCount
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotCountThrowsExceptionIfExpectedCountIsNoInteger()
    {
        $this->assertNotCount('a', []);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertNotCount
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotCountThrowsExceptionIfElementIsNotCountable()
    {
        $this->assertNotCount(2, '');
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotCount
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertAttributeNotCount()
    {
        $o    = new stdClass;
        $o->a = [];

        $this->assertAttributeNotCount(1, 'a', $o);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertSameSize
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertSameSize()
    {
        $this->assertSameSize([1, 2], [3, 4]);

        try {
            $this->assertSameSize([1, 2], [1, 2, 3]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertSameSize
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertSameSizeThrowsExceptionIfExpectedIsNotCountable()
    {
        try {
            $this->assertSameSize('a', []);
        } catch (PHPUnit_Framework_Exception $e) {
            $this->assertEquals('Argument #1 (No Value) of PHPUnit_Framework_Assert::assertSameSize() must be a countable or traversable', $e->getMessage());

            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertSameSize
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertSameSizeThrowsExceptionIfActualIsNotCountable()
    {
        try {
            $this->assertSameSize([], '');
        } catch (PHPUnit_Framework_Exception $e) {
            $this->assertEquals('Argument #2 (No Value) of PHPUnit_Framework_Assert::assertSameSize() must be a countable or traversable', $e->getMessage());

            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotSameSize
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotSameSize()
    {
        $this->assertNotSameSize([1, 2], [1, 2, 3]);

        try {
            $this->assertNotSameSize([1, 2], [3, 4]);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertNotSameSize
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotSameSizeThrowsExceptionIfExpectedIsNotCountable()
    {
        $this->assertNotSameSize('a', []);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertNotSameSize
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotSameSizeThrowsExceptionIfActualIsNotCountable()
    {
        $this->assertNotSameSize([], '');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertJson
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertJsonRaisesExceptionForInvalidArgument()
    {
        $this->assertJson(null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertJson
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertJson()
    {
        $this->assertJson('{}');
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringEqualsJsonString
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertJsonStringEqualsJsonString()
    {
        $expected = '{"Mascott" : "Tux"}';
        $actual   = '{"Mascott" : "Tux"}';
        $message  = 'Given Json strings do not match';

        $this->assertJsonStringEqualsJsonString($expected, $actual, $message);
    }

    /**
     * @dataProvider validInvalidJsonDataprovider
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertJsonStringEqualsJsonString
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     */
    public function testAssertJsonStringEqualsJsonStringErrorRaised($expected, $actual)
    {
        try {
            $this->assertJsonStringEqualsJsonString($expected, $actual);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }
        $this->fail('Expected exception not found');
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonString
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertJsonStringNotEqualsJsonString()
    {
        $expected = '{"Mascott" : "Beastie"}';
        $actual   = '{"Mascott" : "Tux"}';
        $message  = 'Given Json strings do match';

        $this->assertJsonStringNotEqualsJsonString($expected, $actual, $message);
    }

    /**
     * @dataProvider validInvalidJsonDataprovider
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonString
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     */
    public function testAssertJsonStringNotEqualsJsonStringErrorRaised($expected, $actual)
    {
        try {
            $this->assertJsonStringNotEqualsJsonString($expected, $actual);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }
        $this->fail('Expected exception not found');
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringEqualsJsonFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertJsonStringEqualsJsonFile()
    {
        $file    = __DIR__ . '/../_files/JsonData/simpleObject.json';
        $actual  = json_encode(['Mascott' => 'Tux']);
        $message = '';
        $this->assertJsonStringEqualsJsonFile($file, $actual, $message);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringEqualsJsonFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertJsonStringEqualsJsonFileExpectingExpectationFailedException()
    {
        $file    = __DIR__ . '/../_files/JsonData/simpleObject.json';
        $actual  = json_encode(['Mascott' => 'Beastie']);
        $message = '';
        try {
            $this->assertJsonStringEqualsJsonFile($file, $actual, $message);
        } catch (PHPUnit_Framework_ExpectationFailedException $e) {
            $this->assertEquals(
                'Failed asserting that \'{"Mascott":"Beastie"}\' matches JSON string "{"Mascott":"Tux"}".',
                $e->getMessage()
            );

            return;
        }

        $this->fail('Expected Exception not thrown.');
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringEqualsJsonFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertJsonStringEqualsJsonFileExpectingException()
    {
        $file = __DIR__ . '/../_files/JsonData/simpleObject.json';
        try {
            $this->assertJsonStringEqualsJsonFile($file, null);
        } catch (PHPUnit_Framework_Exception $e) {
            return;
        }
        $this->fail('Expected Exception not thrown.');
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertJsonStringNotEqualsJsonFile()
    {
        $file    = __DIR__ . '/../_files/JsonData/simpleObject.json';
        $actual  = json_encode(['Mascott' => 'Beastie']);
        $message = '';
        $this->assertJsonStringNotEqualsJsonFile($file, $actual, $message);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertJsonStringNotEqualsJsonFileExpectingException()
    {
        $file = __DIR__ . '/../_files/JsonData/simpleObject.json';
        try {
            $this->assertJsonStringNotEqualsJsonFile($file, null);
        } catch (PHPUnit_Framework_Exception $e) {
            return;
        }
        $this->fail('Expected exception not found.');
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertJsonFileNotEqualsJsonFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertJsonFileNotEqualsJsonFile()
    {
        $fileExpected = __DIR__ . '/../_files/JsonData/simpleObject.json';
        $fileActual   = __DIR__ . '/../_files/JsonData/arrayObject.json';
        $message      = '';
        $this->assertJsonFileNotEqualsJsonFile($fileExpected, $fileActual, $message);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertJsonFileEqualsJsonFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertJsonFileEqualsJsonFile()
    {
        $file    = __DIR__ . '/../_files/JsonData/simpleObject.json';
        $message = '';
        $this->assertJsonFileEqualsJsonFile($file, $file, $message);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertInstanceOf
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertInstanceOf()
    {
        $this->assertInstanceOf('stdClass', new stdClass);

        try {
            $this->assertInstanceOf('Exception', new stdClass);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertInstanceOf
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertInstanceOfThrowsExceptionForInvalidArgument()
    {
        $this->assertInstanceOf(null, new stdClass);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeInstanceOf
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertAttributeInstanceOf()
    {
        $o    = new stdClass;
        $o->a = new stdClass;

        $this->assertAttributeInstanceOf('stdClass', 'a', $o);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotInstanceOf
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotInstanceOf()
    {
        $this->assertNotInstanceOf('Exception', new stdClass);

        try {
            $this->assertNotInstanceOf('stdClass', new stdClass);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertNotInstanceOf
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotInstanceOfThrowsExceptionForInvalidArgument()
    {
        $this->assertNotInstanceOf(null, new stdClass);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotInstanceOf
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertAttributeNotInstanceOf()
    {
        $o    = new stdClass;
        $o->a = new stdClass;

        $this->assertAttributeNotInstanceOf('Exception', 'a', $o);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertInternalType
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertInternalType()
    {
        $this->assertInternalType('integer', 1);

        try {
            $this->assertInternalType('string', 1);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertInternalType
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertInternalTypeDouble()
    {
        $this->assertInternalType('double', 1.0);

        try {
            $this->assertInternalType('double', 1);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertInternalType
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertInternalTypeThrowsExceptionForInvalidArgument()
    {
        $this->assertInternalType(null, 1);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeInternalType
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertAttributeInternalType()
    {
        $o    = new stdClass;
        $o->a = 1;

        $this->assertAttributeInternalType('integer', 'a', $o);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertNotInternalType
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertNotInternalType()
    {
        $this->assertNotInternalType('string', 1);

        try {
            $this->assertNotInternalType('integer', 1);
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertNotInternalType
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertNotInternalTypeThrowsExceptionForInvalidArgument()
    {
        $this->assertNotInternalType(null, 1);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertAttributeNotInternalType
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertAttributeNotInternalType()
    {
        $o    = new stdClass;
        $o->a = 1;

        $this->assertAttributeNotInternalType('string', 'a', $o);
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormatFile
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringMatchesFormatFileThrowsExceptionForInvalidArgument()
    {
        $this->assertStringMatchesFormatFile('not_existing_file', '');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormatFile
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringMatchesFormatFileThrowsExceptionForInvalidArgument2()
    {
        $this->assertStringMatchesFormatFile($this->filesDirectory . 'expectedFileFormat.txt', null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertStringMatchesFormatFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringMatchesFormatFile()
    {
        $this->assertStringMatchesFormatFile($this->filesDirectory . 'expectedFileFormat.txt', "FOO\n");

        try {
            $this->assertStringMatchesFormatFile($this->filesDirectory . 'expectedFileFormat.txt', "BAR\n");
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormatFile
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringNotMatchesFormatFileThrowsExceptionForInvalidArgument()
    {
        $this->assertStringNotMatchesFormatFile('not_existing_file', '');
    }

    /**
<<<<<<< HEAD
=======
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormatFile
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @expectedException PHPUnit_Framework_Exception
     */
    public function testAssertStringNotMatchesFormatFileThrowsExceptionForInvalidArgument2()
    {
        $this->assertStringNotMatchesFormatFile($this->filesDirectory . 'expectedFileFormat.txt', null);
    }

<<<<<<< HEAD
=======
    /**
     * @covers PHPUnit_Framework_Assert::assertStringNotMatchesFormatFile
     */
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    public function testAssertStringNotMatchesFormatFile()
    {
        $this->assertStringNotMatchesFormatFile($this->filesDirectory . 'expectedFileFormat.txt', "BAR\n");

        try {
            $this->assertStringNotMatchesFormatFile($this->filesDirectory . 'expectedFileFormat.txt', "FOO\n");
        } catch (PHPUnit_Framework_AssertionFailedError $e) {
            return;
        }

        $this->fail();
    }

    /**
     * @return array
     */
    public static function validInvalidJsonDataprovider()
    {
        return [
            'error syntax in expected JSON' => ['{"Mascott"::}', '{"Mascott" : "Tux"}'],
            'error UTF-8 in actual JSON'    => ['{"Mascott" : "Tux"}', '{"Mascott" : :}'],
        ];
    }
}
