<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $type 任务类型 1：领取普通饲料，2：领取互动饲料，3：观看专属视频
 * @property int $num 完成的任务数
 * @property int $status 状态 0：未领取，1：已领取
 * @property int $day 天
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class UserTaskRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_task_record';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'type' => 'integer', 'num' => 'integer', 'status' => 'integer', 'day' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}