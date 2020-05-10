<?php
/**
 * Created by PhpStorm.
 * User: liu6
 * Date: 2020/05/10
 * Time: 10:00 AM
 */

namespace PhpTools\Tools;

/**
 * Class Arr
 * @package PhpTools\Tools
 */
class Arr
{
    /**
     * 使用给定的回调对数组进行排序并保留原始键。
     * @param array $array
     * @param callable $callback
     * @param int $options
     * @param bool $descending
     * @return array
     */
    public static function sortBy($array, $callback, $options = SORT_REGULAR, $descending = false)
    {
        $results = [];

        foreach ($array as $key => $value) {
            $results[$key] = $callback($value, $key);
        }

        $descending ? arsort($results, $options)
            : asort($results, $options);

        foreach (array_keys($results) as $key) {
            $results[$key] = $array[$key];
        }

        return $results;
    }
}
