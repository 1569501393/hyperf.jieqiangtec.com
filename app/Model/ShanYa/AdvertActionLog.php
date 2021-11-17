<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property string $uuid 唯一id，每个广告唯一
 * @property int $action 行为类型 1：发起请求，2：
 * @property int $type 类型 1：开屏广告，2：首页饲料，3：日常任务，4：签到任务，5：活动任务，6：贴片广告
 * @property string $code 代码位
 * @property string $err_code 错误码
 * @property string $err_msg 错误消息
 * @property string $channel 来源渠道
 * @property \Carbon\Carbon $created_at 创建时间
 */
class AdvertActionLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'advert_action_log';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'action' => 'integer', 'type' => 'integer', 'created_at' => 'datetime'];
}