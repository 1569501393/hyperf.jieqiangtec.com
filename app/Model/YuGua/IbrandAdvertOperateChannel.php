<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $date 日期
 * @property string $channel_name 渠道名称
 * @property string $channel_type 渠道类型
 * @property int $new_device 新增设备数：当天新增设备数(当前渠道)
 * @property int $new_user 注册用户数：当天新注册人数(当前渠道)
 * @property int $active_user 日活用户数：当天登录人数(当前渠道)
 * @property int $next_active_user 次活用户数：次日活跃人数(当前渠道)
 * @property int $ad_click 广告点击数：当天点击广告次数(当前渠道)
 * @property int $ad_show 广告展示数：当天展示广告次数(当前渠道)
 * @property int $new_ad_click 新用户人均广告点击数
 * @property int $new_ad_show 新用户广告展示数
 * @property int $new_cash_times 新用户提现数
 * @property string $remarks 备注
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertOperateChannel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_operate_channel';
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
    protected $casts = ['id' => 'integer', 'new_device' => 'integer', 'new_user' => 'integer', 'active_user' => 'integer', 'next_active_user' => 'integer', 'ad_click' => 'integer', 'ad_show' => 'integer', 'new_ad_click' => 'integer', 'new_ad_show' => 'integer', 'new_cash_times' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}