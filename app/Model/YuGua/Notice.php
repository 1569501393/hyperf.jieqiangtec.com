<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $title 消息标题
 * @property int $type 消息类型.1:海报(开屏显示); 2:系统消息
 * @property int $status 消息状态.0:禁用; 1:启用
 * @property string $cover 
 * @property string $content 消息内容
 * @property string $poster 海报
 * @property string $link 跳转链接
 * @property int $push_type 推送类型.1: 新用户推送; 2:单用户推送; 3:群发推送; 4:补偿推送.
 * @property int $push_target_type 推送目标类型.1: 新用户; 2:单用户; 11:自定义用户; 12:活跃用户; 13:提现用户; 14: 活跃未提现用户; 15: 新增用户.
 * @property int $to_user_id 单用户:被推送的用户id
 * @property string $to_user_ids 自定义用户:被推送的用户id
 * @property int $push_target_start_at 推送目标开始时间
 * @property int $push_target_end_at 推送目标结束时间
 * @property int $push_time 推送时间
 * @property int $compensate_type 补偿类型.0:无; 1:饲料; 2:鸭蛋;
 * @property int $compensate_value 补偿数量
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class Notice extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'notice';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'status' => 'integer', 'push_type' => 'integer', 'push_target_type' => 'integer', 'to_user_id' => 'integer', 'push_target_start_at' => 'integer', 'push_target_end_at' => 'integer', 'push_time' => 'integer', 'compensate_type' => 'integer', 'compensate_value' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}