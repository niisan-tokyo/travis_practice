<?php
namespace App\fb;

use App\fb\Screamer;

/**
 * FizzBuzzの実行クラス
 */
class FizzBuzz
{

    private $screamers = [];

    /**
     * 叫び声を上げるオブジェクトを追加する
     *
     * @param Screamer $obj スクリーマーオブジェクト
     *
     * @return void
     */
    public function setScreamer(Screamer $obj)
    {
        $this->screamers[] = $obj;

    }

    /**
     * 現在のスクリーマーの個数を出力する
     *
     * テスト用に作成したもの
     *
     * @return integer
     */
    public function getCount()
    {
        return count($this->screamers);

    }

    /**
     * FizzBuzzのメインメソッド
     *
     * スクリーマーに叫ぶかどうかのチェックをさせ、
     * 叫ぶ対象で合ったら叫ばせる
     * 叫ばない場合は数字をそのまま返す
     *
     * @param integer $number 数値
     *
     * @return integer|string
     */
    public function run($number)
    {
        $str = '';
        foreach ($this->screamers as $obj) {
            if ($obj->check($number)) {
                $str .= $obj->shout();
            }
        }

        return ($str === '') ? $number : $str;

    }
}
