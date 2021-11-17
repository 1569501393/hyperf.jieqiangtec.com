<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 账号
 * @property string $password 账号
 * @property string $username 姓名
 * @property string $avatar 头像
 * @property string $balance 余额,单位分
 * @property string $contacts 联系人
 * @property string $mobile 联系电话
 * @property string $mail 联系邮箱
 * @property string $subject_name 账户主体名称
 * @property string $business_license_img 营业执照
 * @property string $remember_token 
 * @property int $status 状态 1 上线 2下线
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertUser extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_user';
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
    protected $casts = ['id' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}