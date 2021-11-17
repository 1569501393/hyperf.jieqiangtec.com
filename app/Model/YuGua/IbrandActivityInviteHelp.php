<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 红包助力表
 * @property int $bonus_id 红包ID
 * @property int $bonus_user_id 红包的用户ID
 * @property int $user_id 助力者用户ID
 * @property string $name 助力者昵称
 * @property string $avatar 助力者头像
 * @property string $amount 助力金额
 * @property int $type 助力类型（1：老用户，2：新用户）
 * @property int $invite_read 邀请者已读记录（0：否，1：是）
 * @property string $ip ip地址
 * @property string $phone_type 手机型号
 * @property string $record_date 记录日期
 * @property \Carbon\Carbon $created_at 开始时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property string $deleted_at 软删除时间
 */
class IbrandActivityInviteHelp extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_invite_help';
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
    protected $casts = ['id' => 'integer', 'bonus_id' => 'integer', 'bonus_user_id' => 'integer', 'user_id' => 'integer', 'type' => 'integer', 'invite_read' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}