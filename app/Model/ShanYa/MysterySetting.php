<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property int $award_num 奖励现金
 * @property int $platform 平台类型 0:全部 1:android  2:ios
 * @property int $total_num 互动次数
 * @property string $title 标题
 * @property string $subtitle 副标题
 * @property string $describe 描述
 * @property int $type 类型 1:应用试玩  2:超级加倍-惊喜鸭蛋 3:语音红包
 * @property string $url url
 * @property string $icon 图标
 * @property int $sort 排序,数值越大越靠前
 * @property int $status 状态 0：关闭 1：开启
 * @property int $activity_id 活动id,关联activity表
 * @property int $operator_id 操作人员uid
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property int $deleted_at 删除时间
 */
class MysterySetting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mystery_setting';
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
    protected $casts = ['id' => 'integer', 'award_num' => 'integer', 'platform' => 'integer', 'total_num' => 'integer', 'type' => 'integer', 'sort' => 'integer', 'status' => 'integer', 'activity_id' => 'integer', 'operator_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'integer'];
}