<?php

declare(strict_types=1);

namespace NginxUidDecoder;

use PHPUnit\Framework\TestCase;

class ValidatorTest extends TestCase
{
    /**
     * @param string $string
     * @param bool $expected
     *
     * @dataProvider isBase64DataProvider
     */
    public function testIsBase64(string $string, bool $expected): void
    {
        $actual = Validator::isBase64($string);

        self::assertEquals($expected, $actual);
    }

    /**
     * @return array
     */
    public function isBase64DataProvider(): array
    {
        return [
            [
                '=!2',
                false
            ],
            [
                '=asd!2',
                false
            ],
            [
                'asd===',
                false
            ],
            [
                '',
                true
            ],
            [
                'Zg==',
                true
            ],
            [
                'Zm8=',
                true
            ],
            [
                'Zm9v',
                true
            ],
            [
                'Zm9vYg==',
                true
            ],
            [
                'Zm9vYg==',
                true
            ],
            [
                'Zm9vYmFy',
                true
            ],
            [
                'fwAAAV0+qHDCY1/2AwMXAg==',
                true
            ],
            [
                'fwAAAV0 qHDCY1/2AwMXAg==',
                false
            ]
        ];
    }

    /**
     * @param string $string
     * @param bool $expected
     *
     * @dataProvider isNginxUidDataProvider
     */
    public function testIsNginxUid(string $string, bool $expected): void
    {
        $actual = Validator::isNginxUid($string);

        self::assertEquals($expected, $actual);
    }

    /**
     * @return array
     */
    public function isNginxUidDataProvider(): array
    {
        return [
            [
                '',
                false
            ],
            [
                '123',
                false
            ],
            [
                'ECB1A00AD5306A4E1460AE3102090303',
                true
            ]
        ];
    }
}
