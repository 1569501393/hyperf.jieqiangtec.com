<?php

declare (strict_types=1);
namespace App\Model\ShanYa;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $openid 微信openid
 * @property string $unionid 用户统一标识。针对一个微信开放平台帐号下的应用，同一用户的 unionid 是唯一的。
 * @property string $nickname 微信昵称
 * @property int $sex 普通用户性别，1 为男性，2 为女性
 * @property string $province 普通用户个人资料填写的省份
 * @property string $city 普通用户个人资料填写的城市
 * @property string $country 国家，如中国为 CN
 * @property string $headimgurl 用户头像，最后一个数值代表正方形头像大小（有 0、46、64、96、132 数值可选，0 代表 640*640 正方形头像），用户没有头像时该项为空
 * @property string $privilege 用户特权信息，json 数组，如微信沃卡用户为（chinaunicom）
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class WechatInfo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'wechat_info';
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
    protected $casts = ['id' => 'integer', 'sex' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}