<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $date 日期
 * @property string $channel 渠道名称
 * @property string $channel_type 渠道类型
 * @property string $cost 消耗
 * @property string $active_user 激活数(新增)
 * @property string $local_active_user 本地激活数
 * @property string $new_user 注册数
 * @property string $retention_user 次日登录数
 * @property string $rebate 返点
 * @property string $remarks 备注
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandPromoteReportStat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_promote_report_stat';
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
    protected $casts = ['id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}