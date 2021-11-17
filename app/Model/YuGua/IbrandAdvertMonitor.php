<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户ID
 * @property string $version 版本号
 * @property string $device_id 内部设备号
 * @property string $channel 渠道
 * @property string $cid 
 * @property string $idfa 
 * @property string $imei 
 * @property int $os 系统: 0-android 1-IOS
 * @property string $unit 
 * @property string $androidid 
 * @property string $uid 
 * @property string $oaid 
 * @property string $plan 
 * @property string $mac 
 * @property string $adid 
 * @property string $tsms 返回数据
 * @property string $requestId vivo请求id
 * @property string $clickTime vivo点击时间
 * @property string $callback_url 
 * @property string $returnurl 回调提交地址数据
 * @property int $is_callback 是否回调: 0-否 1-是
 * @property int $status 状态: -1-未激活, 0-已激活, 1-已注册
 * @property string $comefrom 来源: 1-趣头条 2-穿山甲
 * @property string $callback_result 回调返回数据
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAdvertMonitor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_monitor';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'os' => 'integer', 'is_callback' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}