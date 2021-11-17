<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $advert_user_id 广告主id，外键关联 advert_user 表 id 字段
 * @property int $type 余额变动的类型：1：recharge(充值) 2：refund(退款) 3:广告消费
 * @property string $note 文字描述
 * @property string $value 单位：分
 * @property string $current_balance 当前余额
 * @property int $origin_id 引起变动的数据来源的id
 * @property string $origin_type 引起变动的数据来源类型，值通常为 class 全称
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAdvertBalance extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_balance';
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
    protected $casts = ['id' => 'integer', 'advert_user_id' => 'integer', 'type' => 'integer', 'origin_id' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}