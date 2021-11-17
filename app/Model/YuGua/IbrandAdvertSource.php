<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $parent 广告位置：open 开屏，reword 激励广告，patch 贴片广告，drawing 信息流
 * @property string $position 细分广告位置
 * @property int $sys 系统：1 安卓；2 IOS
 * @property int $origin_id advert_source_origin表ID
 * @property int $weight 权重
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAdvertSource extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_source';
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
    protected $casts = ['id' => 'integer', 'sys' => 'integer', 'origin_id' => 'integer', 'weight' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}