<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $client_id 应用id
 * @property string $state 验证请求有效性参数
 * @property string $client_secret 应用secret
 * @property int $account_uin 推广主id
 * @property int $account_id 推广帐号id
 * @property int $user_action_set_id 用户行为源id
 * @property string $authorization_code OAuth认证code
 * @property string $access_token 授权令牌，access_token默认有效期为24小时
 * @property string $refresh_token 应用refresh_token refresh_token默认有效期为30天
 * @property int $access_token_expires_in access_token到期时间 单位秒
 * @property int $refresh_token_expires_in refresh_token到期时间 单位秒
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertMonitorGdt extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_monitor_gdt';
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
    protected $casts = ['id' => 'integer', 'client_id' => 'integer', 'account_uin' => 'integer', 'account_id' => 'integer', 'user_action_set_id' => 'integer', 'access_token_expires_in' => 'integer', 'refresh_token_expires_in' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}