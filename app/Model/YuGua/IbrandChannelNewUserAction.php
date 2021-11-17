<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $date 日期
 * @property string $channel 渠道
 * @property string $active_user 活跃用户
 * @property string $point 消耗
 * @property string $new_active_user 激活数
 * @property string $reg_user 注册数
 * @property string $ci_active 次活数
 * @property string $advert_click 广告总点击数
 * @property string $advert_show 广告总展示数
 * @property string $new_advert_click 新用户广告总点击数
 * @property string $new_advert_avg_click 新用户人均广告点击数
 * @property string $new_advert_show 新用户广告总展示数
 * @property string $new_advert_avg_show 新用户人均广告展示数
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandChannelNewUserAction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_new_user_action';
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
    protected $casts = ['id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}