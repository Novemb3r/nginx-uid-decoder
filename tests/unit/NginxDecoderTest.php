<?php

declare(strict_types=1);

namespace NginxUidDecoder;

use PHPUnit\Framework\TestCase;

class NginxDecoderTest extends TestCase
{

    public function testDecodeCookie(): void
    {
        $expected = 'ECB1A00AD5306A4E1460AE3102090303';
        $actual = NginxUidDecoder::decodeCookie('CqCx7E5qMNUxrmAUAwMJAg==');

        self::assertEquals($expected, $actual);
    }


    public function testEncodeUid(): void
    {
        $expected = 'CqCx7E5qMNUxrmAUAwMJAg==';
        $actual = NginxUidDecoder::encodeUid('ECB1A00AD5306A4E1460AE3102090303');

        self::assertEquals($expected, $actual);
    }
}
