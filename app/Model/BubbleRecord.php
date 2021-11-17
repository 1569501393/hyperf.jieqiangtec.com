<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $index 第几个泡泡
 * @property int $type 类型 1：普通饲料，2：互动饲料，3：神秘奖励，4：超级加倍
 * @property int $status 状态 0：未点击，1：已点击
 * @property int $active_time 生效时间
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class BubbleRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'bubble_record';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'index' => 'integer', 'type' => 'integer', 'status' => 'integer', 'active_time' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}