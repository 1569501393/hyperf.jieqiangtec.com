<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 用户id
 * @property int $point 当前积分（鸭蛋）数
 * @property int $coin 普通饲料
 * @property int $cash 金额，单位：分
 * @property int $withdraw_cash 已提现金额
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class Asset extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'assets';
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
    protected $casts = ['id' => 'integer', 'point' => 'integer', 'coin' => 'integer', 'cash' => 'integer', 'withdraw_cash' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}