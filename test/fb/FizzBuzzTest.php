<?php

namespace Test\fb;

use Mockery as M;
use App\fb\Screamer;

class FizzBuzzTest extends \Test\UnitTestCase
{
    
    /**
     * 初期化
     */
    public function setUp()
    {
        parent::setUp();
        
        $this->obj = new \App\fb\FizzBuzz();
        
    }
    
    /**
     * スクリーマーを設定するテスト
     */
    public function testSetScreamer()
    {
        $scr = M::mock('App\fb\Screamer');
        $this->assertEquals(0, $this->obj->getCount());
        $this->obj->setScreamer($scr);
        $this->assertEquals(1, $this->obj->getCount());
        
    }
}

