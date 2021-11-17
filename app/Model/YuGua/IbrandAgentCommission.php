<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $agent_id 分销商ID
 * @property int $agent_order_id 分销商订单表ID
 * @property int $commission 佣金 单位为分
 * @property string $note 描述
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAgentCommission extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_agent_commission';
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
    protected $casts = ['id' => 'integer', 'agent_id' => 'integer', 'agent_order_id' => 'integer', 'commission' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}