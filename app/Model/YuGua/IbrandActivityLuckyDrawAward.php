<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 自增id
 * @property string $name 名称
 * @property int $type 提现类型 (1: 无门槛提现, 2: 超级红包提现, 3: 大额提现, 4: 现金金额)
 * @property int $min 最小奖励值,单位为（分）
 * @property int $max 最大奖励值,单位为（分）
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 * @property int $deleted_at 删除时间
 */
class IbrandActivityLuckyDrawAward extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_lucky_draw_awards';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'min' => 'integer', 'max' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime', 'deleted_at' => 'integer'];
}