<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $activity_name 活动名称
 * @property int $activity_status 活动标识，1.瓜分金豆
 * @property int $if_status 是否开启活动，1.开启，2.关闭
 * @property int $type 奖池类型，1.以总奖金池，2.以人均奖金池
 * @property int $start_money 奖金开始
 * @property int $end_money 奖金结束
 * @property string $beans_at 奖励发放时间
 * @property string $banner_url 入口banner
 * @property int $rotor_times 抽奖次数
 * @property string $rotor_text 奖励配置
 * @property string $rotor_background 转盘背景图
 * @property int $sort 排序
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property string $apply_starts_at 报名开始时间
 * @property string $apply_ends_at 报名结束时间
 */
class IbrandActivityBean extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_beans';
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
    protected $casts = ['id' => 'integer', 'activity_status' => 'integer', 'if_status' => 'integer', 'type' => 'integer', 'start_money' => 'integer', 'end_money' => 'integer', 'rotor_times' => 'integer', 'sort' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}