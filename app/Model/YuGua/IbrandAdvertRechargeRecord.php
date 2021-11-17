<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $advert_user_id 账号id
 * @property int $account 充值金额
 * @property int $recharge_type 充值方式 1wechat,2alipay,3bank
 * @property string $note 备注
 * @property string $recharge_at 充值时间
 * @property int $status 状态 1充值成功 -1充值失败
 * @property string $order_no 订单号
 * @property string $transaction_id 交易号
 * @property string $paytime 支付时间
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAdvertRechargeRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_recharge_record';
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
    protected $casts = ['id' => 'integer', 'advert_user_id' => 'integer', 'account' => 'integer', 'recharge_type' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}