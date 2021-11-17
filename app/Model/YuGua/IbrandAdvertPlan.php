<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 广告计划名称
 * @property int $advert_group_id 广告组id
 * @property int $supplier_id 广告主ID
 * @property int $advert_plan_type 广告类型 1开屏SIT 2信息流插屏IFS 3轮播图BNR 6 激励视频
 * @property string $starts_at 开始时间
 * @property string $ends_at 结束时间
 * @property string $reality_ends_at 实际下线时间
 * @property string $reality_starts_at 实际上线时间
 * @property int $charge_type 收费方式 1:CPM:每千次曝光 2:CPC:按点击计算
 * @property int $show_times 展示次数
 * @property int $click_times 点击次数
 * @property string $put_price 投放价格,单位分
 * @property int $put_sys 投放系统 1:ANDROID 2:IOS
 * @property int $general_budget 总预算,单位分
 * @property string $total_cost 总消费金额,单位分
 * @property int $sort 排序（数字越大靠前）
 * @property int $status 状态:0 预览；1草稿；2已提交待审核；3已审核待发布；4审核未通过；5上线；6暂停;7结束
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertPlan extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_plan';
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
    protected $casts = ['id' => 'integer', 'advert_group_id' => 'integer', 'supplier_id' => 'integer', 'advert_plan_type' => 'integer', 'charge_type' => 'integer', 'show_times' => 'integer', 'click_times' => 'integer', 'put_sys' => 'integer', 'general_budget' => 'integer', 'sort' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}