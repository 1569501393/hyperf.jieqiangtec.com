<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property string $title 标题
 * @property string $desc 描述
 * @property string $icon_text 推广位角标文字
 * @property int $type 任务类型，1.看视频领泡泡奖励任务,2.看广告赚钱任务,3.语音红包任务,4.游戏试玩任务,5.h5跳转任务, 6.珊瑚下载任务
 * @property int $bean_type 是否展示金豆，1是 0 否
 * @property string $button_text 高额任务按钮默认文字
 * @property string $url 跳转链接
 * @property string $icon 图标链接
 * @property int $point 展示的金豆
 * @property int $is_enable 是否启用 1是 0否
 * @property int $sort 排序
 * @property int $loc 任务位置：1高额任务 2个人中心推广位
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class IbrandTaskCenter extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_task_center';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'bean_type' => 'integer', 'point' => 'integer', 'is_enable' => 'integer', 'sort' => 'integer', 'loc' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}