<?php

namespace App\fb\screamer;

/**
 * 3の倍数でFizzと叫ぶ
 */
class Fizz implements \App\fb\Screamer
{

    /**
     * 3が来たらアホに。。。叫ぶ
     *
     * @param integer $number 数値
     *
     * @return boolean
     */
    public function check($number)
    {
        if ($number % 3 == 0 and $number != 0) {
            return true;
        }

        return false;

    }

    /**
     * Fizz と叫ぶ
     *
     * @return string
     */
    public function shout()
    {
        return 'Fizz';

    }
}
