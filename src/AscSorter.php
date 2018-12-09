<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 20:27
 */

namespace App;
/**
 * Class AscSorter - for Ascending sort
 * @package App
 */
final class AscSorter implements SorterInterface
{
    /**
     * @var array, store sorted values
     */
    public $sortedarray = [];

    public function __construct($incomearray)
    {
        $this->sortedarray = $incomearray;
    }

    /**
     * @param array $sortedarray - initial data for sort
     * @return array - sorted data
     */
    public function sort(array $sortedarray):array
    {
        if (is_array($sortedarray)){
            asort($this->sortedarray);
            return $this->sortedarray;
        }
        return false;
    }
}