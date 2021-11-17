<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户id，外键关联 user 表 id 字段
 * @property string $type 余额变动的类型：exchange(元宝兑现),cash(提现),new_gift(新人礼)
 * @property string $note 文字描述，展示给用户
 * @property int $value 单位：分
 * @property int $current_balance 当前余额
 * @property int $origin_id 引起变动的数据来源的id
 * @property string $origin_type 引起变动的数据来源类型，值通常为 class 全称
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandBalance extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_balance';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'value' => 'integer', 'current_balance' => 'integer', 'origin_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}