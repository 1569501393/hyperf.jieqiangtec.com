<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $advert_way 广告源，1.穿山甲，2.优量汇，3.百青藤
 * @property int $advert_type 广告类型，1.开屏 2.激励视频 3.信息流 4.贴片
 * @property int $request_times 请求数量
 * @property int $return_times 返回数量
 * @property int $error_times 失败数量
 * @property string $record_at 记录日期
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertAskRecord extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_ask_record';
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
    protected $casts = ['id' => 'integer', 'advert_way' => 'integer', 'advert_type' => 'integer', 'request_times' => 'integer', 'return_times' => 'integer', 'error_times' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}