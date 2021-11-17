<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property int $activity_id 活动id,关联activity
 * @property string $name 奖项名称
 * @property int $type 类型 1：虚拟奖励 2：余额 3：金豆
 * @property int $value 奖项值
 * @property int $change 中奖概率
 * @property int $is_first_bid 是否首次必中  0：否，1：是
 * @property int $is_redirect 是否直接跳转url
 * @property string $url 跳转url
 * @property int $status 状态 0：关闭，1：开启
 * @property int $operator_id 操作人员id
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property int $deleted_at 删除时间
 */
class ActivityExtRotor extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity_ext_rotor';
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
    protected $casts = ['id' => 'integer', 'activity_id' => 'integer', 'type' => 'integer', 'value' => 'integer', 'change' => 'integer', 'is_first_bid' => 'integer', 'is_redirect' => 'integer', 'status' => 'integer', 'operator_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'integer'];
}