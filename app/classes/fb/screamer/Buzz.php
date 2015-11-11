<?php
namespace App\fb\screamer;

/**
 * FizzBuzzの片割れ
 *
 * 5の倍数に対して、Buzzと叫ぶ
 */
class Buzz implements \App\fb\Screamer
{

    /**
     * 数字に応じて叫ぶかどうか判別する
     *
     * ここでは5の倍数であればtrue
     *
     * @param int $number 数字
     *
     * @return boolean
     */
    public function check($number)
    {
        if ($number % 5 == 0 and $number > 0) {
            return true;
        }

        return false;

    }

    /**
     * Buzzと叫ぶ
     *
     * @return string
     */
    public function shout()
    {
        return 'Buzz';

    }
}
