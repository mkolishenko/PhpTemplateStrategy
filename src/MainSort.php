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

    public function __construct($sortedarray)
    {
        $this ->sortedarray = $sortedarray;
    }

    public function sort ($sortorder)
    {
        if($sortorder == 'ASC'){
            $arrayobject = new AscSorter($this->sortedarray);
            return $arrayobject->sort($sortorder);
        }
        $arrayobject = new DescSorter($this->sortedarray);
        return $arrayobject->sort($sortorder);
    }


}