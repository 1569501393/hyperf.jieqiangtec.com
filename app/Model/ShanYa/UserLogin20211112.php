<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property string $phone_model 手机型号
 * @property string $ip ip地址
 * @property string $channel 渠道
 * @property string $version 版本号
 * @property string $imei 安卓手机 imei 的 md5 摘要
 * @property string $idfa ios 手机的 idfa 原值
 * @property string $androidid 安卓id原值的md5，32位
 * @property string $oaid Android Q 版本的 oaid 原值
 * @property \Carbon\Carbon $created_at 创建时间
 */
class UserLogin20211112 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_login_20211112';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'created_at' => 'datetime'];
}