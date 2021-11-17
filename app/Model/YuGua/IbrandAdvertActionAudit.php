<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户 id
 * @property int $status 状态 0：待审核，1：已封禁，2：已删除
 * @property int $operator_id 操作人员
 * @property int $date 日期
 * @property int $audit_num 审核次数
 * @property string $forbid_at 封禁时间
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class IbrandAdvertActionAudit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_action_audit';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'status' => 'integer', 'operator_id' => 'integer', 'date' => 'integer', 'audit_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}