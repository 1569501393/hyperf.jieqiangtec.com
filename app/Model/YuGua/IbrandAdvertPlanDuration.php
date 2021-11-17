<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $advert_plan_id 
 * @property int $supplier_id 广告主ID
 * @property int $duration 在线时长，以分钟为单位
 * @property string $date 计划对应的在线日期
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property int $charge_type 收费方式 1:CPM:每千次曝光 2:CPC:按点击计算
 * @property int $show_times 展示次数
 * @property int $click_times 点击次数
 * @property string $cost 花费，单位分
 */
class IbrandAdvertPlanDuration extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_plan_duration';
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
    protected $casts = ['id' => 'integer', 'advert_plan_id' => 'integer', 'supplier_id' => 'integer', 'duration' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'charge_type' => 'integer', 'show_times' => 'integer', 'click_times' => 'integer'];
}