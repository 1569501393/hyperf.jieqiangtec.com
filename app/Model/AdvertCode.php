<?php

declare (strict_types=1);
namespace App\Model;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $name 代码位名称
 * @property string $code 代码位ID
 * @property int $platform 平台 1:安卓，2:iOS
 * @property int $source 广告源 1:穿山甲,2:优量汇,3:快手,4:芒果,5:优量宝,6:旺翔,7:飞马,8:华为,9:小米
 * @property int $type 代码位类型 1:开屏,2:激励视频,3:全屏视频,4:贴片
 * @property string $remark 备注
 * @property \Carbon\Carbon $created_at 创建时间
 * @property \Carbon\Carbon $updated_at 更新时间
 */
class AdvertCode extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'advert_code';
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
    protected $casts = ['id' => 'integer', 'platform' => 'integer', 'source' => 'integer', 'type' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}