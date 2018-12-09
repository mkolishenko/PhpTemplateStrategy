<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 20:38
 */

namespace App;

/**
 * Class MainSort - realize Strategy and NULL-object
 * @package App
 */
class MainSort
{
    /**
     * @var array, empty for results
     */
    private $sortedarray = [];

    public function __construct($sortedarray)
    {
        $this ->sortedarray = $sortedarray;
    }

    /**
     * sort income array according to $sortorder
     * @param string $sortorder, two options - ascending or descending, otherwise - no sort
     * @return array
     */
    public function sort (string $sortorder) :array
    {
        $nullarray = new NullSort();

        if($sortorder == 'ASC'){
            $arrayobject = new AscSorter($this->sortedarray);
            if ($arrayobject->sort($this ->sortedarray)===false) {
                return $nullarray->sort($this ->sortedarray);
            }

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