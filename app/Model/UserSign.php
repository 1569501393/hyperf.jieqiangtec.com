<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $index 连续第几天
 * @property int $day 当前天（20210705）
 * @property int $status 状态 1：已领取基础奖励，2：已获得翻倍奖励
 * @property int $num 饲料数量
 * @property int $coin_record_id coin_record 表 id
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class UserSign extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_sign';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'index' => 'integer', 'day' => 'integer', 'status' => 'integer', 'num' => 'integer', 'coin_record_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}