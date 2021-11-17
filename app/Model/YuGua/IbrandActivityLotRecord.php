<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id  转转乐抽奖记录表
 * @property int $user_id ÓÃ»§id
 * @property int $user_type ÓÃ»§ÀàÐÍ£¬1£ºÀÏÓÃ»§£¬2£ºÐÂÓÃ»§
 * @property int $is_reward 是否中奖，0.未中奖，1.中奖
 * @property int $cost 花费金豆
 * @property int $awards_id 奖项id
 * @property string $name 奖项名称
 * @property string $value 奖项值
 * @property int $type 奖项类型 (1: 提现奖励, 2: 金豆翻倍奖励, 3: 金豆奖励, 4: 虚拟奖励, 5: 广告奖励)
 * @property int $status 是否使用，0.未使用，1.已使用
 * @property string $record_date 记录日期
 * @property string $redirect_url 跳转连接
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandActivityLotRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_activity_lot_record';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'user_type' => 'integer', 'is_reward' => 'integer', 'cost' => 'integer', 'awards_id' => 'integer', 'type' => 'integer', 'status' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}