<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户ID
 * @property string $name 姓名
 * @property string $mobile 手机号码
 * @property string $note 备注
 * @property string $code 编码
 * @property int $status 状态 0：待审核  1：审核通过 2：审核不通过 3：清退
 * @property int $total_commission 总佣金
 * @property int $balance 佣金余额
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAgent extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_agent';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'status' => 'integer', 'total_commission' => 'integer', 'balance' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}