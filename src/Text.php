<?php
namespace Phwoolcon;

use Phalcon\Text as PhalconText;

class Text extends PhalconText
{

    public static function token()
    {
        return bin2hex(random_bytes(16));
    }

    public static function ellipsis($string, $length, $suffix = '...')
    {
        return mb_strlen($string) > $length ? mb_substr($string, 0, $length - 1) . $suffix : $string;
    }
}
