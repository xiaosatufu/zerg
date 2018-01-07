<?php
/**
 * Created by PhpStorm.
 * User: kunkka
 * Date: 2018/1/7
 * Time: 21:27
 */

namespace app\lib\exception;


use think\Exception;

class BaseException extends Exception
{
    //HTTP 状态码 404,200...
    public $code = 400;

    //错误具体信息
    public $msg = '参数错误';

    //自定义错误码
    public $errorCode = '10000';
}