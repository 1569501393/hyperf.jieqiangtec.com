<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 
 * @property string $nick_name 
 * @property string $email 
 * @property string $mobile 
 * @property string $channel 注册账号的渠道
 * @property string $password 
 * @property int $status 
 * @property string $sex 
 * @property int $district_code 区
 * @property int $city_code 市
 * @property int $province_code 省
 * @property string $avatar 
 * @property string $city 
 * @property string $birthday 
 * @property string $vocation 职业
 * @property string $remember_token 
 * @property string $agent_code 邀请码
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $signature 
 * @property int $fans_count 
 * @property int $add_fans_count 
 * @property int $follow_count 
 * @property int $praise_count 
 * @property string $education 
 * @property string $income 
 * @property int $gift_new_user 领取新人礼状态
 * @property int $gift_user_information 完善信息状态
 * @property int $fill_in_agent_code 填写邀请码状态
 * @property int $is_virtual 是否是虚拟用户 1是 0不是
 */
class IbrandUserCopy2 extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_user_copy2';
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
    protected $casts = ['id' => 'integer', 'status' => 'integer', 'district_code' => 'integer', 'city_code' => 'integer', 'province_code' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'fans_count' => 'integer', 'add_fans_count' => 'integer', 'follow_count' => 'integer', 'praise_count' => 'integer', 'gift_new_user' => 'integer', 'gift_user_information' => 'integer', 'fill_in_agent_code' => 'integer', 'is_virtual' => 'integer'];
}