<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $sign_id 
 * @property string $label 奖品提示
 * @property string $type 奖品类型：point 积分；coupon 优惠券；luck 谢谢参与
 * @property int $type_value //如果是积分，则是积分值；优惠券为discountID
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandSignReward extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_sign_reward';
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
    protected $casts = ['id' => 'integer', 'sign_id' => 'integer', 'type_value' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}