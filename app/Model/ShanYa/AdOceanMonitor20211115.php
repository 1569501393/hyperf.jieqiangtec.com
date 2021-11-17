<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $callback_url 调用事件回传接口的url
 * @property string $imei 安卓手机 imei 的 md5 摘要
 * @property string $idfa ios 手机的 idfa 原值
 * @property string $androidid 安卓id原值的md5，32位
 * @property string $oaid Android Q 版本的 oaid 原值
 * @property string $oaid_md5 Android Q 版本的 oaid 原值的md5摘要
 * @property string $caid1 中国广告协会互联网广告标识
 * @property int $os 客户端的操作系统类型 0: android 1: ios
 * @property int $active 是否在打开首页时上报激活 0:否，1：是
 * @property int $register 是否在用户注册时上报注册 0:否，1：是
 * @property int $type 类型 1：一次提现上报，2：二次提现上报
 * @property int $spec 特殊 1:原有二次提现的关键行为上报 改为 激励上报
 * @property int $jili 激励视频数观看数量达到这个值时进行关 键行为上报
 * @property string $channel 渠道来源
 * @property int $platform 平台类型 1：今日头条，2：快手
 * @property \Carbon\Carbon $created_at 
 */
class AdOceanMonitor20211115 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ad_ocean_monitor_20211115';
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'shanya';
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
    protected $casts = ['id' => 'integer', 'os' => 'integer', 'active' => 'integer', 'register' => 'integer', 'type' => 'integer', 'spec' => 'integer', 'jili' => 'integer', 'platform' => 'integer', 'created_at' => 'datetime'];
}