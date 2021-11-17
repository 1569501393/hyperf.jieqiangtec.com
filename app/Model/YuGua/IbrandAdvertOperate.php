<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $reg_user_times 注册用户数：当天新注册的人数
 * @property int $sn_times 新增设备数：注意去重；
 * @property int $bind_user_times 新增绑定微信人数
 * @property string $reg_rate 注册率：注册数/新增设备数
 * @property int $cihuo_times 新增次活数：次日登录，并至少刷过一个视频的用户
 * @property string $cihuo_rate 新增次活率：新增次活数/昨日注册数
 * @property int $cash_times 新人提现：新人提现的人数
 * @property string $cash_rate 新人提现率：新人提现人数/当日注册数
 * @property string $rihuoj_profit 日均广告收益：广告总收益/日活用户
 * @property string $rihuoj_amount 日活均价值：纯利润/日活用户
 * @property int $huoyue_times 日活用户：当天点击过一个金豆的用户数量
 * @property int $rihuosn_times 日活用户：当天点击过一个金豆的用户数量
 * @property int $zero_three_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_ac_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D11_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D12_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D13_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D14_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D15_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D16_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D17_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D18_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D19_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D21_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D22_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D23_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D24_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D25_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D26_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D27_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D28_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_three_D29_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $fifty_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $hundred_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $zero_five_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $one_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $two_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property int $five_cash_num 提现笔数：当日提现的次数（总次数，再分别统计0.3、0.5、1、2、5元的提现）
 * @property string $capex 投放成本
 * @property string $cash 提现成本
 * @property string $csj_profit 穿山甲收益
 * @property string $ylh_profit 优量汇收益
 * @property string $total_profit 总收益：两个收益相加
 * @property string $total_capex 总成本：投放成本+提现成本
 * @property string $chun_profit 纯利润：总收益-总成本
 * @property int $old_cash_num 老人提现：总提现-新人提现
 * @property string $rihuo_zhanbi_rate 日活占比%（日活设备/日活用户）
 * @property string $huoyue_add_rate 活跃新增占比（推广指标）（今日注册用户数/昨日日活设备）
 * @property int $new_user_point_num 新人领豆
 * @property string $draw_point_rate 领豆率（注册用户数/新人领豆）
 * @property string $other_profit 其他平台收益（手动填入）
 * @property string $sn_rate 设备贡献（总收益/日活设备）
 * @property string $jihuo_capex 人均激活成本（投放成本/新增设备）
 * @property string $reg_capex 人均注册成本（投放成本/注册设备）
 * @property string $cash_capex 人均提现成本（提现成本/日活设备）
 * @property string $tuig_profit 收益-推广（总收益-投放成本）
 * @property string $old_cash_rate 占比（老人提现/提现总笔数）
 * @property int $cash_users 提现总人数
 * @property string $version 版本号
 * @property string $record_at 记录日期
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertOperate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_operate';
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
    protected $casts = ['id' => 'integer', 'reg_user_times' => 'integer', 'sn_times' => 'integer', 'bind_user_times' => 'integer', 'cihuo_times' => 'integer', 'cash_times' => 'integer', 'huoyue_times' => 'integer', 'rihuosn_times' => 'integer', 'zero_three_cash_num' => 'integer', 'zero_three_ac_cash_num' => 'integer', 'zero_three_D11_cash_num' => 'integer', 'zero_three_D12_cash_num' => 'integer', 'zero_three_D13_cash_num' => 'integer', 'zero_three_D14_cash_num' => 'integer', 'zero_three_D15_cash_num' => 'integer', 'zero_three_D16_cash_num' => 'integer', 'zero_three_D17_cash_num' => 'integer', 'zero_three_D18_cash_num' => 'integer', 'zero_three_D19_cash_num' => 'integer', 'zero_three_D21_cash_num' => 'integer', 'zero_three_D22_cash_num' => 'integer', 'zero_three_D23_cash_num' => 'integer', 'zero_three_D24_cash_num' => 'integer', 'zero_three_D25_cash_num' => 'integer', 'zero_three_D26_cash_num' => 'integer', 'zero_three_D27_cash_num' => 'integer', 'zero_three_D28_cash_num' => 'integer', 'zero_three_D29_cash_num' => 'integer', 'fifty_cash_num' => 'integer', 'hundred_cash_num' => 'integer', 'zero_five_cash_num' => 'integer', 'one_cash_num' => 'integer', 'two_cash_num' => 'integer', 'five_cash_num' => 'integer', 'old_cash_num' => 'integer', 'new_user_point_num' => 'integer', 'cash_users' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}