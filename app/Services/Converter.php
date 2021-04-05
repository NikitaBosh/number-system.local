<?php
/**
 * Конвертер
 *
 * PHP version 7
 *
 * @category Laravel
 * @package  App
 * @author   Student <student@example.com>
 * @license  htto://unlicense.org/ Unlicense
 * @link     http://php.net
 */


namespace App\Services;

/**
 * Класс Конвертер
 */
class Converter
{
    public function convert3to10($num)
    {
        $result = 0;
        $index = 0;
        $len = strlen($num) - 1;
        do {
            $result = $result + (int)$num[$index] * (3**($len - $index));
            $index = $index + 1;
        }  while ($index <= $len);
        return $result;
    }
}
