<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户id，外键关联 user 表 id 字段
 * @property int $balance_id 
 * @property int $point_id 
 * @property string $point 消耗的金豆
 * @property string $audit_time 审核时间
 * @property int $amount 转结金额
 * @property int $status 转换状态:1 已转换;2 待审核; 3 审核未通过
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $advert_count 当日看广告次数
 * @property string $actual_point 消耗的金豆
 */
class IbrandPointToBalanceLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_point_to_balance_log';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'balance_id' => 'integer', 'point_id' => 'integer', 'amount' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'advert_count' => 'integer'];
}