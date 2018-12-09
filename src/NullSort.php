<?php
/**
 * Created by PhpStorm.
 * User: maksym
 * Date: 05.12.18
 * Time: 23:40
 */

namespace App;

/**
 * Class NullSort - For cases whe we don't need any sort
 * @package App
 */
class NullSort implements SorterInterface
{
    /**
     * @var array, store sorted values
     */
    public $sortedarray;

    public function __construct()
    {
        $this->sortedarray = ['Income data is not an array'];
    }

    /**
     * @param array $sortedarray - initial data for sort
     * @return array - empty array
     */
    public function sort(array $sortedarray) :array
    {
        return $this->sortedarray;
    }

}