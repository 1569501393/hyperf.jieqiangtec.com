<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $agent_id 分销商id
 * @property int $order_item_id 订单item ID
 * @property int $agent_order_id 分销商订单表ID
 * @property string $rate 佣金比例
 * @property int $total_commission 总佣金 单位为分
 * @property int $commission 预计可获得佣金
 * @property int $status 佣金状态: 0、未结算 1、已结算  2、已失效
 * @property string $settle_time 结算时间
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAgentOrderItem extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_agent_order_item';
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
    protected $casts = ['id' => 'integer', 'agent_id' => 'integer', 'order_item_id' => 'integer', 'agent_order_id' => 'integer', 'total_commission' => 'integer', 'commission' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}