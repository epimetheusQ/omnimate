<?php
/**
 * php数组日常使用的扩展类（方案类似laravel Collection）
 * @author 527
 * @license MIT
 * @link https://packagist.org/packages/epimetheus/omnimate
 */
namespace Epimetheus\Omnimate\Utils;

class Arr
{
    /**
     * 二维数组分组展示
     * @param array $list 需要处理的array
     * @param string $key 分组的key
     * @param array $fields 需要展示的字段
     * @return array
     */
    public static function multiGroupBy(array $list = [], string $key, array $fields = []) : array
    {
        $multiArr = [];

        foreach ($list as $index => $val) {
            if (! $fields) {
                $multiArr[$val[$key]][] = $val;
            } else {
                foreach ($fields as $field) {
                    $childVal[$field] = isset($val[$field]) ? $val[$field] : '';
                }
                $multiArr[$val[$key]][] = $childVal ?? [];
            }
        }

        return $multiArr;
    }

    /**
     * 二维数组过滤参数（多用于给前端提供筛选数据）
     * @param array $array
     * @param array $fields
     * @return array
     */
    public static function multiFilter(array $array, array $fields = []) : array
    {
        return array_map(function ($val) use (&$fields) {
            if ($fields) {
                foreach ($fields as $field) {
                    $arr[$field] = isset($val[$field]) ? $val[$field] : '';
                }
                return $arr;
            }
            return $val;
        }, $fields);
    }

    /**
     * 根据where条件，在二维数组中模糊搜索数据
     * @param array $array 需要搜索的数据
     * @param array $where where搜索条件
     * @param array $fields 需要展示的字段
     * @return array
     */
    public static function multiFuzzyWhere(array $array, array $where, array $fields = []) : array
    {

    }

    /**
     * 根据where条件，准确搜索数据
     * @param array $array
     * @param array $where
     * @param array $fields
     * @return array
     */
    public static function multiWhere(array $array, array $where, array $fields = []) : array
    {

    }

    public static function multiPluck(array $array, $simles = '', $key = '') : array
    {

    }
}