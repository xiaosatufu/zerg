<?php
/**
 * Created by PhpStorm.
 * User: kunkka
 * Date: 2018/1/8
 * Time: 20:40
 */

namespace app\lib\exception;


class ParameterException extends BaseException
{
    public $code = 400;
    public $msg = '参数错误';
    public $error_Code = 10000;
}