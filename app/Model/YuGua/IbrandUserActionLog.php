<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户id
 * @property string $point 昨日已赚的总金豆
 * @property int $audit_time 审核时间
 * @property int $amount 昨日已提现金额
 * @property int $cash_times 昨日提现次数
 * @property int $advert_times 当日刷基础泡泡次数
 * @property int $watch_advert_times 看广告次数
 * @property int $status 转换状态:0 待处理 1审核通过 2已拉黑
 * @property int $date 记录日期:20210531
 * @property int $advert_request_num 广告请求次数
 * @property int $advert_fail_num 广告请求失败次数
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandUserActionLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_user_action_log';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'audit_time' => 'integer', 'amount' => 'integer', 'cash_times' => 'integer', 'advert_times' => 'integer', 'watch_advert_times' => 'integer', 'status' => 'integer', 'date' => 'integer', 'advert_request_num' => 'integer', 'advert_fail_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}