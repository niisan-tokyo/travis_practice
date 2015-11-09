<?php

namespace Test\fb\screamer;

/**
 * Buzz クラスのテスト
 * 
 * 5の倍数でアホになる。。。
 * Buzzと叫ばなければならない
 */
class BuzzTest extends \Test\UnitTestCase
{
    
    public function setUp()
    {
        parent::setUp();
        $this->obj = new \App\fb\screamer\Buzz();
    }
    
    /**
     * 叫ぶかどうかをチェックするテスト
     * 
     */
    public function testCheck()
    {
        $this->assertTrue($this->obj->check(5), '5で叫ぶ');
        $this->assertTrue($this->obj->check(15), '15で叫ぶ');
        $this->assertFalse($this->obj->check(3), '3では叫ばない');
        
    }
    
    /**
     * 叫び声のテスト
     */
    public function testShout()
    {
        $this->assertEquals('Buzz', $this->obj->shout(), '叫び声は"Buzz"');
        
    }
}
