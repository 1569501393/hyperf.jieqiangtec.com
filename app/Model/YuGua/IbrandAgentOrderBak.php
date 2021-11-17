<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $agent_id 
 * @property int $from_agent_id 来源分销商id
 * @property int $from_user_id 来源用户的ID
 * @property int $level 来源分销商层级
 * @property string $agent_order_no 分销订单编号
 * @property string $origin_type 类型
 * @property int $origin_id 类型对应的id
 * @property int $total_commission 总佣金
 * @property int $commission 预计可获得佣金
 * @property int $status 佣金状态: 0、未结算 1、已结算  2、已失效
 * @property string $settle_time 结算时间
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAgentOrderBak extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_agent_order_bak';
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
    protected $casts = ['id' => 'integer', 'agent_id' => 'integer', 'from_agent_id' => 'integer', 'from_user_id' => 'integer', 'level' => 'integer', 'origin_id' => 'integer', 'total_commission' => 'integer', 'commission' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}