<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property string $name 奖品名称
 * @property int $award_id 奖项id
 * @property int $award_type 类型 1：金豆，2：余额，3：虚拟奖励
 * @property int $status 状态 0：未领取，1：已领取
 * @property int $day 日期（20210607）
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class IbrandActivityFlopRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_flop_record';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'award_id' => 'integer', 'award_type' => 'integer', 'status' => 'integer', 'day' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}