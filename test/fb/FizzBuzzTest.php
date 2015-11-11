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
    
    /**
     * 実際の挙動確認
     */
    public function testRun()
    {
        $scr = M::mock('App\fb\Screamer');
        $scr->shouldReceive('check')->with(3)->andReturn(true);
        $scr->shouldReceive('check')->withAnyArgs()->andReturn(false);
        $scr->shouldReceive('shout')->andReturn('AAA');
        
        $scr2 = M::mock('App\fb\Screamer');
        $scr2->shouldReceive('check')->with(5)->andReturn(true);
        $scr2->shouldReceive('check')->withAnyArgs()->andReturn(false);
        $scr2->shouldReceive('shout')->andReturn('BBB');
        
        $this->obj->setScreamer($scr);
        $this->obj->setScreamer($scr2);
        
        $this->assertEquals(2, $this->obj->run(2));
        $this->assertEquals('BBB', $this->obj->run(5));
        $this->assertEquals('AAA', $this->obj->run(3));
    }
}

