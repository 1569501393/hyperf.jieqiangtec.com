<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户id
 * @property string $device_id 设备号
 * @property int $activity_status 活动类型，1.瓜分金豆
 * @property int $activity_event 处理事件，1.任务，2.活动
 * @property int $task 任务
 * @property int $activity 活动
 * @property string $record_at 记录日期
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandActivityRecordLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_record_log';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'activity_status' => 'integer', 'activity_event' => 'integer', 'task' => 'integer', 'activity' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}