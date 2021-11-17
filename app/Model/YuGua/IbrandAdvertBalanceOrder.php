<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $advert_user_id 关联广告主advert_user表id
 * @property int $charge_type 支付渠道 1wechat,2alipay,3bank
 * @property string $order_no 订单编号
 * @property int $amount 实际到账金额，单位:分
 * @property int $pay_amount 实际支付金额，单位:分
 * @property int $status 订单状态
 * @property string $pay_time 支付时间
 * @property string $transaction_no 第三方交易号
 * @property string $note 备注
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertBalanceOrder extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_balance_order';
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
    protected $casts = ['id' => 'integer', 'advert_user_id' => 'integer', 'charge_type' => 'integer', 'amount' => 'integer', 'pay_amount' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}