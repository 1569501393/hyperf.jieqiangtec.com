<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $userid 用户ID
 * @property int $supplier_id 广告主ID
 * @property int $advert_plan_id 广告id
 * @property string $cost 费用,单位分
 * @property int $type 1:展示 2:点击
 * @property int $show_times 展示次数
 * @property int $click_times 点击次数
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAdvertPlanRecord202203 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_plan_record_202203';
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
    protected $casts = ['id' => 'integer', 'userid' => 'integer', 'supplier_id' => 'integer', 'advert_plan_id' => 'integer', 'type' => 'integer', 'show_times' => 'integer', 'click_times' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}