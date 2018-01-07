<?php
/**
 * Created by PhpStorm.
 * User: kunkka
 * Date: 2018/1/7
 * Time: 21:31
 */

namespace app\lib\exception;


class BannerMissException extends BaseException
{
    public $code = 404;
    public $msg = '请求的banner不存在';
    public $errorCode = 40000;
}