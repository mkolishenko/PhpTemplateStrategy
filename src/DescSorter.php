<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 20:31
 */

namespace App;


final class DescSorter implements SorterInterface
{
    public $sortedarray;

    public function __construct($incomearray)
    {
        $this->sortedarray = $incomearray;
    }
    public function sort($sortedarray)
    {
        if (arsort($this->sortedarray)){
            return $this->sortedarray;
        }
    }

}