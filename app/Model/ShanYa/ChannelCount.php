<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $channel 渠道
 * @property int $date 统计日期，时间戳
 * @property int $day 天
 * @property int $active_num 激活数
 * @property int $reg_num 注册数
 * @property string $reg_rate 注册率
 * @property int $new_user_withdraw 新用户提现数
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class ChannelCount extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'channel_count';
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
    protected $casts = ['id' => 'integer', 'date' => 'integer', 'day' => 'integer', 'active_num' => 'integer', 'reg_num' => 'integer', 'new_user_withdraw' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}