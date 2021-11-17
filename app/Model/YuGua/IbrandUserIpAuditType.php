<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 主键
 * @property int $audit_id 异常审核报表id
 * @property int $type 1. 机型、渠道、ipd重复超过5个,2. 登录ip数量超过5个,3.异常时间登录超过5次,4.激励请求数超过100次,5.激励请求失败数超过40次,6.快手激励请求数超过40次, 7. 快手激励请求失败数超过20次,8.激励展示数超过60次,9.激励点击率超过60%,10,提现超过5次,11.单日用户登录上报次数超过100次
 * @property string $name 类型名称
 * @property int $date 记录日期:20210928
 */
class IbrandUserIpAuditType extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_user_ip_audit_type';
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
    protected $casts = ['id' => 'integer', 'audit_id' => 'integer', 'type' => 'integer', 'date' => 'integer'];
}