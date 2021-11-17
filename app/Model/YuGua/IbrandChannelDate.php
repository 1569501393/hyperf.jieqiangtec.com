<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $channel_id 渠道id
 * @property string $channel_name 渠道名称
 * @property string $channel_type 渠道类型
 * @property int $click_num 点击数
 * @property int $load_num 下载数
 * @property int $open_num 打开数
 * @property int $reg_num 注册数
 * @property string $record_at 记录日期
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandChannelDate extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_channel_date';
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
    protected $casts = ['id' => 'integer', 'channel_id' => 'integer', 'click_num' => 'integer', 'load_num' => 'integer', 'open_num' => 'integer', 'reg_num' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}