<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $type 类型 与设置表一致
 * @property int $num 完成的任务数
 * @property int $status 状态 0：未领取，1：已领取
 * @property int $day 天
 * @property int $has_withdraw 是否提现 0：否，1：是
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class MysteryRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mystery_record';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'type' => 'integer', 'num' => 'integer', 'status' => 'integer', 'day' => 'integer', 'has_withdraw' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}