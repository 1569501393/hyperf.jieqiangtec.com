<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $num 普通饲料数量
 * @property int $gain_type 获得硬币类型 1：领取普通饲料，2：领取互动饲料, 3:签到
 * @property int $cost_type 消耗类型 1：兑换鸭蛋
 * @property int $status 状态 0：未领取，1：已领取
 * @property int $day 天
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class CoinRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'coin_record';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'num' => 'integer', 'gain_type' => 'integer', 'cost_type' => 'integer', 'status' => 'integer', 'day' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}