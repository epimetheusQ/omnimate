<?php
/**
 * php数组日常使用的扩展类（方案类似laravel Collection）
 * @author 527
 * @license MIT
 * @link https://packagist.org/packages/epimetheus/omnimate
 */
namespace Omnimate\Utils;

class Arr
{
    public function groupKey(array $array = [], string $key, array $fields = [])
    {
        $res = [];
        foreach ($array as $index => $val) {
            if (! isset($val[$key])) {
                return [];
            }

            $res[$val[$key]][] = $val;
        }
        return $res;
    }
}