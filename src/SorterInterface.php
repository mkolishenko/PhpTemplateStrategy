<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 20:21
 */

namespace App;

/**
 * Interface SorterInterface - all classes implements this interface must have sort option
 * @package App
 */
interface SorterInterface
{
    public function sort(array $sortedarray) :array ;
}