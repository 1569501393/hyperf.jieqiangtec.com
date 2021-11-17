<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $version 版本号
 * @property int $user_id 用户id
 * @property string $device_id 设备号
 * @property string $channel_name 渠道名称
 * @property string $channel_type 渠道类型
 * @property int $channel_event 渠道事件
 * @property int $click_num 点击数
 * @property int $load_num 下载数
 * @property int $open_num 打开数
 * @property int $reg_num 注册数
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandChannelTime extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_time';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'channel_event' => 'integer', 'click_num' => 'integer', 'load_num' => 'integer', 'open_num' => 'integer', 'reg_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}