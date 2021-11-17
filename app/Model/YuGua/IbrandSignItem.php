<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $sign_id 
 * @property int $user_id 
 * @property string $sign_reward 本次签到的抽奖列表
 * @property string $sign_time 签到时间
 * @property int $days 连续第几天签到
 * @property int $reward_status 是否已抽奖
 * @property int $reward_id 中奖的ID
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandSignItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_sign_item';
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
    protected $casts = ['id' => 'integer', 'sign_id' => 'integer', 'user_id' => 'integer', 'days' => 'integer', 'reward_status' => 'integer', 'reward_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}