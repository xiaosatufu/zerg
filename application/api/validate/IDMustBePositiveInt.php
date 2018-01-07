<?php
/**
 * Created by PhpStorm.
 * User: kunkka
 * Date: 2018/1/6
 * Time: 20:01
 */

namespace app\api\validate;


use think\Validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule =[
        'id'=>'require|isPositiveInteger'
    ];
    protected  function isPositiveInteger($value,$rule='',$data='',$field='') {
        if (is_numeric($value) && is_int($value+0) && ($value+0)>0) {
            return true;
        } else {
            return $field.'必须是正整数';
        }
    }
}