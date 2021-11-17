<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $gain_type 获得积分类型 1：饲料兑换
 * @property int $cost_type 消耗积分类型 1：提现
 * @property int $amount 积分数量
 * @property int $withdraw_oid withdraw_order表id
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class PointRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'point_record';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'gain_type' => 'integer', 'cost_type' => 'integer', 'amount' => 'integer', 'withdraw_oid' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}