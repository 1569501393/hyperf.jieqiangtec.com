<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $plan_id 
 * @property int $supplier_id 广告主ID
 * @property string $start_at 计划上线时间
 * @property string $suspend_at 计划暂停时间
 * @property int $duration 在线时长，以分钟为单位
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAdvertPlanStartSuspendLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_plan_start_suspend_log';
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
    protected $casts = ['id' => 'integer', 'plan_id' => 'integer', 'supplier_id' => 'integer', 'duration' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}