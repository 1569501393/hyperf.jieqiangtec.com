<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $title 活动名称
 * @property string $label 活动说明
 * @property string $share_text 分享文案
 * @property string $rule_desc 规则描述
 * @property string $rules 连续签到规则：{"1","2"...},暂时限定顶多7天
 * @property string $action 连续签到动作，送积分/送优惠券： [{"point":1,"coupon":2},{"point":2,"coupon":2}]
 * @property int $status 状态：1 有效 ，0 失效   
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandSign extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_sign';
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
    protected $casts = ['id' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}