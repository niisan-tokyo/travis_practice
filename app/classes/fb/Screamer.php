<?php
namespace App\fb;

/**
 * Screamer クラスのインターフェース
 * 
 * FizzBuzzにセットするために満たしておくべき
 * 
 * @author r_niikura1
 */
interface Screamer
{
    
    /**
     * 対象の数値が、叫び声を上げるに値するかどうかを判定する
     * 
     * @param integer $number
     * 
     * @return boolean
     */
    public function check($number);
    
    /**
     * 叫び声を上げる
     * 
     * @return string
     */
    public function shout();
}
