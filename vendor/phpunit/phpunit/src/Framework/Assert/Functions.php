<?php
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * Returns a matcher that matches when the method is executed
 * zero or more times.
 *
 * @return PHPUnit_Framework_MockObject_Matcher_AnyInvokedCount
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function any()
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::any',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsAnything matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsAnything
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function anything()
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::anything',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_ArrayHasKey matcher object.
 *
 * @param mixed $key
 *
 * @return PHPUnit_Framework_Constraint_ArrayHasKey
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function arrayHasKey($key)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::arrayHasKey',
        func_get_args()
    );
}

/**
 * Asserts that an array has a specified key.
 *
 * @param mixed             $key
 * @param array|ArrayAccess $array
 * @param string            $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertArrayHasKey($key, $array, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertArrayHasKey',
        func_get_args()
    );
}

/**
 * Asserts that an array has a specified subset.
 *
 * @param array|ArrayAccess $subset
 * @param array|ArrayAccess $array
 * @param bool              $strict  Check for object identity
 * @param string            $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 4.4.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertArraySubset($subset, $array, $strict = false, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertArraySubset',
        func_get_args()
    );
}

/**
 * Asserts that an array does not have a specified key.
 *
 * @param mixed             $key
 * @param array|ArrayAccess $array
 * @param string            $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertArrayNotHasKey($key, $array, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertArrayNotHasKey',
        func_get_args()
    );
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object contains a needle.
 *
 * @param mixed  $needle
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 * @param bool   $ignoreCase
 * @param bool   $checkForObjectIdentity
 * @param bool   $checkForNonObjectIdentity
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeContains',
        func_get_args()
    );
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object contains only values of a given type.
 *
 * @param string $type
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param bool   $isNativeType
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.4
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = null, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeContainsOnly',
        func_get_args()
    );
}

/**
 * Asserts the number of elements of an array, Countable or Traversable
 * that is stored in an attribute.
 *
 * @param int    $expectedCount
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.6.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeCount($expectedCount, $haystackAttributeName, $haystackClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeCount',
        func_get_args()
    );
}

/**
 * Asserts that a static attribute of a class or an attribute of an object
 * is empty.
 *
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeEmpty',
        func_get_args()
    );
}

/**
 * Asserts that a variable is equal to an attribute of an object.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
 * @param float  $delta
 * @param int    $maxDepth
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 */
function assertAttributeEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeEquals',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is greater than another value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeGreaterThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeGreaterThan',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is greater than or equal to another value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeGreaterThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeGreaterThanOrEqual',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeInstanceOf($expected, $attributeName, $classOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeInstanceOf',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeInternalType($expected, $attributeName, $classOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeInternalType',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is smaller than another value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeLessThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeLessThan',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is smaller than or equal to another value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeLessThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeLessThanOrEqual',
        func_get_args()
    );
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object does not contain a needle.
 *
 * @param mixed  $needle
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
 * @param bool   $ignoreCase
 * @param bool   $checkForObjectIdentity
 * @param bool   $checkForNonObjectIdentity
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeNotContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotContains',
        func_get_args()
    );
}

/**
 * Asserts that a haystack that is stored in a static attribute of a class
 * or an attribute of an object does not contain only values of a given
 * type.
 *
 * @param string $type
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param bool   $isNativeType
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.4
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeNotContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = null, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotContainsOnly',
        func_get_args()
    );
}

/**
 * Asserts the number of elements of an array, Countable or Traversable
 * that is stored in an attribute.
 *
 * @param int    $expectedCount
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.6.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeNotCount($expectedCount, $haystackAttributeName, $haystackClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotCount',
        func_get_args()
    );
}

/**
 * Asserts that a static attribute of a class or an attribute of an object
 * is not empty.
 *
 * @param string $haystackAttributeName
 * @param mixed  $haystackClassOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeNotEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotEmpty',
        func_get_args()
    );
}

/**
 * Asserts that a variable is not equal to an attribute of an object.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param string $actualClassOrObject
 * @param string $message
 * @param float  $delta
 * @param int    $maxDepth
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 */
function assertAttributeNotEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotEquals',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeNotInstanceOf($expected, $attributeName, $classOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotInstanceOf',
        func_get_args()
    );
}

/**
 * Asserts that an attribute is of a given type.
 *
 * @param string $expected
 * @param string $attributeName
 * @param mixed  $classOrObject
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertAttributeNotInternalType($expected, $attributeName, $classOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotInternalType',
        func_get_args()
    );
}

/**
 * Asserts that a variable and an attribute of an object do not have the
 * same type and value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param object $actualClassOrObject
 * @param string $message
 */
function assertAttributeNotSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeNotSame',
        func_get_args()
    );
}

/**
 * Asserts that a variable and an attribute of an object have the same type
 * and value.
 *
 * @param mixed  $expected
 * @param string $actualAttributeName
 * @param object $actualClassOrObject
 * @param string $message
 */
function assertAttributeSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertAttributeSame',
        func_get_args()
    );
}

/**
 * Asserts that a class has a specified attribute.
 *
 * @param string $attributeName
 * @param string $className
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertClassHasAttribute($attributeName, $className, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertClassHasAttribute',
        func_get_args()
    );
}

/**
 * Asserts that a class has a specified static attribute.
 *
 * @param string $attributeName
 * @param string $className
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertClassHasStaticAttribute($attributeName, $className, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertClassHasStaticAttribute',
        func_get_args()
    );
}

/**
 * Asserts that a class does not have a specified attribute.
 *
 * @param string $attributeName
 * @param string $className
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertClassNotHasAttribute($attributeName, $className, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertClassNotHasAttribute',
        func_get_args()
    );
}

/**
 * Asserts that a class does not have a specified static attribute.
 *
 * @param string $attributeName
 * @param string $className
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertClassNotHasStaticAttribute($attributeName, $className, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertClassNotHasStaticAttribute',
        func_get_args()
    );
}

/**
 * Asserts that a haystack contains a needle.
 *
 * @param mixed  $needle
 * @param mixed  $haystack
 * @param string $message
 * @param bool   $ignoreCase
 * @param bool   $checkForObjectIdentity
 * @param bool   $checkForNonObjectIdentity
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 2.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertContains($needle, $haystack, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertContains',
        func_get_args()
    );
}

/**
 * Asserts that a haystack contains only values of a given type.
 *
 * @param string $type
 * @param mixed  $haystack
 * @param bool   $isNativeType
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.4
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertContainsOnly($type, $haystack, $isNativeType = null, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertContainsOnly',
        func_get_args()
    );
}

/**
 * Asserts that a haystack contains only instances of a given classname
 *
 * @param string            $classname
 * @param array|Traversable $haystack
 * @param string            $message
 */
function assertContainsOnlyInstancesOf($classname, $haystack, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertContainsOnlyInstancesOf',
        func_get_args()
    );
}

/**
 * Asserts the number of elements of an array, Countable or Traversable.
 *
 * @param int    $expectedCount
 * @param mixed  $haystack
 * @param string $message
 */
function assertCount($expectedCount, $haystack, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertCount',
        func_get_args()
    );
}

/**
 * Asserts that a variable is empty.
 *
 * @param mixed  $actual
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertEmpty($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertEmpty',
        func_get_args()
    );
}

/**
 * Asserts that a hierarchy of DOMElements matches.
 *
 * @param DOMElement $expectedElement
 * @param DOMElement $actualElement
 * @param bool       $checkAttributes
 * @param string     $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertEqualXMLStructure(DOMElement $expectedElement, DOMElement $actualElement, $checkAttributes = false, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertEqualXMLStructure',
        func_get_args()
    );
}

/**
 * Asserts that two variables are equal.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 * @param float  $delta
 * @param int    $maxDepth
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 */
function assertEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertEquals',
        func_get_args()
    );
}

/**
 * Asserts that a condition is not true.
 *
 * @param bool   $condition
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertNotTrue($condition, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotTrue',
        func_get_args()
    );
}

/**
 * Asserts that a condition is false.
 *
 * @param bool   $condition
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertFalse($condition, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFalse',
        func_get_args()
    );
}

/**
 * Asserts that the contents of one file is equal to the contents of another
 * file.
 *
 * @param string $expected
 * @param string $actual
 * @param string $message
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.2.14
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertFileEquals($expected, $actual, $message = '', $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFileEquals',
        func_get_args()
    );
}

/**
 * Asserts that a file exists.
 *
 * @param string $filename
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertFileExists($filename, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFileExists',
        func_get_args()
    );
}

/**
 * Asserts that the contents of one file is not equal to the contents of
 * another file.
 *
 * @param string $expected
 * @param string $actual
 * @param string $message
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.2.14
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertFileNotEquals($expected, $actual, $message = '', $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFileNotEquals',
        func_get_args()
    );
}

/**
 * Asserts that a file does not exist.
 *
 * @param string $filename
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertFileNotExists($filename, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFileNotExists',
        func_get_args()
    );
}

/**
 * Asserts that a value is greater than another value.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertGreaterThan($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertGreaterThan',
        func_get_args()
    );
}

/**
 * Asserts that a value is greater than or equal to another value.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertGreaterThanOrEqual($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertGreaterThanOrEqual',
        func_get_args()
    );
}

/**
 * Asserts that a variable is of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertInstanceOf($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertInstanceOf',
        func_get_args()
    );
}

/**
 * Asserts that a variable is of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertInternalType($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertInternalType',
        func_get_args()
    );
}

/**
 * Asserts that a string is a valid JSON string.
 *
 * @param string $actualJson
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.7.20
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertJson($actualJson, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJson',
        func_get_args()
    );
}

/**
 * Asserts that two JSON files are equal.
 *
 * @param string $expectedFile
 * @param string $actualFile
 * @param string $message
 */
function assertJsonFileEqualsJsonFile($expectedFile, $actualFile, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonFileEqualsJsonFile',
        func_get_args()
    );
}

/**
 * Asserts that two JSON files are not equal.
 *
 * @param string $expectedFile
 * @param string $actualFile
 * @param string $message
 */
function assertJsonFileNotEqualsJsonFile($expectedFile, $actualFile, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonFileNotEqualsJsonFile',
        func_get_args()
    );
}

/**
 * Asserts that the generated JSON encoded object and the content of the given file are equal.
 *
 * @param string $expectedFile
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringEqualsJsonFile($expectedFile, $actualJson, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonStringEqualsJsonFile',
        func_get_args()
    );
}

/**
 * Asserts that two given JSON encoded objects or arrays are equal.
 *
 * @param string $expectedJson
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringEqualsJsonString($expectedJson, $actualJson, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonStringEqualsJsonString',
        func_get_args()
    );
}

/**
 * Asserts that the generated JSON encoded object and the content of the given file are not equal.
 *
 * @param string $expectedFile
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringNotEqualsJsonFile($expectedFile, $actualJson, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonFile',
        func_get_args()
    );
}

/**
 * Asserts that two given JSON encoded objects or arrays are not equal.
 *
 * @param string $expectedJson
 * @param string $actualJson
 * @param string $message
 */
function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertJsonStringNotEqualsJsonString',
        func_get_args()
    );
}

/**
 * Asserts that a value is smaller than another value.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertLessThan($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertLessThan',
        func_get_args()
    );
}

/**
 * Asserts that a value is smaller than or equal to another value.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertLessThanOrEqual($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertLessThanOrEqual',
        func_get_args()
    );
}

/**
 * Asserts that a variable is finite.
 *
 * @param mixed  $actual
 * @param string $message
 */
function assertFinite($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertFinite',
        func_get_args()
    );
}

/**
 * Asserts that a variable is infinite.
 *
 * @param mixed  $actual
 * @param string $message
 */
function assertInfinite($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertInfinite',
        func_get_args()
    );
}

/**
 * Asserts that a variable is nan.
 *
 * @param mixed  $actual
 * @param string $message
 */
function assertNan($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNan',
        func_get_args()
    );
}

/**
 * Asserts that a haystack does not contain a needle.
 *
 * @param mixed  $needle
 * @param mixed  $haystack
 * @param string $message
 * @param bool   $ignoreCase
 * @param bool   $checkForObjectIdentity
 * @param bool   $checkForNonObjectIdentity
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 2.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertNotContains($needle, $haystack, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotContains',
        func_get_args()
    );
}

/**
 * Asserts that a haystack does not contain only values of a given type.
 *
 * @param string $type
 * @param mixed  $haystack
 * @param bool   $isNativeType
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.4
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertNotContainsOnly($type, $haystack, $isNativeType = null, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotContainsOnly',
        func_get_args()
    );
}

/**
 * Asserts the number of elements of an array, Countable or Traversable.
 *
 * @param int    $expectedCount
 * @param mixed  $haystack
 * @param string $message
 */
function assertNotCount($expectedCount, $haystack, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotCount',
        func_get_args()
    );
}

/**
 * Asserts that a variable is not empty.
 *
 * @param mixed  $actual
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertNotEmpty($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotEmpty',
        func_get_args()
    );
}

/**
 * Asserts that two variables are not equal.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 * @param float  $delta
 * @param int    $maxDepth
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 2.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertNotEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotEquals',
        func_get_args()
    );
}

/**
 * Asserts that a variable is not of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertNotInstanceOf($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotInstanceOf',
        func_get_args()
    );
}

/**
 * Asserts that a variable is not of a given type.
 *
 * @param string $expected
 * @param mixed  $actual
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertNotInternalType($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotInternalType',
        func_get_args()
    );
}

/**
 * Asserts that a condition is not false.
 *
 * @param bool   $condition
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertNotFalse($condition, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotFalse',
        func_get_args()
    );
}

/**
 * Asserts that a variable is not null.
 *
 * @param mixed  $actual
 * @param string $message
 */
function assertNotNull($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotNull',
        func_get_args()
    );
}

/**
 * Asserts that a string does not match a given regular expression.
 *
 * @param string $pattern
 * @param string $string
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 2.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertNotRegExp($pattern, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotRegExp',
        func_get_args()
    );
}

/**
 * Asserts that two variables do not have the same type and value.
 * Used on objects, it asserts that two variables do not reference
 * the same object.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 */
function assertNotSame($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotSame',
        func_get_args()
    );
}

/**
 * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
 * is not the same.
 *
 * @param array|Countable|Traversable $expected
 * @param array|Countable|Traversable $actual
 * @param string                      $message
 */
function assertNotSameSize($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNotSameSize',
        func_get_args()
    );
}

/**
 * Asserts that a variable is null.
 *
 * @param mixed  $actual
 * @param string $message
 */
function assertNull($actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertNull',
        func_get_args()
    );
}

/**
 * Asserts that an object has a specified attribute.
 *
 * @param string $attributeName
 * @param object $object
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertObjectHasAttribute($attributeName, $object, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertObjectHasAttribute',
        func_get_args()
    );
}

/**
 * Asserts that an object does not have a specified attribute.
 *
 * @param string $attributeName
 * @param object $object
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertObjectNotHasAttribute($attributeName, $object, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertObjectNotHasAttribute',
        func_get_args()
    );
}

/**
 * Asserts that a string matches a given regular expression.
 *
 * @param string $pattern
 * @param string $string
 * @param string $message
 */
function assertRegExp($pattern, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertRegExp',
        func_get_args()
    );
}

/**
 * Asserts that two variables have the same type and value.
 * Used on objects, it asserts that two variables reference
 * the same object.
 *
 * @param mixed  $expected
 * @param mixed  $actual
 * @param string $message
 */
function assertSame($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertSame',
        func_get_args()
    );
}

/**
 * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
 * is the same.
 *
 * @param array|Countable|Traversable $expected
 * @param array|Countable|Traversable $actual
 * @param string                      $message
 */
function assertSameSize($expected, $actual, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertSameSize',
        func_get_args()
    );
}

/**
 * Asserts that a string ends not with a given prefix.
 *
 * @param string $suffix
 * @param string $string
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.4.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertStringEndsNotWith($suffix, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringEndsNotWith',
        func_get_args()
    );
}

/**
 * Asserts that a string ends with a given prefix.
 *
 * @param string $suffix
 * @param string $string
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.4.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertStringEndsWith($suffix, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringEndsWith',
        func_get_args()
    );
}

/**
 * Asserts that the contents of a string is equal
 * to the contents of a file.
 *
 * @param string $expectedFile
 * @param string $actualString
 * @param string $message
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertStringEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringEqualsFile',
        func_get_args()
    );
}

/**
 * Asserts that a string matches a given format string.
 *
 * @param string $format
 * @param string $string
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertStringMatchesFormat($format, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringMatchesFormat',
        func_get_args()
    );
}

/**
 * Asserts that a string matches a given format file.
 *
 * @param string $formatFile
 * @param string $string
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertStringMatchesFormatFile($formatFile, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringMatchesFormatFile',
        func_get_args()
    );
}

/**
 * Asserts that the contents of a string is not equal
 * to the contents of a file.
 *
 * @param string $expectedFile
 * @param string $actualString
 * @param string $message
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertStringNotEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringNotEqualsFile',
        func_get_args()
    );
}

/**
 * Asserts that a string does not match a given format string.
 *
 * @param string $format
 * @param string $string
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertStringNotMatchesFormat($format, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringNotMatchesFormat',
        func_get_args()
    );
}

/**
 * Asserts that a string does not match a given format string.
 *
 * @param string $formatFile
 * @param string $string
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertStringNotMatchesFormatFile($formatFile, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringNotMatchesFormatFile',
        func_get_args()
    );
}

/**
 * Asserts that a string starts not with a given prefix.
 *
 * @param string $prefix
 * @param string $string
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.4.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertStringStartsNotWith($prefix, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringStartsNotWith',
        func_get_args()
    );
}

/**
 * Asserts that a string starts with a given prefix.
 *
 * @param string $prefix
 * @param string $string
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.4.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertStringStartsWith($prefix, $string, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertStringStartsWith',
        func_get_args()
    );
}

/**
 * Evaluates a PHPUnit_Framework_Constraint matcher object.
 *
 * @param mixed                        $value
 * @param PHPUnit_Framework_Constraint $constraint
 * @param string                       $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertThat($value, PHPUnit_Framework_Constraint $constraint, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertThat',
        func_get_args()
    );
}

/**
 * Asserts that a condition is true.
 *
 * @param bool   $condition
 * @param string $message
 *
 * @throws PHPUnit_Framework_AssertionFailedError
 */
function assertTrue($condition, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertTrue',
        func_get_args()
    );
}

/**
 * Asserts that two XML files are equal.
 *
 * @param string $expectedFile
 * @param string $actualFile
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertXmlFileEqualsXmlFile($expectedFile, $actualFile, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlFileEqualsXmlFile',
        func_get_args()
    );
}

/**
 * Asserts that two XML files are not equal.
 *
 * @param string $expectedFile
 * @param string $actualFile
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertXmlFileNotEqualsXmlFile($expectedFile, $actualFile, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlFileNotEqualsXmlFile',
        func_get_args()
    );
}

/**
 * Asserts that two XML documents are equal.
 *
 * @param string $expectedFile
 * @param string $actualXml
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertXmlStringEqualsXmlFile($expectedFile, $actualXml, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlStringEqualsXmlFile',
        func_get_args()
    );
}

/**
 * Asserts that two XML documents are equal.
 *
 * @param string $expectedXml
 * @param string $actualXml
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertXmlStringEqualsXmlString($expectedXml, $actualXml, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlStringEqualsXmlString',
        func_get_args()
    );
}

/**
 * Asserts that two XML documents are not equal.
 *
 * @param string $expectedFile
 * @param string $actualXml
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertXmlStringNotEqualsXmlFile($expectedFile, $actualXml, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlStringNotEqualsXmlFile',
        func_get_args()
    );
}

/**
 * Asserts that two XML documents are not equal.
 *
 * @param string $expectedXml
 * @param string $actualXml
 * @param string $message
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, $message = '')
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::assertXmlStringNotEqualsXmlString',
        func_get_args()
    );
}

/**
 * Returns a matcher that matches when the method is executed
 * at the given $index.
 *
 * @param int $index
 *
 * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtIndex
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function at($index)
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::at',
        func_get_args()
    );
}

/**
 * Returns a matcher that matches when the method is executed at least once.
 *
 * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtLeastOnce
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function atLeastOnce()
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::atLeastOnce',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_Attribute matcher object.
 *
 * @param PHPUnit_Framework_Constraint $constraint
 * @param string                       $attributeName
 *
 * @return PHPUnit_Framework_Constraint_Attribute
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function attribute(PHPUnit_Framework_Constraint $constraint, $attributeName)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::attribute',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsEqual matcher object
 * that is wrapped in a PHPUnit_Framework_Constraint_Attribute matcher
 * object.
 *
 * @param string $attributeName
 * @param mixed  $value
 * @param float  $delta
 * @param int    $maxDepth
 * @param bool   $canonicalize
 * @param bool   $ignoreCase
 *
 * @return PHPUnit_Framework_Constraint_Attribute
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function attributeEqualTo($attributeName, $value, $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::attributeEqualTo',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_Callback matcher object.
 *
 * @param callable $callback
 *
 * @return PHPUnit_Framework_Constraint_Callback
 */
function callback($callback)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::callback',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_ClassHasAttribute matcher object.
 *
 * @param string $attributeName
 *
 * @return PHPUnit_Framework_Constraint_ClassHasAttribute
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function classHasAttribute($attributeName)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::classHasAttribute',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_ClassHasStaticAttribute matcher
 * object.
 *
 * @param string $attributeName
 *
 * @return PHPUnit_Framework_Constraint_ClassHasStaticAttribute
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function classHasStaticAttribute($attributeName)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::classHasStaticAttribute',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_TraversableContains matcher
 * object.
 *
 * @param mixed $value
 * @param bool  $checkForObjectIdentity
 * @param bool  $checkForNonObjectIdentity
 *
 * @return PHPUnit_Framework_Constraint_TraversableContains
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function contains($value, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::contains',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_TraversableContainsOnly matcher
 * object.
 *
 * @param string $type
 *
 * @return PHPUnit_Framework_Constraint_TraversableContainsOnly
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.4
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function containsOnly($type)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::containsOnly',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_TraversableContainsOnly matcher
 * object.
 *
 * @param string $classname
 *
 * @return PHPUnit_Framework_Constraint_TraversableContainsOnly
 */
function containsOnlyInstancesOf($classname)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::containsOnlyInstancesOf',
        func_get_args()
    );
}

/**
<<<<<<< HEAD
 * Returns a PHPUnit_Framework_Constraint_Count matcher object.
 *
 * @param int $count
 *
 * @return Count
 */
function countOf($count)
{
    return call_user_func_array(
        'PHPUnit\Framework\Assert::countOf',
        func_get_args()
    );
}

/**
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 * Returns a PHPUnit_Framework_Constraint_IsEqual matcher object.
 *
 * @param mixed $value
 * @param float $delta
 * @param int   $maxDepth
 * @param bool  $canonicalize
 * @param bool  $ignoreCase
 *
 * @return PHPUnit_Framework_Constraint_IsEqual
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function equalTo($value, $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::equalTo',
        func_get_args()
    );
}

/**
 * Returns a matcher that matches when the method is executed
 * exactly $count times.
 *
 * @param int $count
 *
 * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function exactly($count)
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::exactly',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_FileExists matcher object.
 *
 * @return PHPUnit_Framework_Constraint_FileExists
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function fileExists()
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::fileExists',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_GreaterThan matcher object.
 *
 * @param mixed $value
 *
 * @return PHPUnit_Framework_Constraint_GreaterThan
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function greaterThan($value)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::greaterThan',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_Or matcher object that wraps
 * a PHPUnit_Framework_Constraint_IsEqual and a
 * PHPUnit_Framework_Constraint_GreaterThan matcher object.
 *
 * @param mixed $value
 *
 * @return PHPUnit_Framework_Constraint_Or
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function greaterThanOrEqual($value)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::greaterThanOrEqual',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsIdentical matcher object.
 *
 * @param mixed $value
 *
 * @return PHPUnit_Framework_Constraint_IsIdentical
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function identicalTo($value)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::identicalTo',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsEmpty matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsEmpty
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function isEmpty()
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::isEmpty',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsFalse matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsFalse
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function isFalse()
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::isFalse',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsInstanceOf matcher object.
 *
 * @param string $className
 *
 * @return PHPUnit_Framework_Constraint_IsInstanceOf
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function isInstanceOf($className)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::isInstanceOf',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsJson matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsJson
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.7.20
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function isJson()
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::isJson',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsNull matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsNull
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function isNull()
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::isNull',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsTrue matcher object.
 *
 * @return PHPUnit_Framework_Constraint_IsTrue
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function isTrue()
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::isTrue',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_IsType matcher object.
 *
 * @param string $type
 *
 * @return PHPUnit_Framework_Constraint_IsType
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function isType($type)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::isType',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_LessThan matcher object.
 *
 * @param mixed $value
 *
 * @return PHPUnit_Framework_Constraint_LessThan
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function lessThan($value)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::lessThan',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_Or matcher object that wraps
 * a PHPUnit_Framework_Constraint_IsEqual and a
 * PHPUnit_Framework_Constraint_LessThan matcher object.
 *
 * @param mixed $value
 *
 * @return PHPUnit_Framework_Constraint_Or
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function lessThanOrEqual($value)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::lessThanOrEqual',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_And matcher object.
 *
 * @return PHPUnit_Framework_Constraint_And
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function logicalAnd()
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::logicalAnd',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_Not matcher object.
 *
 * @param PHPUnit_Framework_Constraint $constraint
 *
 * @return PHPUnit_Framework_Constraint_Not
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function logicalNot(PHPUnit_Framework_Constraint $constraint)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::logicalNot',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_Or matcher object.
 *
 * @return PHPUnit_Framework_Constraint_Or
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function logicalOr()
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::logicalOr',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_Xor matcher object.
 *
 * @return PHPUnit_Framework_Constraint_Xor
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function logicalXor()
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::logicalXor',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_StringMatches matcher object.
 *
 * @param string $string
 *
 * @return PHPUnit_Framework_Constraint_StringMatches
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.5.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function matches($string)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::matches',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_PCREMatch matcher object.
 *
 * @param string $pattern
 *
 * @return PHPUnit_Framework_Constraint_PCREMatch
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function matchesRegularExpression($pattern)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::matchesRegularExpression',
        func_get_args()
    );
}

/**
 * Returns a matcher that matches when the method is never executed.
 *
 * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function never()
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::never',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_ObjectHasAttribute matcher object.
 *
 * @param string $attributeName
 *
 * @return PHPUnit_Framework_Constraint_ObjectHasAttribute
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function objectHasAttribute($attributeName)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::objectHasAttribute',
        func_get_args()
    );
}

/**
 * @param mixed $value, ...
 *
 * @return PHPUnit_Framework_MockObject_Stub_ConsecutiveCalls
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function onConsecutiveCalls()
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::onConsecutiveCalls',
        func_get_args()
    );
}

/**
 * Returns a matcher that matches when the method is executed exactly once.
 *
 * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function once()
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::once',
        func_get_args()
    );
}

/**
 * @param int $argumentIndex
 *
 * @return PHPUnit_Framework_MockObject_Stub_ReturnArgument
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function returnArgument($argumentIndex)
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::returnArgument',
        func_get_args()
    );
}

/**
 * @param mixed $callback
 *
 * @return PHPUnit_Framework_MockObject_Stub_ReturnCallback
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.3.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function returnCallback($callback)
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::returnCallback',
        func_get_args()
    );
}

/**
 * Returns the current object.
 *
 * This method is useful when mocking a fluent interface.
 *
 * @return PHPUnit_Framework_MockObject_Stub_ReturnSelf
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.6.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function returnSelf()
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::returnSelf',
        func_get_args()
    );
}

/**
 * @param mixed $value
 *
 * @return PHPUnit_Framework_MockObject_Stub_Return
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function returnValue($value)
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::returnValue',
        func_get_args()
    );
}

/**
 * @param array $valueMap
 *
 * @return PHPUnit_Framework_MockObject_Stub_ReturnValueMap
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.6.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function returnValueMap(array $valueMap)
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::returnValueMap',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_StringContains matcher object.
 *
 * @param string $string
 * @param bool   $case
 *
 * @return PHPUnit_Framework_Constraint_StringContains
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.0.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function stringContains($string, $case = true)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::stringContains',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_StringEndsWith matcher object.
 *
 * @param mixed $suffix
 *
 * @return PHPUnit_Framework_Constraint_StringEndsWith
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.4.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function stringEndsWith($suffix)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::stringEndsWith',
        func_get_args()
    );
}

/**
 * Returns a PHPUnit_Framework_Constraint_StringStartsWith matcher object.
 *
 * @param mixed $prefix
 *
 * @return PHPUnit_Framework_Constraint_StringStartsWith
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.4.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function stringStartsWith($prefix)
{
    return call_user_func_array(
        'PHPUnit_Framework_Assert::stringStartsWith',
        func_get_args()
    );
}

/**
 * @param Exception $exception
 *
 * @return PHPUnit_Framework_MockObject_Stub_Exception
<<<<<<< HEAD
=======
 *
 * @since Method available since Release 3.1.0
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
 */
function throwException(Exception $exception)
{
    return call_user_func_array(
        'PHPUnit_Framework_TestCase::throwException',
        func_get_args()
    );
}
