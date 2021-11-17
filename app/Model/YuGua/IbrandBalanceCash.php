<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 分销商ID
 * @property string $cash_no 订单号
 * @property int $amount 金额
 * @property int $service_charge_amount 手续费
 * @property int $balance 余额
 * @property int $status 状态 0：待审核  1:待打款提现 2：已打款提现  3:审核不通过
 * @property string $settle_time 打款时间
 * @property string $cert 打款凭证
 * @property int $bank_account_id 账号ID
 * @property string $bank_name 银行名称
 * @property string $bank_serial_number 银行流水号
 * @property string $bank_number 账号
 * @property string $owner_name 收款姓名
 * @property string $identity_card 身份证
 * @property string $channel 提现方式
 * @property string $user_channel user表的channel
 * @property string $app_channel app包内渠道
 * @property string $mobile 手机号
 * @property string $note 错误信息
 * @property int $flag 0：表示无标记;1：表示新人专享; 2：表示日常专享; 3：表示分享专享; 4：表示拉新专享； 5：表示泡泡专享；6:活动专享 7：游戏专享 9： 转转乐提现; 10: 表示超级加倍提现; 11: 表示珊瑚0.3提现 12:神秘任务-超级加倍 13:翻牌活动提现 14:语音红包  15.大转盘提现
 * @property string $imei imei
 * @property string $oaid oaid
 * @property string $androidid androidid
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property string $days 
 * @property int $api_version api-version
 */
class IbrandBalanceCash extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_balance_cash';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'amount' => 'integer', 'service_charge_amount' => 'integer', 'balance' => 'integer', 'status' => 'integer', 'bank_account_id' => 'integer', 'flag' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'api_version' => 'integer'];
}