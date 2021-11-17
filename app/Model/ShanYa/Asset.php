<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 用户id
 * @property int $point 当前积分（鸭蛋）数
 * @property int $effective_point 已生效可领取，但是还未进入point字段的积分
 * @property int $coin 普通饲料
 * @property int $cash 金额，单位：分
 * @property int $withdraw_cash 已提现金额
 * @property int $withdraw_num 累计提现次数
 * @property int $withdraw_small_num 累计小额提现次数
 * @property int $withdraw_normal_num 累计常规提现次数
 * @property int $withdraw_large_num 累计大额提现次数
 * @property int $withdraw_shanhu_num 累计珊瑚提现次数
 * @property int $withdraw_super_egg_num 累计惊喜鸭蛋提现次数
 * @property int $withdraw_game_num 累计游戏试玩提现次数
 * @property int $withdraw_rotor_num 累计大转盘提现次数
 * @property int $home_coin_num 首页饲料累计领取次数
 * @property int $interaction_num 运动鸭累计领取次数
 * @property int $divide_num 瓜分饲料累计领取次数
 * @property int $coral_num 珊瑚下载累计领取次数
 * @property int $watch_num 来看鸭累计领取次数
 * @property int $super_num 超级加倍累计领取次数
 * @property int $super_home_coin_num 首页超级饲料累计领取次数
 * @property int $super_egg_num 惊喜鸭蛋累计领取次数
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class Asset extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assets';
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
    protected $casts = ['id' => 'integer', 'point' => 'integer', 'effective_point' => 'integer', 'coin' => 'integer', 'cash' => 'integer', 'withdraw_cash' => 'integer', 'withdraw_num' => 'integer', 'withdraw_small_num' => 'integer', 'withdraw_normal_num' => 'integer', 'withdraw_large_num' => 'integer', 'withdraw_shanhu_num' => 'integer', 'withdraw_super_egg_num' => 'integer', 'withdraw_game_num' => 'integer', 'withdraw_rotor_num' => 'integer', 'home_coin_num' => 'integer', 'interaction_num' => 'integer', 'divide_num' => 'integer', 'coral_num' => 'integer', 'watch_num' => 'integer', 'super_num' => 'integer', 'super_home_coin_num' => 'integer', 'super_egg_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}