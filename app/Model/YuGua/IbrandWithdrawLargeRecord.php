<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $amount 金额，单位：分
 * @property int $cash_times 提现次数
 * @property int $sign_days 连续签到天数
 * @property int $latest_sign_day 最新签到的日期
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class IbrandWithdrawLargeRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_withdraw_large_record';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'amount' => 'integer', 'cash_times' => 'integer', 'sign_days' => 'integer', 'latest_sign_day' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}