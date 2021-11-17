<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $type 1.全部用户  2.新用户
 * @property int $rihuo_num 日活用户数
 * @property int $enter_activity_num 进入活动入口人数
 * @property int $sign_num 报名人数(去重)
 * @property int $task_one_num 完成任务1
 * @property int $task_two_num 完成任务2
 * @property int $task_three_num 完成任务3
 * @property int $today_finish_num 当日达成领取小奖人数
 * @property int $today_actual_num 当日实际领取小奖人数
 * @property int $sign_ciliu_num 报名用户次留存
 * @property int $today_point_num 当日总发放金豆
 * @property int $finish_prize_num 达成领奖条件人数
 * @property int $actual_prize_num 实际领奖人数
 * @property int $total_point_num 总发放金豆
 * @property int $finish_task_num 7天连续完成任务人数
 * @property string $record_at 记录日期
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandActivityRecordNational extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_record_national';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'rihuo_num' => 'integer', 'enter_activity_num' => 'integer', 'sign_num' => 'integer', 'task_one_num' => 'integer', 'task_two_num' => 'integer', 'task_three_num' => 'integer', 'today_finish_num' => 'integer', 'today_actual_num' => 'integer', 'sign_ciliu_num' => 'integer', 'today_point_num' => 'integer', 'finish_prize_num' => 'integer', 'actual_prize_num' => 'integer', 'total_point_num' => 'integer', 'finish_task_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}