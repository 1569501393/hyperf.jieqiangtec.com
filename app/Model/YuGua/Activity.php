<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 名称
 * @property string $desc 描述
 * @property string $banner banner图片
 * @property int $type 活动类型： 0:站外 1: 站内 
 * @property int $status 状态 0：关闭，1：开启
 * @property string $android_url android活动链接
 * @property string $ios_url ios活动链接
 * @property int $start_time 活动开始时间
 * @property int $end_time 活动结束时间
 * @property int $num 每日次数
 * @property string $extra 额外配置
 * @property int $operator_id 操作人员id
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property int $deleted_at 删除时间
 */
class Activity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'status' => 'integer', 'start_time' => 'integer', 'end_time' => 'integer', 'num' => 'integer', 'operator_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'integer'];
}