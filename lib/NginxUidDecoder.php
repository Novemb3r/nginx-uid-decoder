<?php

declare(strict_types=1);

namespace NginxUidDecoder;

use InvalidArgumentException;

class NginxUidDecoder
{
    /**
     * @param string $cookie
     * @return string
     */
    public static function decodeCookie(string $cookie): string
    {
        if (!Validator::isBase64($cookie)) {
            throw new InvalidArgumentException(
                sprintf('Cookie %s has invalid format', $cookie)
            );
        }

        return strtoupper(implode('', array_map(static function ($e) {
            return str_pad(
                base_convert($e, 10, 16),
                8, '0', STR_PAD_LEFT
            );
        }, unpack('I4', base64_decode($cookie)))));
    }

    /**
     * @param string $uid
     * @return string
     */
    public static function encodeUid(string $uid): string
    {
        if (!Validator::isNginxUid($uid)) {
            throw new InvalidArgumentException(
                sprintf('Uid %s has invalid format', $uid)
            );
        }

        return base64_encode(pack(
            'I4',
            base_convert(substr($uid, 0, 8), 16, 10),
            base_convert(substr($uid, 8, 8), 16, 10),
            base_convert(substr($uid, 16, 8), 16, 10),
            base_convert(substr($uid, 24, 8), 16, 10)
        ));
    }
}
