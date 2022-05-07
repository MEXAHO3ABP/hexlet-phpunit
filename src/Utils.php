<?php

namespace Hexlet\Phpunit\Utils;

// Эта функция переворачивает переданную стоку
function reverseString(string $string)
{
    return implode(array_reverse(str_split($string)));
}
