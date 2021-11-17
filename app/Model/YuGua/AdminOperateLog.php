<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property int $operator_id 操作人员uid
 * @property \Carbon\Carbon $created_at 创建时间
 * @property string $method 操作方法
 * @property string $desc 操作内容
 * @property string $object 操作对象
 * @property string $controller 控制器
 * @property string $action 方法
 * @property string $route 路由
 * @property int $ip ip
 */
class AdminOperateLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'admin_operate_log';
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
    protected $casts = ['id' => 'integer', 'operator_id' => 'integer', 'created_at' => 'datetime', 'ip' => 'integer'];
}