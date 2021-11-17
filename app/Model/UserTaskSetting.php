<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property int $award_num 奖励饲料
 * @property int $award_type 奖励类型 1:基础饲料  2:超级饲料
 * @property int $total_num 互动次数
 * @property string $title 标题
 * @property string $subtitle 副标题
 * @property string $describe 描述
 * @property int $type 类型 1:基础任务  2:互动任务 3:观看专属视频，4：活动，5：跳转链接
 * @property string $url url，当type=5时对应的跳转链接
 * @property int $activity_id 当type=4时对应的activity表id
 * @property string $icon 图标
 * @property string $button_icon 按钮图标 0：未领取未达到领取条件（去完成）  1：未领取已达到领取条件（领饲料） 2:已领取（明日再来）
 * @property int $sort 排序,数值越大越靠前
 * @property int $status 状态 0：关闭 1：开启
 * @property int $operator_id 操作人员uid
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property int $deleted_at 删除时间
 */
class UserTaskSetting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_task_setting';
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
    protected $casts = ['id' => 'integer', 'award_num' => 'integer', 'award_type' => 'integer', 'total_num' => 'integer', 'type' => 'integer', 'activity_id' => 'integer', 'sort' => 'integer', 'status' => 'integer', 'operator_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'integer'];
}