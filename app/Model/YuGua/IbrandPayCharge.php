<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $charge_id 
 * @property string $app 
 * @property string $type 
 * @property int $paid 
 * @property int $refunded 
 * @property int $reversed 
 * @property string $channel 
 * @property string $order_no 
 * @property string $out_trade_no 
 * @property string $client_ip 
 * @property int $amount 
 * @property string $currency 
 * @property string $subject 
 * @property string $body 
 * @property string $extra 
 * @property string $time_paid 
 * @property string $time_expire 
 * @property string $transaction_no 
 * @property string $transaction_meta 
 * @property string $metadata 
 * @property string $credential 
 * @property string $description 
 * @property string $failure_code 
 * @property string $failure_msg 
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandPayCharge extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_pay_charge';
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
    protected $casts = ['id' => 'integer', 'paid' => 'integer', 'refunded' => 'integer', 'reversed' => 'integer', 'amount' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}