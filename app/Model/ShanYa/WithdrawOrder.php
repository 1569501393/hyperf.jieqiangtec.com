<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property int $uid 用户id
 * @property int $sn 订单号
 * @property int $amount 金额，单位：分
 * @property int $point 鸭蛋数
 * @property int $setting_id 设置id
 * @property int $condition_index 设置id条件的索引值
 * @property int $withdraw_num 累计提现次数
 * @property int $status 状态 0：申请中，1：已到账，2：失败，3：大额审核
 * @property int $day 天
 * @property string $reason 拒绝理由
 * @property string $channel 渠道
 * @property string $imei imei
 * @property string $androidid 
 * @property string $oaid 
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class WithdrawOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'withdraw_order';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'sn' => 'integer', 'amount' => 'integer', 'point' => 'integer', 'setting_id' => 'integer', 'condition_index' => 'integer', 'withdraw_num' => 'integer', 'status' => 'integer', 'day' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}