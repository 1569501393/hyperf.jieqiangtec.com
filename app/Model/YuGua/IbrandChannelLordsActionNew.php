<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $date 日期
 * @property string $lord_channel 主渠道
 * @property string $channels 子主渠道
 * @property string $cost 账户消耗
 * @property string $rebate 返点
 * @property string $actual_cost 实际消耗 = 账户消耗/返点
 * @property int $active_user 激活数(友盟)
 * @property string $active_cost 激活成本 = 实际消耗/激活数
 * @property int $register_user 注册数
 * @property string $register_rate 注册率 = 注册数/激活数
 * @property string $register_cost 注册成本 = 实际消耗/注册数
 * @property int $new_user_cash_user 新用户提现数
 * @property string $new_user_cash_rate 新用户提现率 = 新用户提现数/注册数
 * @property string $new_user_cash_cost 新用户提现成本 = 实际消耗/新用户提现数
 * @property int $new_user_second_cash_user 二次及以上提现用户数
 * @property string $new_user_second_cash_cost 二提成本 = 实际消耗/二次及以上提现用户数
 * @property int $second_stay_cash_user 提现次留数
 * @property string $second_stay_cash_rate 提现次留率 = 提现次留数/新用户提现数
 * @property string $second_stay_cash_unit_price 提现次留单价 = 实际消耗/提现次留
 * @property int $jili_one_user 激励完成用户数（>=1
 * @property string $jili_one_cost 激励完成用户成本（>=1） = 实际消耗/激励完成用户数（>=1）
 * @property int $jili_five_user 激励完成用户数（>=5）
 * @property string $jili_five_cost 激励完成用户成本（>=5）
 * @property int $jili_ten_user 激励完成用户数（>=10）
 * @property string $jili_ten_cost 激励完成用户成本（>=10）
 * @property int $jili_total 激励完成总数
 * @property string $jili_total_cost 千次激励视频付费成本（Ecpm）= （实际消耗/激励完成总数）*1000
 * @property string $charge 负责人
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandChannelLordsActionNew extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_lords_action_new';
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
    protected $casts = ['id' => 'integer', 'active_user' => 'integer', 'register_user' => 'integer', 'new_user_cash_user' => 'integer', 'new_user_second_cash_user' => 'integer', 'second_stay_cash_user' => 'integer', 'jili_one_user' => 'integer', 'jili_five_user' => 'integer', 'jili_ten_user' => 'integer', 'jili_total' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}