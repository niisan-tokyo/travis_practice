<?php
namespace App\fb;

use App\fb\Screamer;


class FizzBuzz
{
    
    private $screamers = [];
    
    public function setScreamer(Screamer $obj)
    {
        $this->screamers[] = $obj;
        
    }
    
    
    public function getCount()
    {
        return count($this->screamers);
        
    }
    
    
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