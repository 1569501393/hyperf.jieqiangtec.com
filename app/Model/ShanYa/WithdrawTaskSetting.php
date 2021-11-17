<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $label 提现标签
 * @property int $status 提现状态.0:关闭; 1:开启
 * @property int $amount 提现金额,单位分,显示元
 * @property int $seen_num_open 看过xx次数激励视频后开启
 * @property int $cash_num_close 提现xx次数后关闭
 * @property int $balance_amount_hide 余额达到xx后关闭,单位分,显示元
 * @property string $condition 提现条件
 * @property int $type 提现类型:1.常规提现I; 6:删除提现; 7:超级加倍提现
 * @property int $sort 排序
 * @property int $operator_id 操作人uid
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class WithdrawTaskSetting extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'withdraw_task_setting';
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
    protected $casts = ['id' => 'integer', 'status' => 'integer', 'amount' => 'integer', 'seen_num_open' => 'integer', 'cash_num_close' => 'integer', 'balance_amount_hide' => 'integer', 'type' => 'integer', 'sort' => 'integer', 'operator_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}