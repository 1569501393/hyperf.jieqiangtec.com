<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $activity_id 活动ID
 * @property int $user_id 
 * @property int $item_id 
 * @property int $type 类型：1 泡泡 2 激励视频 3 邀徒
 * @property int $status 状态：0 未完成  1 已完成
 * @property string $date 任务日期
 * @property int $num 任务完成数量
 * @property int $finish 达成领奖条件标志
 * @property int $seven_lx 7天连续完成任务标志
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandHolidayActivityRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_holiday_activity_record';
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
    protected $casts = ['id' => 'integer', 'activity_id' => 'integer', 'user_id' => 'integer', 'item_id' => 'integer', 'type' => 'integer', 'status' => 'integer', 'num' => 'integer', 'finish' => 'integer', 'seven_lx' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}