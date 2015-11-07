<?php

namespace Test\fb\screamer;

/**
 * Fizz クラスのテスト
 * 
 * 3の倍数でアホになる。。。
 * Fizzと叫ばなければならない
 */
class FizzTest extends \Test\UnitTestCase
{
    
    public function setUp()
    {
        parent::setUp();
        $this->obj = new \App\fb\screamer\Fizz();
    }
    
    /**
     * 叫ぶかどうかをチェックするテスト
     * 
     */
    public function testCheck()
    {
        $this->assertTrue($this->obj->check(3), '3で叫ぶ');
        $this->assertTrue($this->obj->check(15), '15で叫ぶ');
        $this->assertFalse($this->obj->check(5), '5では叫ばない');
        
    }
    
    /**
     * 叫び声のテスト
     */
    public function testShout()
    {
        $this->assertEquals('Fizz', $this->obj->shout(), '叫び声は"Fizz"');
        
    }
}
