<?php
/*
 * This file is part of the nia framework architecture.
 *
 * (c) Patrick Ullmann <patrick.ullmann@nat-software.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
declare(strict_types = 1);
namespace Test\Nia\Formatter;

use PHPUnit_Framework_TestCase;
use Nia\Formatting\NullFormatter;

/**
 * Unit test for \Nia\Formatting\NullFormatter.
 */
class NullFormatterTest extends PHPUnit_Framework_TestCase
{

    /**
     * @covers \Nia\Formatting\NullFormatter::format
     *
     * @dataProvider formatProvider
     */
    public function testFormat($value, $expected)
    {
        $formatter = new NullFormatter();

        $this->assertSame($expected, $formatter->format($value));
    }

    public function formatProvider()
    {
        $content = <<<EOL
foobar;foobar
foo bar;foo bar
 foobar; foobar
1234;1234
12 34;12 34
 1234; 1234
1234.567;1234.567
April 14, 1971 AD;April 14, 1971 AD
3:33:41am UTC;3:33:41am UTC
EOL;

        // convert CSV to result set
        $result = [];
        foreach (explode("\n", $content) as $line) {
            $result[] = explode(';', $line);
        }

        return $result;
    }
}
