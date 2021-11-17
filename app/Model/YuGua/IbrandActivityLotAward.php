<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 奖项设置表
 * @property string $name 奖项名称
 * @property string $value 奖项值
 * @property int $type 奖项类型 (1: 提现奖励, 2: 金豆翻倍奖励, 3: 金豆奖励, 4: 虚拟奖励, 5: 广告奖励)
 * @property int $status 是否开启，0.关闭，1.开启
 * @property string $url 奖项图片地址
 * @property int $sort 排序
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 * @property string $redirect_url 跳转连接
 */
class IbrandActivityLotAward extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_lot_awards';
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
    protected $casts = ['id' => 'integer', 'type' => 'integer', 'status' => 'integer', 'sort' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}