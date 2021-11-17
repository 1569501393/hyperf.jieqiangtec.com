<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 代码位名称
 * @property string $origin_id 代码位ID
 * @property int $sys 系统：1 安卓；2 IOS
 * @property int $source 广告源：2 穿山甲；3 优量汇
 * @property int $type 代码位类型：1 开屏，2 激励视频，3 全屏广告，4 贴片-视频，5 贴片-图片，6 信息流
 * @property string $note 备注
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 */
class IbrandAdvertSourceOrigin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_source_origin';
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
    protected $casts = ['id' => 'integer', 'sys' => 'integer', 'source' => 'integer', 'type' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}