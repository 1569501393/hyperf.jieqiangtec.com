<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $put_cost 投放成本
 * @property int $new_active 新增用户（排重激活）
 * @property int $new_reg 新增用户（排重注册）
 * @property int $new_point 新人领豆
 * @property string $new_point_rate 新人领豆率
 * @property int $new_cash 新人提现
 * @property string $new_cash_rate 新人提现率
 * @property int $one_keep 新人留存（领豆1天后）
 * @property string $one_keep_rate 新人留存率（领豆1天后）
 * @property int $two_keep 2日留存（领豆2天后）
 * @property string $two_keep_rate 2日留存率（领豆2天后）
 * @property int $three_keep 3日留存（领豆3天后）
 * @property string $three_keep_rate 3日留存率（领豆3天后）
 * @property int $four_keep 4日留存（领豆4天后）
 * @property string $four_keep_rate 4日留存率（领豆4天后）
 * @property int $five_keep 5日留存（领豆5天后）
 * @property string $five_keep_rate 5日留存率（领豆5天后）
 * @property int $six_keep 6日留存（领豆6天后）
 * @property string $six_keep_rate 6日留存率（领豆6天后）
 * @property int $seven_keep 7日留存（领豆7天后）
 * @property string $seven_keep_rate 7日留存率（领豆7天后）
 * @property string $keep_price 留存单价
 * @property string $record_at 记录日期
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandChannelKeep extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_keep';
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
    protected $casts = ['id' => 'integer', 'new_active' => 'integer', 'new_reg' => 'integer', 'new_point' => 'integer', 'new_cash' => 'integer', 'one_keep' => 'integer', 'two_keep' => 'integer', 'three_keep' => 'integer', 'four_keep' => 'integer', 'five_keep' => 'integer', 'six_keep' => 'integer', 'seven_keep' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}