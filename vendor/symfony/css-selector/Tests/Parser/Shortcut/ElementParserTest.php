<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\CssSelector\Tests\Parser\Shortcut;

<<<<<<< HEAD
use PHPUnit\Framework\TestCase;
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
use Symfony\Component\CssSelector\Node\SelectorNode;
use Symfony\Component\CssSelector\Parser\Shortcut\ElementParser;

/**
 * @author Jean-François Simon <jeanfrancois.simon@sensiolabs.com>
 */
<<<<<<< HEAD
class ElementParserTest extends TestCase
=======
class ElementParserTest extends \PHPUnit_Framework_TestCase
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
{
    /** @dataProvider getParseTestData */
    public function testParse($source, $representation)
    {
        $parser = new ElementParser();
        $selectors = $parser->parse($source);
        $this->assertCount(1, $selectors);

        /** @var SelectorNode $selector */
        $selector = $selectors[0];
        $this->assertEquals($representation, (string) $selector->getTree());
    }

    public function getParseTestData()
    {
        return array(
            array('*', 'Element[*]'),
            array('testel', 'Element[testel]'),
            array('testns|*', 'Element[testns|*]'),
            array('testns|testel', 'Element[testns|testel]'),
        );
    }
}
