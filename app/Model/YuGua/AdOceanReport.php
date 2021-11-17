<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property int $uid 用户id
 * @property string $imei imei
 * @property string $androidid androidid
 * @property string $oaid oaid
 * @property int $type 类型 1：一次提现上报，2：二次提现上报
 * @property int $platform 
 * @property string $channel 渠道
 * @property \Carbon\Carbon $created_at 创建时间
 */
class AdOceanReport extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ad_ocean_report';
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
    protected $casts = ['id' => 'integer', 'uid' => 'integer', 'type' => 'integer', 'platform' => 'integer', 'created_at' => 'datetime'];
}