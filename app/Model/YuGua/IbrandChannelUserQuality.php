<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $channel 渠道
 * @property int $active_user 活跃用户数
 * @property int $new_active_user 激活数
 * @property int $reg_user 注册数
 * @property int $reg_user_rate 注册率，注册数/激活数 * 100
 * @property int $new_cash_times 新用户提现笔数
 * @property int $new_cash_user 新用户提现人数
 * @property int $new_video_total 新用户激励视频展示总次数
 * @property int $new_video_per 新用户人均激励展示数,新用户激励展示总数/激活数 * 100
 * @property int $new_coral_total 新用户珊瑚完成总数
 * @property int $new_coral_per 新用户人均完成珊瑚数
 * @property int $new_voice_per 新用户人均完成语音红包数,新用户完成语音红包总数/注册数
 * @property int $new_voice_total 新用户完成语音红包总数
 * @property int $channel_user_quality_level 渠道用户质量等级,(0.06*新用户人均激励展示数+1*新用户人均完成珊瑚数)*100
 * @property int $day 日期（20210607）
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class IbrandChannelUserQuality extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_user_quality';
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
    protected $casts = ['id' => 'integer', 'active_user' => 'integer', 'new_active_user' => 'integer', 'reg_user' => 'integer', 'reg_user_rate' => 'integer', 'new_cash_times' => 'integer', 'new_cash_user' => 'integer', 'new_video_total' => 'integer', 'new_video_per' => 'integer', 'new_coral_total' => 'integer', 'new_coral_per' => 'integer', 'new_voice_per' => 'integer', 'new_voice_total' => 'integer', 'channel_user_quality_level' => 'integer', 'day' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}