<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $channel 渠道
 * @property int $new_cash_users 新人提现总人数:渠道当日注册用户有提现的总人数
 * @property int $new_cash_times 新人提现总笔数:渠道当日注册用户的提现总笔数
 * @property int $new_cash_amount 提现总提现金额:渠道当日注册用户的提现金额总和
 * @property int $retention_one 次日留存数：注册且提现的用户在第二天还有提现的用户人数
 * @property int $retention_one_rate 次日留存率：次日留存数/新人提现总人数
 * @property int $retention_two 2日留存数：注册且提现的用户在第三天还有提现的用户人数
 * @property int $retention_two_rate 2日留存率：2日留存数/新人提现总人数
 * @property int $retention_three 3日留存数：注册且提现的用户在第四天还有提现的用户人数
 * @property int $retention_three_rate 3日留存率：3日留存数/新人提现总人数
 * @property int $retention_four 4日留存数：注册且提现的用户在第五天还有提现的用户人数
 * @property int $retention_four_rate 4日留存率：4日留存数/新人提现总人数
 * @property int $retention_five 5日留存数：注册且提现的用户在第六天还有提现的用户人数
 * @property int $retention_five_rate 5日留存率：5日留存数/新人提现总人数
 * @property int $retention_six 6日留存数：注册且提现的用户在第七天还有提现的用户人数
 * @property int $retention_six_rate 6日留存率：6日留存数/新人提现总人数
 * @property int $retention_seven 7日留存数：注册且提现的用户在第八天还有提现的用户人数
 * @property int $retention_seven_rate 7日留存率：7日留存数/新人提现总人数
 * @property int $retention_eight 8日留存数：注册且提现的用户在第九天还有提现的用户人数
 * @property int $retention_eight_rate 8日留存率：8日留存数/新人提现总人数
 * @property int $day 日期（20210716）
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class IbrandChannelCashUserRetention extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_cash_user_retention';
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
    protected $casts = ['id' => 'integer', 'new_cash_users' => 'integer', 'new_cash_times' => 'integer', 'new_cash_amount' => 'integer', 'retention_one' => 'integer', 'retention_one_rate' => 'integer', 'retention_two' => 'integer', 'retention_two_rate' => 'integer', 'retention_three' => 'integer', 'retention_three_rate' => 'integer', 'retention_four' => 'integer', 'retention_four_rate' => 'integer', 'retention_five' => 'integer', 'retention_five_rate' => 'integer', 'retention_six' => 'integer', 'retention_six_rate' => 'integer', 'retention_seven' => 'integer', 'retention_seven_rate' => 'integer', 'retention_eight' => 'integer', 'retention_eight_rate' => 'integer', 'day' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}