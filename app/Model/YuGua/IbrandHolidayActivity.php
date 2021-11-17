<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 活动名称
 * @property string $banner_url 活动banner
 * @property string $starts_at 活动开始时间
 * @property string $ends_at 活动结束时间
 * @property int $status 活动状态
 * @property int $gold_bean 金豆奖励
 * @property int $balance 余额奖励
 * @property int $type 1 七夕活动;2 国庆活动
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandHolidayActivity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_holiday_activity';
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
    protected $casts = ['id' => 'integer', 'status' => 'integer', 'gold_bean' => 'integer', 'balance' => 'integer', 'type' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}