<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $activity_id 活动ID
 * @property int $user_id 
 * @property string $join_at 加入活动时间
 * @property int $status 活动状态：1 进行中；2 已完成任务 3 已领取奖励
 * @property int $step 已完成步数
 * @property string $completed_at 完成时间
 * @property int $gold_bean 金豆奖励
 * @property int $balance 余额奖励
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandHolidayActivityItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_holiday_activity_items';
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
    protected $casts = ['id' => 'integer', 'activity_id' => 'integer', 'user_id' => 'integer', 'status' => 'integer', 'step' => 'integer', 'gold_bean' => 'integer', 'balance' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}