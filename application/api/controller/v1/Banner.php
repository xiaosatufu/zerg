<?php
/**
 * Created by PhpStorm.
 * User: kunkka
 * Date: 2018/1/6
 * Time: 19:06
 */

namespace app\api\controller\v1;


use app\api\validate\IDMustBePositiveInt;
use app\api\model\Banner as BannerModel;
use app\lib\exception\BannerMissException;
use think\Exception;

class Banner
{
    /**
     * 获取指定id的banner信息
     * @id banner的id号
     * @http GET
     * @url /banner/:id
     */
    public function getBanner($id) {

//        echo $id;
        //独立验证
        /*
        $data = [
            'name'=>'vendor11111111',
            'email'=>'vendorqq.com'
        ];
        $validate = new Validate([
            'name'=>'require|max:10',
            'email'=>'email'
        ]);
        $result = $validate-> batch()->check($data);
        var_dump($validate->getError());
        */
        //验证器用法
        /*
        $data = [
            'name'=>'vendor11111111',
            'email'=>'vendorqq.com'
        ];
        $validate = new TestValidate();
        $result = $validate-> batch()->check($data);
        var_dump($validate->getError());
        */

//        $data = [
//            'id'=>$id
//        ];
//        $validate = new IDMustBePositiveInt();
//        $result = $validate->batch()->check($data);
//        if ($result) {
//
//        } else {
//
//        }
        (new IDMustBePositiveInt())->batch()->goCheck();
        /*
            try{
                $banner = BannerModel::getBannerByID($id);
            }
            catch (Exception $ex) {
                $err = [
                    'error_code'=>10001,
                    'msg'=>$ex->getMessage()
                ];
                return json($err,400);
            }
            return $banner;
            */
            $banner = BannerModel::getBannerByID($id);
            if (!$banner) {
//            throw new BannerMissException();
            throw new Exception('内部错误');
        }
        return $banner;

    }

}