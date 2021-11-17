<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 红包表
 * @property int $user_id 用户ID
 * @property int $invite_user_id 邀请者用户ID
 * @property string $amount 红包金额
 * @property string $received_amount 已获得金额
 * @property int $status 红包状态（0：进行中，1：待提现，2：已过期，3：审核中，4：已提现，5：已完结，6：审核未通过）
 * @property int $withdraw_result 提现结果是否读取（0：未读，1：已读）
 * @property int $is_delay 是否延迟自动打款（0：否，1：是）
 * @property string $phone_type 手机型号
 * @property string $record_date 记录日期
 * @property string $withdraw_at ????
 * @property \Carbon\Carbon $created_at 开始时间
 * @property \Carbon\Carbon $updated_at ????
 * @property string $deleted_at 软删除时间
 */
class IbrandActivityInviteBonu extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_invite_bonus';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'invite_user_id' => 'integer', 'status' => 'integer', 'withdraw_result' => 'integer', 'is_delay' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}