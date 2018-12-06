<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 20:38
 */

namespace App;


class MainSort
{
    private $sortedarray = [];
    public $rez = [1,2,3,4,5];
    public function __construct($sortedarray)
    {
        $this ->sortedarray = $sortedarray;
    }
    public function sort ($sortorder)
    {
        $nullarray = new NullSort();
        if($sortorder == 'ASC'){
            $arrayobject = new AscSorter($this->sortedarray);
            if ($arrayobject->sort($this ->sortedarray)===false) {
                return $nullarray->sort($this ->sortedarray);
            }
            //print_r(asort($this->sortedarray));
            return $arrayobject->sort($this ->sortedarray);
        }else {
            $arrayobject = new DescSorter($this->sortedarray);
            if ($arrayobject->sort($this ->sortedarray)===false){
                return $nullarray->sort($this ->sortedarray);
            }
            return $arrayobject->sort($this ->sortedarray);
        }
        return $nullarray->sort($this ->sortedarray);
    }
}