<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $withdraw_oid withdraw_order表id
 * @property string $return_code 返回状态码
 * @property string $return_msg 返回信息
 * @property string $mch_appid 商户账号appid
 * @property string $mchid 商户号
 * @property string $device_info 设备号
 * @property string $nonce_str 随机字符串
 * @property string $result_code 业务结果
 * @property string $err_code 错误代码
 * @property string $err_code_des 错误代码描述
 * @property string $partner_trade_no 商户订单号
 * @property string $payment_no 微信付款单号
 * @property string $payment_time 付款成功时间
 * @property string $sys_error 其他错误
 * @property \Carbon\Carbon $created_at 创建时间
 */
class WechatPayLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wechat_pay_log';
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'shanya';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'withdraw_oid' => 'integer', 'created_at' => 'datetime'];
}