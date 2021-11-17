<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $user_id 用户ID
 * @property string $version 版本号
 * @property string $device_id 内部设备号
 * @property string $channel 内部头部渠道 CSJ, QTT, QTT2, CSJ2
 * @property string $imei 外部imei
 * @property string $androidid 外部androidid
 * @property string $oaid 外部oaid
 * @property string $comefrom 外部来源: 1-趣头条 2-穿山甲 3-趣头条2 4-穿山甲2
 * @property int $quchong 类型: 1-渠道 2-设备
 * @property \Carbon\Carbon $created_at 
 * @property \Carbon\Carbon $updated_at 
 * @property string $deleted_at 
 */
class IbrandAdvertMonitorLog extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ibrand_advert_monitor_log';
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
    protected $casts = ['id' => 'integer', 'user_id' => 'integer', 'quchong' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}