<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 20:27
 */

namespace App;


final class AscSorter implements SorterInterface
{
    public $sortedarray;

    public function __construct($incomearray)
    {
        $this->sortedarray = $incomearray;
    }
    public function sort($sortedarray)
    {
        if (asort($this->sortedarray)){
            return $this->sortedarray;
        }
    }

}