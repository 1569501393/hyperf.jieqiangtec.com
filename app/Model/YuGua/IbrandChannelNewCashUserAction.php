<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property string $channel 渠道
 * @property int $day 日期（20210723）
 * @property int $new_cash_user 新用户提现人数
 * @property int $new_active_cash_user 新用户提现且活动提现人数
 * @property int $new_active_rate 新人提现且活动提现率:新人提现且活动提现人数/新人提现总人数
 * @property int $new_coral_cash_user 新用户提现且珊瑚珊瑚人数
 * @property int $new_coral_rate 新人提现且珊瑚提现率：新人提现且珊瑚提现人数/新人提现总人数
 * @property int $new_coral_trans_times 提现新用户珊瑚转化成功次数
 * @property int $new_voice_cash_user 新用户提现且语音红包提现人数
 * @property int $new_voice_rate 新人提现且语音红包提现率：新人提现且语音红包提现人数/新人提现总人数
 * @property int $new_rotor_cash_user 新用户提现且大转盘提现人数
 * @property int $new_rotor_rate 新人提现且大转盘提现率：新人提现且大转盘提现人数/新人提现总人数
 * @property int $new_cash_two_user 新用户当日两次及以上提现人数
 * @property int $new_two_rate 二次提现率：二次提现人数/新人提现人数
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class IbrandChannelNewCashUserAction extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_new_cash_user_action';
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
    protected $casts = ['id' => 'integer', 'day' => 'integer', 'new_cash_user' => 'integer', 'new_active_cash_user' => 'integer', 'new_active_rate' => 'integer', 'new_coral_cash_user' => 'integer', 'new_coral_rate' => 'integer', 'new_coral_trans_times' => 'integer', 'new_voice_cash_user' => 'integer', 'new_voice_rate' => 'integer', 'new_rotor_cash_user' => 'integer', 'new_rotor_rate' => 'integer', 'new_cash_two_user' => 'integer', 'new_two_rate' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}