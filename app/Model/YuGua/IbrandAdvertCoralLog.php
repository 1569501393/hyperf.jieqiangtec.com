<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户id
 * @property string $device_sn 设备sn
 * @property string $app_name 应用名称
 * @property string $package_name 应用包名
 * @property string $error_msg 错误message
 * @property string $error_code 错误code
 * @property string $uuid 请求唯一id
 * @property int $client_ip 客户端ip地址
 * @property int $type 进度类型, 1.开始下载，2.激活，3.提交成功, 4.提交失败, 5.展示
 * @property int $loc_type 任务位置：1.应用精选，2.提现任务，3.个人中心 4.首页
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertCoralLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_coral_log';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'client_ip' => 'integer', 'type' => 'integer', 'loc_type' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}