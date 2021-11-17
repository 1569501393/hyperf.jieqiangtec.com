<?php

declare (strict_types=1);
namespace App\Model\YuGua;

use Hyperf\DbConnection\Model\Model;
/**
 * @property int $id 
 * @property string $imei imei
 * @property string $androidid androidid
 * @property string $oaid oaid
 * @property int $platform 
 * @property string $channel 渠道
 * @property \Carbon\Carbon $created_at 创建时间
 */
class AdOceanReportActive extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ad_ocean_report_active';
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
    protected $casts = ['id' => 'integer', 'platform' => 'integer', 'created_at' => 'datetime'];
}