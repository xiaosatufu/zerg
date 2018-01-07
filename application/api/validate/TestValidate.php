<?php
/**
 * Created by PhpStorm.
 * User: kunkka
 * Date: 2018/1/6
 * Time: 19:38
 */

namespace app\api\validate;


use think\Validate;

class TestValidate extends  Validate
{
    protected $rule = [
        'name'=>'require|max:10',
        'email'=>'email'
    ];
}