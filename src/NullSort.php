<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 23:40
 */

namespace App;


class NullSort implements SorterInterface
{
    public $sortedarray;

    public function __construct()
    {
        $this->sortedarray = ['Income data is not an array'];
    }
    public function sort($sortedarray)
    {
        return $this->sortedarray;
    }

}