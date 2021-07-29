<?php
/**
 * php数组日常使用的扩展类（方案类似laravel Collection）
 * @author wuerqiQs
 * @license MIT
 * @link https://packagist.org/packages/epimetheus/omnimate
 * @link https://github.com/epimetheusQ?tab=repositories
 */
namespace Epimetheus\Omnimate\Utils;

class Arr
{
    public function groupKey(array $data, string $key, array $fields = [])
    {
        $res = [];
        foreach ($data as $index => $val) {
            if (! isset($val[$key])) {
                return $res;
            }

            $res[$val[$key]][] = $val;
        }
        return $res;
    }
}