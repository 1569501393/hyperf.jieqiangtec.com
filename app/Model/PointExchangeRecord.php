<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property int $index 当前兑换到第几颗，从0开始
 * @property int $need_coin 需要的普通饲料数
 * @property int $cost_coin 已投喂的普通饲料数
 * @property int $point 兑换的鸭蛋数
 * @property int $coin_rid coin_record表id
 * @property int $point_rid point_record表id
 * @property int $setting_lid 配置日志记录id
 * @property int $status 状态 1：兑换中，1：已完成兑换
 * @property int $day 日期（20210629）
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class PointExchangeRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'point_exchange_record';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'index' => 'integer', 'need_coin' => 'integer', 'cost_coin' => 'integer', 'point' => 'integer', 'coin_rid' => 'integer', 'point_rid' => 'integer', 'setting_lid' => 'integer', 'status' => 'integer', 'day' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}