<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $date 日期
 * @property string $channel 渠道名称
 * @property int $new 新增用户
 * @property int $one 一日留存
 * @property int $two 二日留存
 * @property int $three 三日留存
 * @property int $four 四日留存
 * @property int $five 五日留存
 * @property int $six 六日留存
 * @property int $seven 七日留存
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandUserRemainStat extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_user_remain_stat';
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
    protected $casts = ['id' => 'integer', 'new' => 'integer', 'one' => 'integer', 'two' => 'integer', 'three' => 'integer', 'four' => 'integer', 'five' => 'integer', 'six' => 'integer', 'seven' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}