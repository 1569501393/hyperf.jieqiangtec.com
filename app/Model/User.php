<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $mobile 手机号
 * @property string $openid 微信 openid
 * @property string $appleid 苹果用户id
 * @property string $name 名称
 * @property string $nickname 昵称
 * @property int $sex 性别 0：未知，1：男，2：女
 * @property string $avatar 头像
 * @property string $code 邀请码
 * @property int $status 状态 0：禁用，1：正常
 * @property string $channel 来源渠道
 * @property \Carbon\Carbon $created_at 创建时间（即注册时间）
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class User extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';
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
    protected $casts = ['id' => 'integer', 'sex' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}