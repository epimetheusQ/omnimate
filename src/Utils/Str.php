<?php
/**
 * php字符串日常处理
 * @author wuerqiQs
 * @license MIT
 * @link https://packagist.org/packages/epimetheus/omnimate
 * @link https://github.com/epimetheusQ?tab=repositories
 */
namespace Epimetheus\Omnimate\Utils;

class Str
{
    /**
     * 检测是否为一个手机号
     * @param string $mobile 手机号码
     * @return bool
     */
    public function isMobile(string $mobile) : bool
    {
        return (bool) preg_match("/^1[3-9]\d{9}$/", $mobile);
    }
}