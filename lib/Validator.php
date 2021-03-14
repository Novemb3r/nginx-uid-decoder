<?php

declare(strict_types=1);

namespace NginxUidDecoder;

class Validator
{
    /**
     * @var string
     */
    private const BASE_64_REGEXP = '/^[a-zA-Z0-9\/\r\n+]*={0,2}$/';

    /**
     * @var string
     */
    private const NGINX_UID_REGEXP = '/^[A-Z0-9]{32}/';

    /**
     * @param string $s
     * @return bool
     */
    public static function isBase64(string $s): bool
    {
        return (bool)preg_match(self::BASE_64_REGEXP, $s);
    }

    /**
     * @param string $s
     * @return bool
     */
    public static function isNginxUid(string $s): bool
    {
        return (bool)preg_match(self::NGINX_UID_REGEXP, $s);
    }
}
