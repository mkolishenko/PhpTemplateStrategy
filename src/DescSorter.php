<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 20:31
 */

namespace App;

/**
 * Class DescSorter - for Descending sort
 * @package App
 */
final class DescSorter implements SorterInterface
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
    public function sort(array $sortedarray) :array
    {
        if (is_array($sortedarray)){
            arsort($this->sortedarray);
            return $this->sortedarray;
        }
        return false;
    }
}