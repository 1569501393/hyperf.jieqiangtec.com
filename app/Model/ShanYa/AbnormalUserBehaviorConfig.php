<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $model_channel_ipd 机型、渠道、ipd重复数
 * @property int $login_ip 登录ip数
 * @property int $abnormal_time_login 异常时间登录数（凌晨01:00:00-05:00:00）
 * @property int $jili_request_num 激励请求数
 * @property int $jili_error_num 激励请求失败数
 * @property int $kuaishou_jili_request_num 快手激励请求数
 * @property int $kuaishou_jili_error_num 快手激励请求失败数
 * @property int $jili_display_num 激励展示失败数
 * @property int $jili_click_rate 激励点击率
 * @property int $jili_click_rate_display 且激励视频展示数
 * @property int $withdraw_num 提现数量
 * @property int $login_num 单日用户登录数
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class AbnormalUserBehaviorConfig extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'abnormal_user_behavior_config';
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
    protected $casts = ['id' => 'integer', 'model_channel_ipd' => 'integer', 'login_ip' => 'integer', 'abnormal_time_login' => 'integer', 'jili_request_num' => 'integer', 'jili_error_num' => 'integer', 'kuaishou_jili_request_num' => 'integer', 'kuaishou_jili_error_num' => 'integer', 'jili_display_num' => 'integer', 'jili_click_rate' => 'integer', 'jili_click_rate_display' => 'integer', 'withdraw_num' => 'integer', 'login_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}