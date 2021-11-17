<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $activity_status 活动类型，1.瓜分金豆
 * @property int $rihuo_num 今日活跃用户数
 * @property int $enter_task_num 进入任务页面人数
 * @property int $enter_task_times 进入任务页面次数
 * @property int $enter_activity_num 进入活动人数
 * @property int $enter_activity_times 进入活动次数
 * @property int $beans_num 报名人数
 * @property int $receive_num 领奖人数
 * @property int $total_point_num 总领取金豆数
 * @property string $record_at 记录日期
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandActivityRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_record';
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
    protected $casts = ['id' => 'integer', 'activity_status' => 'integer', 'rihuo_num' => 'integer', 'enter_task_num' => 'integer', 'enter_task_times' => 'integer', 'enter_activity_num' => 'integer', 'enter_activity_times' => 'integer', 'beans_num' => 'integer', 'receive_num' => 'integer', 'total_point_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}