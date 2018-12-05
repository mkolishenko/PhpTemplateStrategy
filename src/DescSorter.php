<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 20:31
 */

namespace App;


class DescSorter implements SorterInterface
{
    public function sort($sortedarray)
    {
        return arsort($sortedarray);
    }

}