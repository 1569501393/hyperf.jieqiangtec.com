<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $uuid 唯一id，每个广告唯一
 * @property int $sn 根据具体业务不同，大部分时候是coin_record表id
 * @property int $action 行为类型 1：发起请求，2：请求成功，3：请求失败，4：展示成功，5：video_start，6：video_pause，7：video_end，8：video_stop，9：点击，10：广告关闭
 * @property int $type 类型 1：开屏广告，2：首页饲料，3：日常任务，4：签到任务，5：活动任务，6：贴片广告
 * @property int $detail 详细类型
 * @property int $code_id advert_code表id
 * @property int $source 广告源
 * @property string $err_code 错误码
 * @property string $err_msg 错误消息
 * @property int $platform 平台类型
 * @property string $channel 来源渠道
 * @property string $app_ver app版本号
 * @property \Carbon\Carbon $created_at 创建时间
 */
class AdvertActionLog20210916 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'advert_action_log_20210916';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'uuid' => 'integer', 'sn' => 'integer', 'action' => 'integer', 'type' => 'integer', 'detail' => 'integer', 'code_id' => 'integer', 'source' => 'integer', 'platform' => 'integer', 'created_at' => 'datetime'];
}