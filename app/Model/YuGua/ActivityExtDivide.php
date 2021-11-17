<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property int $activity_id 活动id,关联activity
 * @property int $num 每日瓜分金豆次数
 * @property int $down_num 瓜分金豆冷却时间
 * @property int $min 最小值
 * @property int $max 最大值
 * @property int $status 状态 0：关闭，1：开启
 * @property int $operator_id 操作人员id
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property int $deleted_at 删除时间
 */
class ActivityExtDivide extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity_ext_divide';
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
    protected $casts = ['id' => 'integer', 'activity_id' => 'integer', 'num' => 'integer', 'down_num' => 'integer', 'min' => 'integer', 'max' => 'integer', 'status' => 'integer', 'operator_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'integer'];
}