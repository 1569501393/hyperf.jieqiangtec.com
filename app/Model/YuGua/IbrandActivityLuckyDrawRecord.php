<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property int $uid 用户id
 * @property int $chance_id 抽奖机会id
 * @property string $name 奖品名称
 * @property int $award_id 奖项id
 * @property int $award_type 提现类型 (1: 无门槛提现, 2: 超级红包提现, 3: 大额提现, 4: 现金金额)
 * @property int $value 最终中奖金额，单位分
 * @property int $day 日期（20210607）
 * @property int $status 状态 0：未提现，1：已提现
 * @property int $chance_at 机会时间
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class IbrandActivityLuckyDrawRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_lucky_draw_record';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'chance_id' => 'integer', 'award_id' => 'integer', 'award_type' => 'integer', 'value' => 'integer', 'day' => 'integer', 'status' => 'integer', 'chance_at' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}