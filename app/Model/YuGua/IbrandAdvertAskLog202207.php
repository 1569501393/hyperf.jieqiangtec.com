<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户id
 * @property string $mobile_phone 手机型号
 * @property string $device_sn 设备号
 * @property int $advert_way 广告源，1.穿山甲，2.优量汇，3.百青藤
 * @property int $advert_type 广告类型，1.开屏 2.激励视频 3.信息流 4.贴片
 * @property int $type 执行事件, 1-request_start：发起请求;2-request_succ：请求成功;3-request_fail：请求失败;4-request_rend：渲染失败
 * @property string $code_bit 代码位
 * @property int $request_num 请求数量
 * @property int $return_num 返回数量
 * @property string $error_code 错误code
 * @property string $error_msg 错误message
 * @property int $client 客户端，1.安卓 2.ios
 * @property string $record_at 记录日期
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertAskLog202207 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_ask_log_202207';
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'yugua';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'advert_way' => 'integer', 'advert_type' => 'integer', 'type' => 'integer', 'request_num' => 'integer', 'return_num' => 'integer', 'client' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}