<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $date 日期
 * @property int $uid 异常用户
 * @property int $is_jili_request_num 是否激励请求数异常
 * @property int $jili_request_num 激励请求数
 * @property int $is_jili_display_num 是否激励展示数异常
 * @property int $jili_display_num 激励展示数
 * @property int $jili_return_num 激励返回数
 * @property int $is_jili_error_num 是否激励失败数异常
 * @property int $jili_error_num 激励失败数
 * @property int $is_jili_click_rate 是否激励点击数率超过xx 且 展示数超过xx
 * @property int $jili_click_num 激励点击数
 * @property int $jili_click_rate 激励点击率 (激励点击数/激励返回数)
 * @property int $is_kuaishou_jili_request_num 是否快手激励请求数异常
 * @property int $kuaishou_jili_request_num 快手激励请求数
 * @property int $is_kuaishou_jili_error_num 是否快手激励失败数异常
 * @property int $kuaishou_jili_error_num 快手激励失败数
 * @property int $is_model_channel_ipd 是否机型、渠道、ipd重复超过x次
 * @property int $model_channel_ipd_user_num 机型、渠道、ipd重复超过x次的用户数
 * @property string $model 重复的机型
 * @property string $channel 重复的渠道
 * @property string $ipd 重复的ipd
 * @property string $ipds 重复的ipd
 * @property int $is_login_ip_num 是否单日登录次数超过x次
 * @property int $login_ip_num 登录ip数量超过x个
 * @property string $login_ips 登录的ip(去重)
 * @property int $is_abnormal_time_login_num 是否异常时间登录数异常
 * @property int $abnormal_time_login_num 异常时间登录数
 * @property string $abnormal_time_login_times 异常时间登录时间
 * @property int $is_login_num 是否登录次数异常
 * @property int $login_num 异常登录次数
 * @property string $login_times 异常登录次数登录时间
 * @property int $is_withdraw_num 是否提现次数异常
 * @property int $withdraw_num 提现次数
 * @property int $status 审核状态. 0:禁用; 1:已处理; 2: 未处理;
 * @property int $operator_id 操作人
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class AbnormalUserBehaviorReport extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'abnormal_user_behavior_report';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'is_jili_request_num' => 'integer', 'jili_request_num' => 'integer', 'is_jili_display_num' => 'integer', 'jili_display_num' => 'integer', 'jili_return_num' => 'integer', 'is_jili_error_num' => 'integer', 'jili_error_num' => 'integer', 'is_jili_click_rate' => 'integer', 'jili_click_num' => 'integer', 'jili_click_rate' => 'integer', 'is_kuaishou_jili_request_num' => 'integer', 'kuaishou_jili_request_num' => 'integer', 'is_kuaishou_jili_error_num' => 'integer', 'kuaishou_jili_error_num' => 'integer', 'is_model_channel_ipd' => 'integer', 'model_channel_ipd_user_num' => 'integer', 'is_login_ip_num' => 'integer', 'login_ip_num' => 'integer', 'is_abnormal_time_login_num' => 'integer', 'abnormal_time_login_num' => 'integer', 'is_login_num' => 'integer', 'login_num' => 'integer', 'is_withdraw_num' => 'integer', 'withdraw_num' => 'integer', 'status' => 'integer', 'operator_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}