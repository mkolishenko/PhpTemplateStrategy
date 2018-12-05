<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 20:27
 */

namespace App;


class AscSorter implements SorterInterface
{
    public function sort($sortedarray)
    {
        return asort($sortedarray);
    }

}